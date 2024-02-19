<?php

namespace App\Controller;

use App\Entity\PublicMessage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Mailtrap\Config;
use Mailtrap\Helper\ResponseHelper;
use Mailtrap\MailtrapClient;
use Symfony\Component\Mime\Address;
use Mailtrap\EmailHeader\CategoryHeader;


class WelcomeController extends AbstractController
{

    #[Route('/', name: 'welcome', methods: ['GET', 'POST'])]
    public function index(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer, UrlGeneratorInterface $urlGenerator): Response
    {
        if ($request->isMethod('POST')) {
            // Récupération des données du formulaire
            $name = $request->request->get('name');
            $email_client = $request->request->get('email');
            $messageContent = $request->request->get('message');

            // Création d'une nouvelle instance de l'entité PublicMessage
            $message = new PublicMessage();
            $message->setSenderName($name);
            $message->setSenderEmail($email_client);
            $message->setSenderMessage($messageContent);
            $message->setDateTimeReception(new \DateTime());

            // Enregistrement de l'entité dans la base de données
            $entityManager->persist($message);
            $entityManager->flush();

            $email = (new Email())
                ->from(new Address('no-reply@maykconsulting.fr', 'Mayk Consulting Services'))
                ->to(new Address($email_client))
                ->subject('Confirmation de réception de votre message')
                ->html('<p>Votre message a été reçu avec succès ! Nous vous répondrons dans les plus brefs délais.</p>');

            $apiKey = '64ff6202a62179784d1ffa3dd0546b97';
            $mailtrap = new MailtrapClient(new Config($apiKey));
            $email->getHeaders()
                ->add(new CategoryHeader('FAQ'))
            ;

            $mailtrap->sending()->emails()->send($email);

            // Redirection vers une autre page après envoi du message
            $this->addFlash('success', 'Votre message a été envoyé avec succès.');
            $url = '/#contact_us';

            // Créer une instance de RedirectResponse avec l'URL générée
            $response = new RedirectResponse($url);
            return $response;
        }
        return $this->render('welcome/index.html.twig', [
            'controller_name' => 'WelcomeController',
        ]);
    }

    #[Route('/404', name: 'notFound')]
    public function notFound(): Response
    {


        return $this->render('welcome/not_found.html.twig', [
            'controller_name' => 'WelcomeController',
        ]);
    }

    public function someMethod(): void
    {
        // returns User object or null if not authenticated


        // ...
    }
}
