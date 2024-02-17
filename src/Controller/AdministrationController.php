<?php

namespace App\Controller;

use App\Entity\PublicMessage;
use App\Repository\PublicMessageRepository;
use App\Repository\UserRepository;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use DateTime;

use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;

#[Route('/administration')]
class AdministrationController extends AbstractController
{
    #[Route('/', name: 'app_administration')]
    public function index(PublicMessageRepository $publicMessageRepository): Response
    {

        $nombreEntitesMessage = $this->recupererLenombreDeMessage($publicMessageRepository);
        return $this->render('administration/index.html.twig', [
            'controller_name' => 'AdministrationController',
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




    #[Route('/user_profil', name: 'app_user_profil', methods: ['GET', 'POST'])]
    public function userProfil(Request $request, EntityManagerInterface $entityManager, PublicMessageRepository $publicMessageRepository): Response
    {
        if ($request->isMethod('POST')) {
            $user = $this->getUser();


            $name = $request->request->get('name');
            $email = $request->request->get('email');
            $lastName = $request->request->get('lastName');
            $phone = $request->request->get('phone');
            $dateOfBirthString = $request->request->get('dateOfBirth');
            $schoolLevel = $request->request->get('schoolLevel');
            $avatar = $request->files->get('avatar');


            $user->setName($name);
            $user->setLastName($lastName);
            $user->setPhone($phone);
            $dateOfBirth = DateTime::createFromFormat('d-m-Y', $dateOfBirthString);
            if ($dateOfBirth instanceof DateTime) {
                $user->setDateOfBirth($dateOfBirth);
            }
            $user->setSchoolLevel($schoolLevel);


            if ($request->files->get('avatar')) {

                // Supprimer l'ancien avatar s'il existe
                $oldAvatarPath = $user->getAvatar();
                if ($oldAvatarPath && file_exists($oldAvatarPath)) {
                    unlink($oldAvatarPath);
                    $user->setAvatar(null);
                }

                $avatar = $request->files->get('avatar');

                // Traitement de l'avatar téléchargé
                $fileName = md5(uniqid()) . '.' . $avatar->guessExtension();
                $avatar->move($this->getParameter('avatars_directory'), $fileName);
                $user->setAvatar($fileName);
            }




            // Enregistrer les changements dans la base de données
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success-modification-user', 'Modification enregistrée avec success !.');
            return $this->redirectToRoute('app_user_profil');
        }

        $nombreEntitesMessage = $this->recupererLenombreDeMessage($publicMessageRepository);
        return $this->render('administration/user_profil.html.twig', [
            'controller_name' => 'AdministrationController',
            'nombreEntitesMessage' => $nombreEntitesMessage,
        ]);
    }


    #[Route('/user_list', name: 'user_list', methods: ['GET'])]
    public function find_all_user(UserRepository $userRepository, PublicMessageRepository $publicMessageRepository): Response
    {
        $nombreEntitesMessage = $this->recupererLenombreDeMessage($publicMessageRepository);

        return $this->render('administration/users_list.html.twig', [
            'users_list' => $userRepository->findAll(),
            'nombreEntitesMessage' => $nombreEntitesMessage
        ]);
    }

    #[Route('/delete_user/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, UserRepository $userRepository, Security $security): Response
    {

        $currentUser = $security->getUser();

        if ($currentUser && $currentUser->getId() === $user->getId()) {
            // L'utilisateur connecté est celui que vous essayez de supprimer.
            $this->addFlash('error-delete-user', 'Vous ne pouvez pas supprimer votre propre compte.');
            return $this->redirectToRoute('user_list'); // Rediriger vers une page appropriée.
        }


        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
        }

        $this->addFlash('success-delete-user', 'Utilisateurs supprimé avec success !.');
        return $this->redirectToRoute('user_list', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/delete_avatar', name: 'app_delete_avatar', methods: ['POST'])]
    public function deleteAvatar(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        $oldAvatarPath = $user->getAvatar();
        if ($oldAvatarPath && file_exists($oldAvatarPath)) {
            unlink($oldAvatarPath);
        }

        $user->setAvatar(null);
        $entityManager->flush();



        $this->addFlash('success-delete-avatar', 'L\'avatar a été supprimé avec succès.');

        return $this->redirectToRoute('app_user_profil');
    }

    #[Route('/publicMessage', name: 'public_message_list', methods: ['GET'])]
    public function find_all_messagePublic(PublicMessageRepository $publicMessageRepository): Response
    {
        $nombreEntitesMessage = $this->recupererLenombreDeMessage($publicMessageRepository);

        return $this->render('administration/messagePublic/index.html.twig', [
            'publicMessage_list' => $publicMessageRepository->findAll(),
            'nombreEntitesMessage' => $nombreEntitesMessage,

        ]);
    }


    #[Route('/deleteMessage/{id}', name: 'app_message_delete', methods: ['POST'])]
    public function deleteMessage(Request $request, PublicMessage $message, PublicMessageRepository $publicMessageRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $message->getId(), $request->request->get('_token'))) {
            $publicMessageRepository->remove($message, true);
        }

        $this->addFlash('success-delete-message', 'Message supprimé avec success !.');
        return $this->redirectToRoute('public_message_list', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/user/update/{id}', name: 'user_update' , methods: ['GET', 'POST'])]
    public function updateUser(Request $request, UserRepository $userRepository , User $user ) : Response{
        if ($request->isMethod('POST')) {

            $name = $request->request->get('name');
            $email = $request->request->get('email');
            $lastName = $request->request->get('lastName');
            $phone = $request->request->get('phone');
            $dateOfBirthString = $request->request->get('dateOfBirth');
            $schoolLevel = $request->request->get('schoolLevel');
            $avatar = $request->files->get('avatar');


            $user->setName($name);
            $user->setLastName($lastName);
            $user->setPhone($phone);
            $dateOfBirth = DateTime::createFromFormat('d-m-Y', $dateOfBirthString);
            if ($dateOfBirth instanceof DateTime) {
                $user->setDateOfBirth($dateOfBirth);
            }
            $user->setSchoolLevel($schoolLevel);


            if ($request->files->get('avatar')) {

                // Supprimer l'ancien avatar s'il existe
                $oldAvatarPath = $user->getAvatar();
                if ($oldAvatarPath && file_exists($oldAvatarPath)) {
                    unlink($oldAvatarPath);
                    $user->setAvatar(null);
                }

                $avatar = $request->files->get('avatar');

                // Traitement de l'avatar téléchargé
                $fileName = md5(uniqid()) . '.' . $avatar->guessExtension();
                $avatar->move($this->getParameter('avatars_directory'), $fileName);
                $user->setAvatar($fileName);
            }


            $userRepository->save($user ,true);

            $this->addFlash('success-modification-user', 'Modification enregistrée avec success !.');
            return $this->redirectToRoute('user_list');
        }
        return $this->redirectToRoute('user_list', [], Response::HTTP_SEE_OTHER);
    }

}
