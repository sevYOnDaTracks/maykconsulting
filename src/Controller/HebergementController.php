<?php

namespace App\Controller;

use App\Repository\PublicMessageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HebergementController extends AbstractController
{
    #[Route('/hebergement', name: 'app_hebergement')]
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
  
}
