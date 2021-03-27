<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;

class PdfController extends Controller
{
    //
    public function index()
    {
        $fpdf = new Fpdf;
        $fpdf->AddPage();

        $fpdf->SetMargins(5.0, 2.0);
        // setting jenis font yang akan digunakan
        $fpdf->SetFont('Arial', 'B', 12);
        $fpdf->Cell(10, 4, '', 0, 1);
        $fpdf->Cell(160, 6, 'PEMERINTAH KABUPATEN BEKASI', 0, 1, 'C');
        $fpdf->Cell(160, 6, 'KECAMATAN BABELAN - KELURAHAN BAHAGIA', 0, 1, 'C');
        $fpdf->SetFont('Arial', 'B', 14);
        $fpdf->Output();
        exit();
    }
}
