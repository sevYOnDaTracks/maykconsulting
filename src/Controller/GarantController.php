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


#[Route('/administration')]
class GarantController extends AbstractController
{
    #[Route('/garant', name: 'app_garant' , methods: ['GET', 'POST'])]
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


    #[Route('/garant/update/{id}', name: 'app_garant_update' , methods: ['GET', 'POST'])]
    public function updateGarantDossier(Request $request, GarantFinancierRepository $garantFinancierRepository , GarantFinancier $garantFinancier , UserRepository $userRepository , MailerInterface $mailer) : Response{
        if ($request->isMethod('POST')) {
            
            $pays = $request->request->get('pays');
            $ville = $request->request->get('ville');
            $statut = $request->request->get('statutDemande');

            $oldStatutDemande = $garantFinancier->getStatutDemande();

            $garantFinancier->setPays($pays);
            $garantFinancier->setVilleEtude($ville);


            if($oldStatutDemande !== $statut) {
                $garantFinancier->setLastUpdate(new DateTime());

            $email = (new Email())
            ->from('noreply@mayk-consulting.com')
            ->to($garantFinancier->getUser()->getEmail()) // Utilisez l'e-mail saisi par l'utilisateur
            ->subject('Urgent - Mise à jour de votre dossier')
            ->html('<p>L\'état d\'avancement de votre dossier a été mis à jour. Veuillez vous connecter sur le site pour plus d\'informations .</p><br> <p> Mayk consulting Services</p>');
    
            $mailer->send($email);

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


    #[Route('/new', name: 'app_garant_new', methods: ['GET', 'POST'])]
    public function new(Request $request, GarantFinancierRepository $garantFinancierRepository, EntityManagerInterface $entityManager , MailerInterface $mailer , PublicMessageRepository $publicMessageRepository): Response
    {
        $nombreEntitesMessage = $this->recupererLenombreDeMessage($publicMessageRepository);

        $garant = new GarantFinancier();
        if ($request->isMethod('POST')) {
    
            $pays = $request->request->get('pays');
            $dateHeureActuelles = new \DateTime();
            $ville = $request->request->get('ville');
            $passport = $request->files->get('pathPassport');
            $attestation = $request->files->get('pathAttestationAdmission');
            $autres = $request->request->get('othersInformations');
    
            // Vérifier si les fichiers sont téléchargés
            if ($passport && $attestation) {
                // Procéder au traitement du formulaire
                $garant->setPays($pays);
                $garant->setDateDemande($dateHeureActuelles);
                $garant->setVilleEtude($ville);
    
                // Gérer le fichier du passeport
                $passportFileName = md5(uniqid()) . '.' . $passport->guessExtension();
                $passport->move($this->getParameter('passport_directory'), $passportFileName);
                $garant->setPathPassport($passportFileName);
    
                // Gérer le fichier d'attestation
                $attestationFileName = md5(uniqid()) . '.' . $attestation->guessExtension();
                $attestation->move($this->getParameter('attestation_directory'), $attestationFileName);
                $garant->setPathAdmissionFile($attestationFileName);
    
                $garant->setInformations($autres);
                $garant->setStatutDemande(0); // une demande commence par défaut avec le statut 0
    
                $user = $this->getUser();
                $garant->setUser($user);
    
                $garantFinancierRepository->save($garant, true);
    
                $email = (new Email())
                ->from('noreply@mayk-consulting.com')
                ->to($user->getEmail()) // Utilisez l'e-mail saisi par l'utilisateur
                ->subject('Demande Soumise - Maykconsulting')
                ->html('<p>Votre demande a été reçue avec succès ! Nous vous informons que le processus de traitement démarrera après réception des fonds.</p>
                <br>
                Mayk - Consulting Services');
        
                $mailer->send($email);
    
                $entityManager->persist($garant);
                $entityManager->flush();
    
                $this->addFlash('success-add-garant', 'Votre demande a été soumise !.');
                return $this->redirectToRoute('app_garant', [], Response::HTTP_SEE_OTHER);
            } else {
                // Gérer le cas où les fichiers ne sont pas téléchargés
                $this->addFlash('error-creation-demande', 'Veuillez sélectionner les fichiers requis.');
            }
        }
    
        return $this->render('/administration/garant/index.html.twig', [
            'controller_name' => 'AdmissionController',
            'nombreEntitesMessage' => $nombreEntitesMessage,
        ]);
    }
    

    #[Route('/garant/all', name: 'app_garant_management', methods: ['GET'])]
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


    #[Route('/garant/delete/{id}', name: 'app_garant_delete', methods: ['POST'])]
    public function delete(Request $request, GarantFinancier $garant, GarantFinancierRepository $garantFinancierRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$garant->getId(), $request->request->get('_token'))) {
            $garantFinancierRepository->remove($garant, true);
            
            $this->addFlash('success', 'La demande de garant financier a été supprimée avec succès.');
        }
    
        return $this->redirectToRoute('app_garant');
    }


    #[Route('/garant/envoyezMessage', name: 'app_garant_envoyez_mail', methods: ['POST'])]
    public function envoyezMail(Request $request , MailerInterface $mailer ): Response
    {

        $emailClient = $request->request->get('email');
        $objetClient = $request->request->get('objet');
        $messageclient = $request->request->get('message');

        if ($request->isMethod('POST')) {

        $email = (new Email())
                ->from('noreply@mayk-consulting.com')
                ->to($emailClient) // Utilisez l'e-mail saisi par l'utilisateur
                ->subject($objetClient)
                ->html('<p>' .  $messageclient . '</p>
                <br>
                Mayk - Consulting Services');
        
                $mailer->send($email);


        }

        $this->addFlash('success-mail-send', 'Votre mail a été envoyé avec success');
        return $this->redirectToRoute('app_garant_management');
    }
    




}
