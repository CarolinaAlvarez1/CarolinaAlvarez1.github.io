<?php
// Inclui o autoload do Composer
require 'vendor/autoload.php';

use Fpdf\Fpdf; // Importa a classe FPDF

// Cria uma instância do FPDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, 'Bem-vindo ao PDF gerado com Composer!');
$pdf->Output('I', 'meu_arquivo.pdf'); // Exibe no navegador
?>
