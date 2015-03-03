
<?php
require("fpdf.php"); // path to fpdf.php
//require('ean13.php');

$pdf = new FPDF('P', 'mm', 'A4');
//$pdf=new PDF_EAN13();
$pdf->addPage();



$pdf->AddFont('DevLys-010');
$pdf->setFont("DevLys-010");
$pdf->cell(10,10,"esjkuke jtr gS",0,1,'C');
$pdf->output();

?>