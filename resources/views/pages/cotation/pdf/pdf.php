<?php
ob_start();
include("pdf/fpdf.php");
$PDF = new fpdf();
$PDF->AddPage();
//$PDF->Image("m.jpg", 0, 0);
$PDF->SetFont("Arial","B",16);
$PDF->Text(10,10,"Uniquement un texte");
$PDF->Text(10,20,"Momar dieng un texte");
$PDF->Cell(40,30,'hello');
$droite1 = array(0, 100, array(255,0,0), "droite 1");
$droite2 = array(50, 25, array(0,255,0), "droite 2");
$droite3 = array(12, 45, array(0,0,255), "");
$droites = array($droite1, $droite2, $droite3);
$PDF->Output();
ob_end_flush();
?>