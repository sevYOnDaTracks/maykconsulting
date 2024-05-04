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
                    $imageWu = file_get_contents('assets/images/wuLogoOffi.jpg');
                    $imageRia = file_get_contents('assets/images/ria.png');
                    $imageMg = file_get_contents('assets/images/MoneyGramLogo.png');
                    $user= $this->getUser();
                    $userToFound = $userRepository->findOneByEmail($user->getUserIdentifier());

                    $entityManager->persist($hebergement);
                    $entityManager->flush();
                    // Rendre le HTML de votre modèle avec Twig
                    $html = $this->renderView('facture/hebergement.html.twig', [
                        'numero_facture' => '123456',
                        'date_facture' => new \DateTime(),
                        'image_content' => base64_encode($imageContent),
                        'image_wu'=>base64_encode($imageWu),
                        'image_ria' =>base64_encode($imageRia),
                        'image_mg' =>base64_encode($imageMg),
                        'pays' => $pays,
                        'ville' => $ville

                        // Autres données de facture
                    ]);

                    $pdfContent = $dompdfService->generatePdf($html);

                    $email = (new Email())
                        ->from('noreply@maykconsulting.fr')
                        ->to($user->getEmail()) // Utilisez l'e-mail saisi par l'utilisateur
                        ->subject('Demande Soumise - Maykconsulting')
                        ->html('<p>Votre demande a été reçue avec succès ! Nous vous informons que le processus de traitement démarrera après réception des fonds.</p>
                <br>
                Mayk - Consulting Services')
                        ->attach($pdfContent, 'Devis_Hebergement_'. $user->getName() .' _'. (new DateTime())->format('Y-m-d_H-i-s') .'.pdf', 'application/pdf');

                    $emailForHoster = (new Email())->from('noreply@maykconsulting.fr')
                        ->to('maykconsulting@gmail.com')
                        ->subject('Demande hebergement - ' . $user->getName() . ' ' . $user->getLastName() )->attachFromPath('assets/images/logo.png')
                        ->text('Un nouvel utilisateur viens d\'effectuer une demande pour le pays suivant : ' .  $pays );



                    $apiKey = '64ff6202a62179784d1ffa3dd0546b97';
                    $mailtrap = new MailtrapClient(new Config($apiKey));
                    $email->getHeaders()
                        ->add(new CategoryHeader('Hebergement - Management'))
                    ;
                    $emailForHoster->getHeaders()
                        ->add(new CategoryHeader('Hebergement - Management'))
                    ;

                    $mailtrap->sending()->emails()->send($email);
                    $mailtrap->sending()->emails()->send($emailForHoster);


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

    #[Route('/justificatif-Paiement', name: 'app_hebergement_justificatif_paiement' , methods: ['POST'])]
    public function recupererJustificatifPaiement(Request $request , UserRepository $userRepository){
        if ($request->isMethod('POST')) {

            $user = $this->getUser();
            $hebergement = $this->getUser()->getHebergement();


            if ($request->files->get('justificatif')) {

                // Supprimer l'ancien avatar s'il existe
                $oldJustificatifPath = $user->getHebergement()->getJustificatifPaiement();
                if ($oldJustificatifPath && file_exists($oldJustificatifPath)) {
                    unlink($oldJustificatifPath);
                    $user->getHebergement()->setJustificatifPaiement(null);
                }

                $justificatif = $request->files->get('justificatif');

                // Traitement de l'avatar téléchargé
                $fileName = md5(uniqid()) . '.' . $justificatif->guessExtension();
                $justificatif->move($this->getParameter('justificatif_directory'), $fileName);
                $user->getHebergement()->setJustificatifPaiement($fileName);

                $userRepository->save($user , true);
                $email = (new Email())
                    ->from('noreply@maykconsulting.fr')
                    ->to($user->getEmail()) // Utilisez l'e-mail saisi par l'utilisateur
                    ->subject('Accusé de reception : Justificatif de paiement')
                    ->html('<p>Votre justificatif de paiement a été reçue avec succès ! Nous vous informerons lorsque celui-ci sera validé.</p>
<p>Si tel est le cas le statut de votre demande changera automatiquement et vous receverez ainsi une notification .</p>
                <br>
                Mayk - Consulting Services');

                $emailForHoster = (new Email())->from('noreply@maykconsulting.fr')
                    ->to('maykconsulting@gmail.com')
                    ->subject('Accusé de reception : Justificatif de paiement - ' . $hebergement->getUser()->getName() . ' ' . $hebergement->getUser()->getLastName() )->attachFromPath('assets/images/logo.png')
                    ->text('Un nouvel utilisateur viens de joindre son justificatif de paiement pour Hebergement');

                $apiKey = '64ff6202a62179784d1ffa3dd0546b97';
                $mailtrap = new MailtrapClient(new Config($apiKey));
                $email->getHeaders()
                    ->add(new CategoryHeader('hebergement - Management'))
                ;

                $emailForHoster->getHeaders()
                    ->add(new CategoryHeader('Hebergement - Management'))
                ;

                $mailtrap->sending()->emails()->send($email); // a envoyer au client pour une confirmation
                $mailtrap->sending()->emails()->send($emailForHoster); /// A envoyer a maykconsulting pour informer les administrateur

            }else{
                $this->addFlash('failed-add-justificatif', 'Aucun justificatif de paiement reçu !.');
                return $this->redirectToRoute('app_hebergement', [], Response::HTTP_SEE_OTHER);
            }

        }
        $this->addFlash('success-add-justificatif', 'Votre demande a été soumise !.');
        return $this->redirectToRoute('app_hebergement', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/delete/{id}', name: 'app_hebergement_delete', methods: ['POST'])]
    public function delete(Request $request, Hebergement $hebergement, HebergementRepository $hebergementRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$hebergement->getId(), $request->request->get('_token'))) {
            $hebergementRepository->remove($hebergement, true);
            $this->addFlash('success', 'La demande d\'hébergement a été supprimée avec succès.');
        }
        return $this->redirectToRoute('app_hebergement');
    }

    #[Route('/all', name: 'app_hebergement_management', methods: ['GET'])]
    public function allGarant(HebergementRepository $hebergementRepository , PublicMessageRepository $publicMessageRepository): Response
    {


        $nombreDossiersEnAttenteDePaiement = $hebergementRepository->countDossiersWithStatus(0);
        $nombreDossiersEncours = $hebergementRepository->countDossiersWithStatus(1);
        $nombreDossierstermines = $hebergementRepository->countDossiersWithStatus(2);
        $nombreDossierscloturer = $hebergementRepository->countDossiersWithStatus(3);


        $garantsEnAttente = $hebergementRepository->findByStatut(0);
        $garantsEnCours = $hebergementRepository->findByStatut(1);
        $garantsTerminees = $hebergementRepository->findByStatut(2);
        $garantsCloturer = $hebergementRepository->findByStatut(3);

        $nombreEntitesMessage = $this->recupererLenombreDeMessage($publicMessageRepository);

        return $this->render('administration/hebergement/management.html.twig', [
            'garant' => $hebergementRepository->findAll(),
            'nombreEntitesMessage' => $nombreEntitesMessage,
            'enAttenteDePaiement' => $nombreDossiersEnAttenteDePaiement,
            'EnAttentes' => $garantsEnAttente ,
            'Cloturer' => $garantsCloturer,
            'EnCours' => $garantsEnCours,
            'Termine' => $garantsTerminees,
            'nombreEncours' => $nombreDossiersEncours,
            'nombreTerminee' => $nombreDossierstermines,
            'nombreCloturer' => $nombreDossierscloturer,
        ]);
    }


    #[Route('/envoyezMessageHebergement', name: 'app_hebergement_envoyez_mail', methods: ['POST'])]
    public function envoyezMail(Request $request , MailerInterface $mailer ): Response
    {

        $emailClient = $request->request->get('email');
        $objetClient = $request->request->get('objet');
        $messageclient = $request->request->get('message');

        if ($request->isMethod('POST')) {

            $email = (new Email())
                ->from('noreply@maykconsulting.fr')
                ->to($emailClient) // Utilisez l'e-mail saisi par l'utilisateur
                ->subject($objetClient)
                ->html('<p>' .  $messageclient . '</p>
                <br>
                Mayk - Consulting Services');

            $apiKey = '64ff6202a62179784d1ffa3dd0546b97';
            $mailtrap = new MailtrapClient(new Config($apiKey));
            $email->getHeaders()
                ->add(new CategoryHeader('Hebergement - Management'))
            ;

            $mailtrap->sending()->emails()->send($email);


        }

        $this->addFlash('success-mail-send', 'Votre mail a été envoyé avec success');
        return $this->redirectToRoute('app_hebergement_management');
    }

    #[Route('/update/{id}', name: 'app_hebergement_update' , methods: ['GET', 'POST'])]
    public function updateHebergement(Request $request, HebergementRepository $hebergementRepository , Hebergement $hebergement , UserRepository $userRepository , MailerInterface $mailer) : Response{
        if ($request->isMethod('POST')) {

            $pays = $request->request->get('pays');
            $ville = $request->request->get('ville');
            $statut = $request->request->get('statutDemande');
            $justificatifPaiement =$request->files->get('justificatifPaiement');

            if ($request->files->get('hebergementFile')) {

                // Supprimer l'ancien avatar s'il existe
                $oldHebergementPath = $hebergement->getHebergementFile();
                if ($oldHebergementPath && file_exists($oldHebergementPath)) {
                    unlink($oldHebergementPath);
                    $hebergement->setHebergementFile(null);
                }

                $hebergementFile = $request->files->get('hebergementFile');

                // Traitement de l'avatar téléchargé
                $fileName = md5(uniqid()) . '.' . $hebergementFile->guessExtension();
                $hebergementFile->move($this->getParameter('hebergement_directory'), $fileName);
                $hebergement->setHebergementFile($fileName);
            }

            if ($request->files->get('justificatifPaiement')) {

                // Supprimer l'ancien avatar s'il existe
                $oldJustificatifPath = $hebergement->getJustificatifPaiement();
                if ($oldJustificatifPath && file_exists($oldJustificatifPath)) {
                    unlink($oldJustificatifPath);
                    $hebergement->setJustificatifPaiement(null);
                }

                $justificatifPaiement = $request->files->get('justificatifPaiement');

                // Traitement de l'avatar téléchargé
                $fileName = md5(uniqid()) . '.' . $justificatifPaiement->guessExtension();
                $justificatifPaiement->move($this->getParameter('justificatif_directory'), $fileName);
                $hebergement->setJustificatifPaiement($fileName);
            }

            $oldStatutDemande = $hebergement->getStatutDemande();

            $hebergement->setPays($pays);
            $hebergement->setVilleEtude($ville);


            if($oldStatutDemande !== $statut) {
                $hebergement->setLastUpdate(new DateTime());

                $email = (new Email())
                    ->from('noreply@maykconsulting.fr')
                    ->to($hebergement->getUser()->getEmail()) // Utilisez l'e-mail saisi par l'utilisateur
                    ->subject('Urgent - Mise à jour de votre dossier')
                    ->html('<p>L\'état d\'avancement de votre dossier d\'hebergement a été mis à jour. Veuillez vous connecter sur le site pour plus d\'informations .</p><br> <p> Mayk consulting Services</p>')
                    ->attachFromPath('assets/images/logo.png');

                $apiKey = '64ff6202a62179784d1ffa3dd0546b97';
                $mailtrap = new MailtrapClient(new Config($apiKey));
                $email->getHeaders()
                    ->add(new CategoryHeader('Hebergement - Management'))
                ;
                $mailtrap->sending()->emails()->send($email);

            }

            $hebergement->setStatutDemande($statut);
            $hebergementRepository->save($hebergement , true);

            $this->addFlash('success-edit', 'Modification success !.');
            return $this->redirectToRoute('app_hebergement_management', [], Response::HTTP_SEE_OTHER);
        }

        // $this->addFlash('success-edit', 'Modification success !.');
        return $this->redirectToRoute('app_hebergement_management', [], Response::HTTP_SEE_OTHER);
    }

}
