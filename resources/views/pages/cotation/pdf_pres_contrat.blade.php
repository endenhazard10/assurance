<?php
session_start();
ob_start();
require_once("pdf/fpdf.php");
$PDF = new fpdf();
$PDF->AddPage();

$PDF->Output();

ob_end_flush();
?>