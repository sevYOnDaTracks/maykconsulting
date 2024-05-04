<?php

namespace App\Controller;

use App\Entity\Hebergement;
use App\Repository\HebergementRepository;
use App\Repository\PublicMessageRepository;
use App\Repository\UserRepository;
use App\Services\DompdfService;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Mailtrap\Config;
use Mailtrap\EmailHeader\CategoryHeader;
use Mailtrap\MailtrapClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Part\DataPart;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

#[Route('/hebergement')]
class HebergementController extends AbstractController
{
    #[Route('/', name: 'app_hebergement')]
    public function index(PublicMessageRepository $publicMessageRepository): Response
    {
        $nombreEntitesMessage = $this->recupererLenombreDeMessage($publicMessageRepository);
        return $this->render('administration/hebergement/index.html.twig', [
            'controller_name' => 'HebergementController',
            'nombreEntitesMessage' => $nombreEntitesMessage,
        ]);
    }

    public function recupererLenombreDeMessage(PublicMessageRepository $publicMessageRepository)
    {
        $queryBuilder = $publicMessageRepository->createQueryBuilder('p');
        $queryBuilder->select('COUNT(p.id)');
        $nombreEntitesMessage = $queryBuilder->getQuery()->getSingleScalarResult();

        return $nombreEntitesMessage;
    }

    #[Route('/new', name: 'app_hebergement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, HebergementRepository $hebergementRepository, UserRepository $userRepository, EntityManagerInterface $entityManager , MailerInterface $mailer , PublicMessageRepository $publicMessageRepository , DompdfService $dompdfService): Response
    {
        $nombreEntitesMessage = $this->recupererLenombreDeMessage($publicMessageRepository);

        $hebergement = new Hebergement();
        if ($request->isMethod('POST')) {

            $user=$this->getUser();
            $pays = $request->request->get('pays');
            $dateHeureActuelles = new \DateTime();
            $ville = $request->request->get('ville');
            $passport = $request->files->get('pathPassport');
            $attestation = $request->files->get('pathAttestationAdmission');
            $autres = $request->request->get('othersInformations');

            // Vérifier si les fichiers sont téléchargés
            if($user->getPassport() || $passport){

                if ($attestation) {
                    // Procéder au traitement du formulaire
                    $hebergement ->setPays($pays);
                    $hebergement ->setDateDemande($dateHeureActuelles);
                    $hebergement ->setVilleEtude($ville);

                    if($passport && $user->getPassport() == null){
                        // Gérer le fichier du passeport seulement si l'utilisateur n'a pas joint de passport
                        $passportFileName = md5(uniqid()) . '.' . $passport->guessExtension();
                        $passport->move($this->getParameter('passport_directory'), $passportFileName);
                        $hebergement ->setPathPassport($passportFileName);
                        $user->setPassport($passportFileName);
                    }
                    // Gérer le fichier d'attestation
                    $attestationFileName = md5(uniqid()) . '.' . $attestation->guessExtension();
                    $attestation->move($this->getParameter('attestation_directory'), $attestationFileName);
                    $hebergement ->setPathAdmissionFile($attestationFileName);

                    $hebergement ->setInformations($autres);
                    $hebergement ->setStatutDemande(0); // une demande commence par défaut avec le statut 0

                    $hebergement ->setUser($user);

                    $hebergementRepository->save($hebergement , true);
                    $userRepository->save($user, true);

                    $imageContent = file_get_contents('assets/images/consulting.png');

                    // Rendre le HTML de votre modèle avec Twig
                    $html = $this->renderView('facture/hebergement.html.twig', [
                        'numero_facture' => '123456',
                        'date_facture' => new \DateTime(),
                        'image_content' => base64_encode($imageContent),
                        // Autres données de facture
                    ]);

                    $pdfContent = $dompdfService->generatePdf($html);
                    $pdfAttachment = new DataPart($pdfContent, 'facture.pdf', 'application/pdf');

                    $email = (new Email())
                        ->from('noreply@maykconsulting.fr')
                        ->to($user->getEmail()) // Utilisez l'e-mail saisi par l'utilisateur
                        ->subject('Demande Soumise - Maykconsulting')
                        ->html('<p>Votre demande a été reçue avec succès ! Nous vous informons que le processus de traitement démarrera après réception des fonds.</p>
                <br>
                Mayk - Consulting Services')
                        ->attach($pdfContent, 'Devis_Hebergement_'. $user->getName() .' _'. (new DateTime())->format('Y-m-d_H-i-s') .'.pdf', 'application/pdf');



                    $apiKey = '64ff6202a62179784d1ffa3dd0546b97';
                    $mailtrap = new MailtrapClient(new Config($apiKey));
                    $email->getHeaders()
                        ->add(new CategoryHeader('Hebergement - Management'))
                    ;

                    $mailtrap->sending()->emails()->send($email);

                    $entityManager->persist($hebergement);
                    $entityManager->flush();

                    $this->addFlash('success-add-hebergement', 'Votre demande a été soumise !.');
                    return $this->redirectToRoute('app_hebergement', [], Response::HTTP_SEE_OTHER);
                } else {
                    // Gérer le cas où les fichiers ne sont pas téléchargés
                    $this->addFlash('error-creation-demande', 'Veuillez ajouter les fichiers requis.');
                }
            }
        }

        return $this->render('/administration/hebergement/index.html.twig', [
            'controller_name' => 'AdmissionController',
            'nombreEntitesMessage' => $nombreEntitesMessage,
        ]);
    }
  
}
