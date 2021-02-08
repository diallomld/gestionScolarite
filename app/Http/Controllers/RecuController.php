<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;

class RecuController extends Controller
{
    private $fpdf;

    public function __construct()
    {
    }

    public function createPDF()
    {
        $this->fpdf = new Fpdf;
        $this->fpdf->AddPage("L", ['100', '100']);
        $this->fpdf->SetFont('Arial','B',16);
        $this->fpdf->Text(10, 10, "Hello FPDF");

        $this->fpdf->Output();
        exit;
    }
}
