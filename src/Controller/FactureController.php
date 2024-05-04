<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\DompdfService;
use Dompdf\Dompdf;
use Dompdf\Options;

class FactureController extends AbstractController
{
    #[Route('/facture/garant', name: 'app_facture_test')]
    public function generatePdf(DompdfService $dompdfService , UserRepository $userRepository): Response
    {
        // Récupérer le contenu CSS de votre fichier externe
        $cssContent = file_get_contents('assets/bootstrap/css/bootstrap1.min.css');
        $imageContent = file_get_contents('assets/images/consulting.png');
        $imageWu = file_get_contents('assets/images/wuLogoOffi.jpg');
        $imageRia = file_get_contents('assets/images/ria.png');
        $imageMg = file_get_contents('assets/images/MoneyGramLogo.png');
        $user= $this->getUser();
        $userToFound = $userRepository->findOneByEmail($user->getUserIdentifier());
        // Rendre le HTML de votre modèle avec Twig
        $html = $this->renderView('facture/garant.html.twig', [
            'numero_facture' => '123456',
            'date_facture' => new \DateTime(),
            'image_content' => base64_encode($imageContent),
            'image_wu'=>base64_encode($imageWu),
            'image_ria' =>base64_encode($imageRia),
            'image_mg' =>base64_encode($imageMg),
            'pays' => $userToFound->getGarantFinancier()->getPays(),
            'ville' => $userToFound->getGarantFinancier()->getVilleEtude()

            // Autres données de facture
        ]);

        

        // Intégrer le contenu CSS dans le HTML
        $htmlWithCSS = $cssContent . $html;

        // Créer une instance de Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true); // Activer le parser HTML5
        $dompdf = new Dompdf($options);

        // Charger le HTML avec CSS intégré
        $dompdf->loadHtml($htmlWithCSS);

        // Activer le rendu du CSS
        $dompdf->set_option('isCssFloatEnabled', true);
        $dompdf->set_option('isHtml5ParserEnabled', true);

        // Générer le PDF
        $dompdf->render();

        // Renvoyer le PDF en réponse
        return new Response(
            $dompdf->output(),
            Response::HTTP_OK,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="devis-garant-financier-'. $userToFound->getName() .'.pdf"'
            ]
        );
    }

    #[Route('/facture/hebergement', name: 'app_facture_hebergement')]
    public function generatePdfHebergement(DompdfService $dompdfService , UserRepository $userRepository): Response
    {
        // Récupérer le contenu CSS de votre fichier externe
        $cssContent = file_get_contents('assets/bootstrap/css/bootstrap1.min.css');
        $imageContent = file_get_contents('assets/images/consulting.png');
        $imageWu = file_get_contents('assets/images/wuLogoOffi.jpg');
        $imageRia = file_get_contents('assets/images/ria.png');
        $imageMg = file_get_contents('assets/images/MoneyGramLogo.png');
        $user= $this->getUser();
        $userToFound = $userRepository->findOneByEmail($user->getUserIdentifier());
        // Rendre le HTML de votre modèle avec Twig
        $html = $this->renderView('facture/hebergement.html.twig', [
            'numero_facture' => '123456',
            'date_facture' => new \DateTime(),
            'image_content' => base64_encode($imageContent),
            'image_wu'=>base64_encode($imageWu),
            'image_ria' =>base64_encode($imageRia),
            'image_mg' =>base64_encode($imageMg),
            'pays' => $userToFound->getHebergement()->getPays(),
            'ville' => $userToFound->getHebergement()->getVilleEtude()

            // Autres données de facture
        ]);



        // Intégrer le contenu CSS dans le HTML
        $htmlWithCSS = $cssContent . $html;

        // Créer une instance de Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true); // Activer le parser HTML5
        $dompdf = new Dompdf($options);

        // Charger le HTML avec CSS intégré
        $dompdf->loadHtml($htmlWithCSS);

        // Activer le rendu du CSS
        $dompdf->set_option('isCssFloatEnabled', true);
        $dompdf->set_option('isHtml5ParserEnabled', true);

        // Générer le PDF
        $dompdf->render();

        // Renvoyer le PDF en réponse
        return new Response(
            $dompdf->output(),
            Response::HTTP_OK,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="devis-hebergement-'. $userToFound->getName() .'.pdf"'
            ]
        );
    }
}
