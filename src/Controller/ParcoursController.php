<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PublicMessageRepository;

#[Route('/administration')]
class ParcoursController extends AbstractController
{
    #[Route('/parcours', name: 'app_parcours')]
    public function index(PublicMessageRepository $publicMessageRepository): Response
    {
        $nombreEntitesMessage = $this->recupererLenombreDeMessage($publicMessageRepository);

        return $this->render('administration/parcours/index.html.twig', [
            'controller_name' => 'ParcoursController',
            'nombreEntitesMessage' => $nombreEntitesMessage
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
