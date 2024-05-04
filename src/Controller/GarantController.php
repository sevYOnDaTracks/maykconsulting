<?php

namespace App\Controller;

use App\Entity\GarantFinancier;
use App\Repository\GarantFinancierRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PublicMessageRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use DateTime;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use Mailtrap\Config;
use Mailtrap\Helper\ResponseHelper;
use Mailtrap\MailtrapClient;
use Symfony\Component\Mime\Address;
use Mailtrap\EmailHeader\CategoryHeader;
use App\Services\DompdfService;
use Symfony\Component\Mime\Part\DataPart;



#[Route('/garant')]
class GarantController extends AbstractController
{
    #[Route('/', name: 'app_garant' , methods: ['GET', 'POST'])]
    public function index(PublicMessageRepository $publicMessageRepository ,Request $request, GarantFinancierRepository $garantFinancierRepository): Response
    {
        $user = $this->getUser();
        $garantFinancier = $garantFinancierRepository->findGarantByUser($user);

        $nombreEntitesMessage = $this->recupererLenombreDeMessage($publicMessageRepository);

        return $this->render('administration/garant/index.html.twig', [
            'controller_name' => 'GarantController',
            'nombreEntitesMessage' => $nombreEntitesMessage,
            'garantFinancier' => $garantFinancier
        ]);
    }


    #[Route('/update/{id}', name: 'app_garant_update' , methods: ['GET', 'POST'])]
    public function updateGarantDossier(Request $request, GarantFinancierRepository $garantFinancierRepository , GarantFinancier $garantFinancier , UserRepository $userRepository , MailerInterface $mailer) : Response{
        if ($request->isMethod('POST')) {
            
            $pays = $request->request->get('pays');
            $ville = $request->request->get('ville');
            $statut = $request->request->get('statutDemande');


            

            if ($request->files->get('garantFile')) {

                // Supprimer l'ancien avatar s'il existe
                $oldGarantPath = $garantFinancier->getGarantFile();
                if ($oldGarantPath && file_exists($oldGarantPath)) {
                    unlink($oldGarantPath);
                    $garantFinancier->setGarantFile(null);
                }

                $garantFile = $request->files->get('garantFile');

                // Traitement de l'avatar téléchargé
                $fileName = md5(uniqid()) . '.' . $garantFile->guessExtension();
                $garantFile->move($this->getParameter('garant_directory'), $fileName);
                $garantFinancier->setGarantFile($fileName);
            }

            if ($request->files->get('justificatifPaiement')) {

                // Supprimer l'ancien avatar s'il existe
                $oldJustificatifPath = $garantFinancier->getJustificatifPaiement();
                if ($oldJustificatifPath && file_exists($oldJustificatifPath)) {
                    unlink($oldJustificatifPath);
                    $garantFinancier->setJustificatifPaiement(null);
                }

                $justificatifPaiement = $request->files->get('justificatifPaiement');

                // Traitement de l'avatar téléchargé
                $fileName = md5(uniqid()) . '.' . $justificatifPaiement->guessExtension();
                $justificatifPaiement->move($this->getParameter('justificatif_directory'), $fileName);
                $garantFinancier->setJustificatifPaiement($fileName);
            }

            $oldStatutDemande = $garantFinancier->getStatutDemande();

            $garantFinancier->setPays($pays);
            $garantFinancier->setVilleEtude($ville);


            if($oldStatutDemande !== $statut) {
                $garantFinancier->setLastUpdate(new DateTime());

            $email = (new Email())
            ->from('noreply@maykconsulting.fr')
            ->to($garantFinancier->getUser()->getEmail()) // Utilisez l'e-mail saisi par l'utilisateur
            ->subject('Urgent - Mise à jour de votre dossier')
            ->html('<p>L\'état d\'avancement de votre dossier a été mis à jour. Veuillez vous connecter sur le site pour plus d\'informations .</p><br> <p> Mayk consulting Services</p>')
            ->attachFromPath('assets/images/logo.png');
    
            $apiKey = '64ff6202a62179784d1ffa3dd0546b97';
                $mailtrap = new MailtrapClient(new Config($apiKey));
                $email->getHeaders()
                    ->add(new CategoryHeader('Garant - Management'))
                ;
                $mailtrap->sending()->emails()->send($email);

            }

            $garantFinancier->setStatutDemande($statut);
            $garantFinancierRepository->save($garantFinancier , true);


            $this->addFlash('success-edit', 'Modification success !.');
            return $this->redirectToRoute('app_garant_management', [], Response::HTTP_SEE_OTHER);
        }

       // $this->addFlash('success-edit', 'Modification success !.');
        return $this->redirectToRoute('app_garant_management', [], Response::HTTP_SEE_OTHER);
    }

    public function recupererLenombreDeMessage(PublicMessageRepository $publicMessageRepository)
    {
        $queryBuilder = $publicMessageRepository->createQueryBuilder('p');
        $queryBuilder->select('COUNT(p.id)');
        $nombreEntitesMessage = $queryBuilder->getQuery()->getSingleScalarResult();

        return $nombreEntitesMessage;
    }

    #[Route('/justificatif-Paiement', name: 'app_garant_justificatif_paiement' , methods: ['POST'])]
    public function recupererJustificatifPaiement(Request $request , UserRepository $userRepository){
        if ($request->isMethod('POST')) {

            $user = $this->getUser();
            $garant = $this->getUser()->getGarantFinancier();

            
            if ($request->files->get('justificatif')) {

                // Supprimer l'ancien avatar s'il existe
                $oldJustificatifPath = $user->getGarantFinancier()->getJustificatifPaiement();
                if ($oldJustificatifPath && file_exists($oldJustificatifPath)) {
                    unlink($oldJustificatifPath);
                    $user->getGarantFinancier()->setJustificatifPaiement(null);
                }

                $justificatif = $request->files->get('justificatif');

                // Traitement de l'avatar téléchargé
                $fileName = md5(uniqid()) . '.' . $justificatif->guessExtension();
                $justificatif->move($this->getParameter('justificatif_directory'), $fileName);
                $user->getGarantFinancier()->setJustificatifPaiement($fileName);
                
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
                    ->subject('Accusé de reception : Justificatif de paiement - ' . $garant->getUser()->getName() . ' ' . $garant->getUser()->getLastName() )->attachFromPath('assets/images/logo.png')
                    ->text('Un nouvel utilisateur viens de joindre son justificatif de paiement');

                $apiKey = '64ff6202a62179784d1ffa3dd0546b97';
                $mailtrap = new MailtrapClient(new Config($apiKey));
                $email->getHeaders()
                    ->add(new CategoryHeader('Garant - Management'))
                ;

                $emailForHoster->getHeaders()
                    ->add(new CategoryHeader('Garant - Management'))
                ;

                $mailtrap->sending()->emails()->send($email); // a envoyer au client pour une confirmation
                $mailtrap->sending()->emails()->send($emailForHoster); /// A envoyer a maykconsulting pour informer les administrateur

            }else{
                $this->addFlash('failed-add-justificatif', 'Aucun justificatif de paiement reçu !.');
                return $this->redirectToRoute('app_garant', [], Response::HTTP_SEE_OTHER);
            }

        }
        $this->addFlash('success-add-justificatif', 'Votre demande a été soumise !.');
                return $this->redirectToRoute('app_garant', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/new', name: 'app_garant_new', methods: ['GET', 'POST'])]
    public function new(Request $request, GarantFinancierRepository $garantFinancierRepository, UserRepository $userRepository, EntityManagerInterface $entityManager , MailerInterface $mailer , PublicMessageRepository $publicMessageRepository , DompdfService $dompdfService): Response
    {
        $nombreEntitesMessage = $this->recupererLenombreDeMessage($publicMessageRepository);

        $garant = new GarantFinancier();
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
                $garant->setPays($pays);
                $garant->setDateDemande($dateHeureActuelles);
                $garant->setVilleEtude($ville);
    
                if($passport && $user->getPassport() == null){
                // Gérer le fichier du passeport seulement si l'utilisateur n'a pas joint de passport
                $passportFileName = md5(uniqid()) . '.' . $passport->guessExtension();
                $passport->move($this->getParameter('passport_directory'), $passportFileName);
                $garant->setPathPassport($passportFileName);
                $user->setPassport($passportFileName);
            }
                // Gérer le fichier d'attestation
                $attestationFileName = md5(uniqid()) . '.' . $attestation->guessExtension();
                $attestation->move($this->getParameter('attestation_directory'), $attestationFileName);
                $garant->setPathAdmissionFile($attestationFileName);
    
                $garant->setInformations($autres);
                $garant->setStatutDemande(0); // une demande commence par défaut avec le statut 0
    
                $garant->setUser($user);
    
                $garantFinancierRepository->save($garant, true);
                $userRepository->save($user, true);
                $entityManager->persist($garant);
                $entityManager->flush();

                $imageContent = file_get_contents('assets/images/consulting.png');
                $imageWu = file_get_contents('assets/images/wuLogoOffi.jpg');
                $imageRia = file_get_contents('assets/images/ria.png');
                $imageMg = file_get_contents('assets/images/MoneyGramLogo.png');

                // Rendre le HTML de votre modèle avec Twig
                $html = $this->renderView('facture/garant.html.twig', [
                    'numero_facture' => '123456',
                    'date_facture' => new \DateTime(),
                    'image_content' => base64_encode($imageContent),
                    'image_wu'=>base64_encode($imageWu),
                    'image_ria' =>base64_encode($imageRia),
                    'image_mg' =>base64_encode($imageMg),
                    'pays'=>$garant->getPays(),
                    "ville"=>$garant->getVilleEtude()
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
                ->attach($pdfContent, 'Devis_GarantFinancier_'. $user->getName() .' _'. (new DateTime())->format('Y-m-d_H-i-s') .'.pdf', 'application/pdf');
                 
                $emailForHoster = (new Email())->from('noreply@maykconsulting.fr')
                    ->to('maykconsulting@gmail.com')
                    ->subject('Demande Garant Financier - ' . $garant->getUser()->getName() . ' ' . $garant->getUser()->getLastName() )->attachFromPath('assets/images/logo.png')
                    ->text('Un nouvel utilisateur viens d\'effectuer une demande pour le pays suivant : ' .  $garant->getPays() );
        
                $apiKey = '64ff6202a62179784d1ffa3dd0546b97';
                $mailtrap = new MailtrapClient(new Config($apiKey));
                $email->getHeaders()
                    ->add(new CategoryHeader('Garant - Management'))
                ;

                $emailForHoster->getHeaders()
                    ->add(new CategoryHeader('Garant - Management'))
                ;
    
                $mailtrap->sending()->emails()->send($email); // a envoyer au client avec son devis
                $mailtrap->sending()->emails()->send($emailForHoster); /// A envoyer a maykconsulting
    

    
                $this->addFlash('success-add-garant', 'Votre demande a été soumise !.');
                return $this->redirectToRoute('app_garant', [], Response::HTTP_SEE_OTHER);
            } else {
                // Gérer le cas où les fichiers ne sont pas téléchargés
                $this->addFlash('error-creation-demande', 'Veuillez sélectionner les fichiers requis.');
            }
        }
    }
    
        return $this->render('/administration/garant/index.html.twig', [
            'controller_name' => 'AdmissionController',
            'nombreEntitesMessage' => $nombreEntitesMessage,
        ]);
    }
    

    #[Route('/all', name: 'app_garant_management', methods: ['GET'])]
    public function allGarant(GarantFinancierRepository $garantRepository , PublicMessageRepository $publicMessageRepository): Response
    {


        $nombreDossiersEnAttenteDePaiement = $garantRepository->countDossiersWithStatus(0);
        $nombreDossiersEncours = $garantRepository->countDossiersWithStatus(1);
        $nombreDossierstermines = $garantRepository->countDossiersWithStatus(2);
        $nombreDossierscloturer = $garantRepository->countDossiersWithStatus(3);


        $garantsEnAttente = $garantRepository->findByStatut(0);
        $garantsEnCours = $garantRepository->findByStatut(1);
        $garantsTerminees = $garantRepository->findByStatut(2);
        $garantsCloturer = $garantRepository->findByStatut(3);

        $nombreEntitesMessage = $this->recupererLenombreDeMessage($publicMessageRepository);

        return $this->render('administration/garant/management.html.twig', [
            'garant' => $garantRepository->findAll(),
            'nombreEntitesMessage' => $nombreEntitesMessage,
            'enAttenteDePaiement' => $nombreDossiersEnAttenteDePaiement,
            'garantsEnAttentes' => $garantsEnAttente ,
            'garantsCloturer' => $garantsCloturer,
            'garantEnCours' => $garantsEnCours,
            'garantTermine' => $garantsTerminees,
            'nombreEncours' => $nombreDossiersEncours,
            'nombreTerminee' => $nombreDossierstermines,
            'nombreCloturer' => $nombreDossierscloturer,
        ]);
    }


    #[Route('/delete/{id}', name: 'app_garant_delete', methods: ['POST'])]
    public function delete(Request $request, GarantFinancier $garant, GarantFinancierRepository $garantFinancierRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$garant->getId(), $request->request->get('_token'))) {
            $garantFinancierRepository->remove($garant, true);
            $this->addFlash('success', 'La demande de garant financier a été supprimée avec succès.');
        }
        return $this->redirectToRoute('app_garant');
    }


    #[Route('/envoyezMessage', name: 'app_garant_envoyez_mail', methods: ['POST'])]
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
                    ->add(new CategoryHeader('Garant - Management'))
                ;
    
                $mailtrap->sending()->emails()->send($email);


        }

        $this->addFlash('success-mail-send', 'Votre mail a été envoyé avec success');
        return $this->redirectToRoute('app_garant_management');
    }
}
