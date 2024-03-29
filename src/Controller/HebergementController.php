<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HebergementController extends AbstractController
{
    #[Route('/hebergement', name: 'app_hebergement')]
    public function index(): Response
    {
        return $this->render('administration/hebergement/index.html.twig', [
            'controller_name' => 'HebergementController',
        ]);
    }

  
}
