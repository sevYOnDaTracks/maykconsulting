<?php

namespace App\Security;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;
use Symfony\Component\Mime\Email;

use Mailtrap\Config;
use Mailtrap\Helper\ResponseHelper;
use Mailtrap\MailtrapClient;
use Symfony\Component\Mime\Address;
use Mailtrap\EmailHeader\CategoryHeader;

class EmailVerifier
{
    public function __construct(
        private VerifyEmailHelperInterface $verifyEmailHelper,
        private MailerInterface $mailer,
        private EntityManagerInterface $entityManager
    ) {
    }

    public function sendEmailConfirmation(string $verifyEmailRouteName, UserInterface $user, Email $email): void
    {
        $apiKey = '64ff6202a62179784d1ffa3dd0546b97';
        $mailtrap = new MailtrapClient(new Config($apiKey));

        $signatureComponents = $this->verifyEmailHelper->generateSignature(
            $verifyEmailRouteName,
            $user->getId(),
            $user->getEmail(),
            ['id' => $user->getId()]
        );

        $context = $email->getContext();
        $context['signedUrl'] = $signatureComponents->getSignedUrl();
        $context['expiresAtMessageKey'] = $signatureComponents->getExpirationMessageKey();
        $context['expiresAtMessageData'] = $signatureComponents->getExpirationMessageData();

        $email->htmlTemplate('registration/confirmation_email.html.twig');
        $email->context($context);
        $email->getHeaders()
            ->add(new CategoryHeader('Registration-code'))
        ;

        $response = $mailtrap->sending()->emails()->send($email);
    }

    /**
     * @throws VerifyEmailExceptionInterface
     */
    public function handleEmailConfirmation(Request $request, UserInterface $user): void
    {
        $apiKey = '64ff6202a62179784d1ffa3dd0546b97';
        $mailtrap = new MailtrapClient(new Config($apiKey));

        $this->verifyEmailHelper->validateEmailConfirmation($request->getUri(), $user->getId(), $user->getEmail());

        $user->setIsVerified(true);

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        $email = (new Email())
            ->from('no-reply@maykconsulting.fr')
            ->to($user->getUserIdentifier()) // Utilisez l'e-mail saisi par l'utilisateur
            ->subject('Activation de votre compte sur Mayk Consulting')
            ->html('<p>Votre compte a été activé avec succès ! Bienvenue sur Mayk Consulting .</p>');

        $email->getHeaders()
            ->add(new CategoryHeader('Registration-success'))
        ;

        $response = $mailtrap->sending()->emails()->send($email);
    }
}
