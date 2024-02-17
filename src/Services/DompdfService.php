<?php

namespace App\Services;

use Dompdf\Dompdf;

class DompdfService
{
    private $dompdf;

    public function __construct(Dompdf $dompdf)
    {
        $this->dompdf = $dompdf;
    }

    public function generatePdf($html, $filename = 'document')
    {
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper('A4', 'portrait');
        $this->dompdf->render();

        return $this->dompdf->output();
    }
}