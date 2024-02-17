<?php
// src/Controller/ExportController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Entity\GarantFinancier;
use App\Repository\GarantFinancierRepository;


class ExportController extends AbstractController
{
    /**
     * @Route("/export", name="export_data")
     */
    public function exportData(GarantFinancierRepository $garantFinancierRepository): Response
    {
        // Récupérer les données de la base de données (exemple)
        $data = $garantFinancierRepository->findAll();

        // Créer un nouveau objet Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();


        $sheet->setCellValue('A1', " Identifiant ");
        $sheet->setCellValue('B1', " Email ");
        $sheet->setCellValue('C1', " Nom ");
        $sheet->setCellValue('D1', " Date de la demande ");
        $sheet->setCellValue('E1', " Etat de la demande ");



        // Ajouter les données dans le fichier Excel
        foreach ($data as $key => $row) {
            $sheet->setCellValue('A' . ($key + 2), $row->getId());
            $sheet->setCellValue('B' . ($key + 2), $row->getUser()->getEmail());
            $sheet->setCellValue('C' . ($key + 2), $row->getUser()->getName());

            $etat_demande = "";


            switch ($row->getStatutDemande()) {
                case 0:
                    $etat_demande = "En attente de paiement";
                    break;
                case 1:
                    $etat_demande = "En cours de traitement";
                    break;
                case 2:
                    $etat_demande = "Traitement terminée";
                    break;
                case 3:
                    $etat_demande = "Demande archivée";
                    break;
                default:
                    $etat_demande = "Inconnu";
            }


            $sheet->setCellValue('D' . ($key + 2), $row->getDateDemande());
            $sheet->setCellValue('E' . ($key + 2), $etat_demande);
            // Ajoutez les autres colonnes ici..
        }

        // Créer un objet Writer et sauvegarder le fichier Excel
        $writer = new Xlsx($spreadsheet);
        $fileName = 'export_data_' . date('Ymd') . '.xlsx';
        $filePath = $this->getParameter('kernel.project_dir') . '/public/export/' . $fileName;
        $writer->save($filePath);

        // Retourner le fichier Excel comme une réponse
        return $this->file($filePath);
    }
}
