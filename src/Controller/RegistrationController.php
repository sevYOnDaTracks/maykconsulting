<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use App\Security\EmailVerifier;
use Mailtrap\Config;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
use Mailtrap\EmailHeader\CategoryHeader;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;
use Mailtrap\MailtrapClient;
use DateTime;


class RegistrationController extends AbstractController
{
    private EmailVerifier $emailVerifier;

    public function __construct(
        EmailVerifier $emailVerifier,
        private VerifyEmailHelperInterface $verifyEmailHelper,
    ) {
        $this->emailVerifier = $emailVerifier;

    }

    #[Route('/register', name: 'app_register', methods: ['GET', 'POST'])]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {

        if ($request->isMethod('POST')) {
            $user = new User();

            $name = $request->request->get('name');
            $email_user = $request->request->get('email');
            $lastName = $request->request->get('lastName');
            $phone = $request->request->get('phone');
            $dateOfBirthString = $request->request->get('dateOfBirth');
            $schoolLevel = $request->request->get('schoolLevel');
            $plainPassword = $request->request->get('plainPassword');

            $user->setName($name);
            $user->setEmail($email_user);
            $user->setLastName($lastName);
            $user->setPhone($phone);
            $dateOfBirth = DateTime::createFromFormat('Y-m-d', $dateOfBirthString);
            $user->setDateOfBirth($dateOfBirth);
            $user->setSchoolLevel($schoolLevel);

            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $plainPassword
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();

            $signatureComponents = $this->verifyEmailHelper->generateSignature(
                'app_verify_email',
                $user->getId(),
                $user->getEmail(),
                ['id' => $user->getId()]
            );
            $signedUrl = $signatureComponents->getSignedUrl();

            

            // generate a signed url and email it to the user
            $email = (new Email())
                ->from(new Address('no-reply@maykconsulting.fr'))
                ->to(new Address($email_user))
                ->subject('Verification de votre adresse email ! ')
                ->html('<h1>Bonjour ! Veuillez confirmer votre adresse e-mail.</h1><p>Cliquez sur le lien ci-dessous pour confirmer votre adresse e-mail :</p><a href="'. $signedUrl .'">Confirmer mon adresse e-mail</a><p>Ce lien expirera dans 1 heure.</p><p>Cordialement,</p><p>Mayk Consulting Services</p>')
            ;

            $emailForHoster = (new Email())->from('noreply@maykconsulting.fr')
                ->to('maykconsulting@gmail.com')
                ->subject('Nouvel utilisateur : ' . $user->getEmail() )->attachFromPath('assets/images/logo.png')
                ->text('Un nouvel utilisateur ' . $user->getName(). ' ' . $user->getLastName() . 'viens de s\'inscire sur le site' );

            $apiKey = '64ff6202a62179784d1ffa3dd0546b97';
            $mailtrap = new MailtrapClient(new Config($apiKey));
            $email->getHeaders()
                ->add(new CategoryHeader('FAQ'))
            ;

            $mailtrap->sending()->emails()->send($email);
            $mailtrap->sending()->emails()->send($emailForHoster);
            // do anything else you need here, like send an email
            $this->addFlash('success-registration', 'Vous avez reçu un mail de verification sur l\'adresse indiqué.');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'controller_name' => 'RegistrationController',
        ]);
    }

    #[Route('/verify/email', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request, TranslatorInterface $translator, UserRepository $userRepository): Response
    {
        $id = $request->query->get('id');

        if (null === $id) {
            return $this->redirectToRoute('welcome');
        }

        $user = $userRepository->find($id);

        if (null === $user) {
            return $this->redirectToRoute('welcome');
        }

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $user);
            $this->addFlash('success', 'Your email address has been verified.');

            if ($this->getUser() === null) {
                return $this->redirectToRoute('app_login');
            } else {
                return $this->redirectToRoute('app_administration');
            }

        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));

            return $this->redirectToRoute('welcome');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates


    }
}
