<?php
session_start();
$test=0;
$_SESSION['nomLogo']="";
$longueurkey=4;
						for($i=1;$i<$longueurkey;$i++){
							$_SESSION['nomLogo'].=mt_rand(0,9);
						}
if(isset($_POST['creer_pdf'])){
if(isset($_FILES['logo']) and !empty($_FILES['logo']['name'])){
$taillemax=2097152;
		$extensionsValides=array('jpg','jpge','gif','png');
		if($_FILES['logo']['size'] <= $taillemax){
			$extensionUpload=strtolower(substr(strrchr($_FILES['logo']['name'],'.'), 1));
			if(in_array($extensionUpload, $extensionsValides)){
				$chemin=$_SESSION['nomLogo'].".".$extensionUpload;
				$resultat=move_uploaded_file($_FILES['logo']['tmp_name'], $chemin);	
				
				
				
}	
}}$monnaie=$_POST['monnaie'];
}

ob_start();
include("pdf/fpdf.php");
$PDF = new fpdf();
$PDF->AddPage();
if(isset($_FILES['logo']) and !empty($_FILES['logo']['name'])){
$PDF->Image($_SESSION['nomLogo'].".".$extensionUpload, 5, 10,35,30);}
$PDF->SetFont("Arial","",11);
$PDF->Line(115,53, 115,80);	
$PDF->Line(115,53, 208,53);
$PDF->Line(115,80, 208,80);
$PDF->Line(208,53, 208,80);
if(isset($_POST['nom_entreprise']) and !empty($_POST['nom_entreprise'])){
$PDF->Text(5,60,"Nom de l'entreprise");	
$PDF->Text(45,60,$_POST['nom_entreprise']);	
}
if(isset($_POST['adresse']) and !empty($_POST['adresse'])){
$PDF->Text(5,68,"adresse");	
$PDF->Text(45,68,$_POST['adresse']);	
}
if(isset($_POST['code_postal']) and !empty($_POST['code_postal'])){
$PDF->Text(5,76,"code postal");	
$PDF->Text(45,76,$_POST['code_postal']);	
}
if(isset($_POST['ville']) and !empty($_POST['ville'])){
$PDF->Text(5,84,"ville");	
$PDF->Text(45,84,$_POST['ville']);	
}
if(isset($_POST['telephone']) and !empty($_POST['telephone'])){
$PDF->Text(5,92,"telephone");	
$PDF->Text(45,92,$_POST['telephone']);	
}
if(isset($_POST['email']) and !empty($_POST['email'])){
$PDF->Text(5,100,"email");	
$PDF->Text(45,100,$_POST['email']);	
}
if(isset($_POST['numero_devis']) and !empty($_POST['numero_devis'])){
$PDF->Text(120,15,"devis numero");	
$PDF->Text(160,15,$_POST['numero_devis']);
$PDF->Line(110,9, 110,28);	
}
if(isset($_POST['date']) and !empty($_POST['date'])){
$PDF->Text(120,23,"fait le :");	
$PDF->Text(160,23,$_POST['date']);	
}
if(isset($_POST['nom']) and !empty($_POST['nom'])){
$PDF->Text(120,60,"Nom et prenom client :");	
$PDF->Text(160,60,$_POST['nom']);	
}
if(isset($_POST['adresse_client']) and !empty($_POST['adresse_client'])){
$PDF->Text(120,68,"adresse client :");	
$PDF->Text(160,68,$_POST['adresse_client']);	
}
if(isset($_POST['telephone_client']) and !empty($_POST['telephone_client'])){
$PDF->Text(120,76,"telephone client :");	
$PDF->Text(160,76,$_POST['telephone_client']);	
}

if(isset($_SESSION['fondementPdf'])){
	

$PDF->Line(5,120, 205,120); // horizontal
$PDF->Line(5,128, 205,128);  // horizontal
$PDF->Line(5,120, 5,128); // verticale
$PDF->Line(25,120, 25,128); // verticale
$PDF->Text(7,125,"reference");
$PDF->Line(65,120, 65,128); // verticale
$PDF->Text(35,125,"designation");
$PDF->Line(90,120, 90,128); // verticale
$PDF->Text(70,125,"quantite");
$PDF->Line(110,120, 110,128); // verticale
$PDF->Text(95,125,"unite");
$PDF->Line(140,120, 140,128); // verticale
$PDF->Text(112,125,"prix unitaire HT");
$PDF->Line(154,120, 154,128); // verticale
$PDF->Text(141,125,"TVA %");
$PDF->Line(175,120, 175,128); // verticale
$PDF->Text(160,125,"TVA");
$PDF->Text(177,125,"prix total TTC");
$PDF->Line(205,120, 205,128); // verticale

$a=128;
$x1=5;$x2=25;$x3=65;$x4=90;$x5=110;$x6=140;$x7=154;$x8=175;$x9=205;
$y1=7;$y2=27;$y3=67;$y4=92;$y5=112;$y6=142;$y7=156;$y8=177;$y9=207;
for($i=1;$i<=$_SESSION['choixfondement'];$i++){
	                    $a=$a+8;
						$PDF->Line(5,$a, 205,$a);	
						}
						
						$PDF->Line($x1,120,$x1 ,136); 
						$PDF->Line($x2,120,$x2 ,136); 
						$PDF->Line($x3,120,$x3 ,136);
						$PDF->Line($x4,120,$x4 ,136);
						$PDF->Line($x5,120,$x5 ,136);
						$PDF->Line($x6,120,$x6 ,136);
						$PDF->Line($x7,120,$x7 ,136);
						$PDF->Line($x8,120,$x8 ,136);
						$PDF->Line($x9,120,$x9 ,136);
			if($_SESSION['choixfondement']==1){
            $PDF->Text(7,133,$_SESSION['fondementReference1']);	
            $PDF->Text(27,133,$_SESSION['fondementDesignation1']);
            $PDF->Text(70,133,$_SESSION['fondementQuantite1']);	
			$PDF->Text(97,133,$_SESSION['fondementUnite1']);
			$PDF->Text(111,133,$_SESSION['fondementPrixUnitaire1']);
			$PDF->Text(141,133,$_SESSION['fondementTvaPourcent1']);
			
			$prixTotalHtF1=$_SESSION['fondementPrixUnitaire1']*$_SESSION['fondementQuantite1'];
			$prixTotalHtF=$prixTotalHtF1;
			
			
			$tvaPourcentF1=$_SESSION['fondementTvaPourcent1']/100;
			$tvaF1=$tvaPourcentF1*$prixTotalHtF1;
			$tvaF=$tvaF1;
			
			
			$prixTotalTtcF1=$prixTotalHtF1+$tvaF1;
			$prixTotalTtcF=$prixTotalTtcF1;
			
			$PDF->Text(156,133,$tvaF1);
			$PDF->Text(176,133,$prixTotalTtcF1);
			}
			
//---------------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------------			
			
			if($_SESSION['choixfondement']==2){
				
			$PDF->Text(7,133,$_SESSION['fondementReference1']);	
            $PDF->Text(27,133,$_SESSION['fondementDesignation1']);
            $PDF->Text(70,133,$_SESSION['fondementQuantite1']);	
			$PDF->Text(97,133,$_SESSION['fondementUnite1']);
			$PDF->Text(111,133,$_SESSION['fondementPrixUnitaire1']);
			$PDF->Text(141,133,$_SESSION['fondementTvaPourcent1']);
			
			
			$PDF->Text(7,141,$_SESSION['fondementReference2']);	
            $PDF->Text(27,141,$_SESSION['fondementDesignation2']);
            $PDF->Text(70,141,$_SESSION['fondementQuantite2']);	
			$PDF->Text(97,141,$_SESSION['fondementUnite2']);
			$PDF->Text(111,141,$_SESSION['fondementPrixUnitaire2']);
			$PDF->Text(141,141,$_SESSION['fondementTvaPourcent2']);
			
			$prixTotalHtF1=$_SESSION['fondementPrixUnitaire1']*$_SESSION['fondementQuantite1'];
			$prixTotalHtF2=$_SESSION['fondementPrixUnitaire2']*$_SESSION['fondementQuantite2'];
			$prixTotalHtF=$prixTotalHtF1+$prixTotalHtF2;
			
			
			$tvaPourcentF1=$_SESSION['fondementTvaPourcent1']/100;
			$tvaPourcentF2=$_SESSION['fondementTvaPourcent2']/100;
			$tvaF1=$tvaPourcentF1*$prixTotalHtF1;
			$tvaF2=$tvaPourcentF2*$prixTotalHtF2;
			$tvaF=$tvaF1+$tvaF2;
			
			
			$prixTotalTtcF1=$prixTotalHtF1+$tvaF1;
			$prixTotalTtcF2=$prixTotalHtF2+$tvaF2;
			$prixTotalTtcF=$prixTotalTtcF1+$prixTotalTtcF2;
			
			$PDF->Text(156,133,$tvaF1);
			$PDF->Text(176,133,$prixTotalTtcF1);
			
			$PDF->Text(156,141,$tvaF2);
			$PDF->Text(176,141,$prixTotalTtcF2);
			

			            $PDF->Line($x1,120,$x1 ,144); 
						$PDF->Line($x2,120,$x2 ,144); 
						$PDF->Line($x3,120,$x3 ,144);
						$PDF->Line($x4,120,$x4 ,144);
						$PDF->Line($x5,120,$x5 ,144);
						$PDF->Line($x6,120,$x6 ,144);
						$PDF->Line($x7,120,$x7 ,144);
						$PDF->Line($x8,120,$x8 ,144);
						$PDF->Line($x9,120,$x9 ,144);
			}
//---------------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------------

if($_SESSION['choixfondement']==3){
				
			$PDF->Text(7,133,$_SESSION['fondementReference1']);	
            $PDF->Text(27,133,$_SESSION['fondementDesignation1']);
            $PDF->Text(70,133,$_SESSION['fondementQuantite1']);	
			//$PDF->Text(97,133,$_SESSION['fondementUnite1']);
			$PDF->Text(111,133,$_SESSION['fondementPrixUnitaire1']);
			$PDF->Text(141,133,$_SESSION['fondementTvaPourcent1']);
			
			
			$PDF->Text(7,141,$_SESSION['fondementReference2']);	
            $PDF->Text(27,141,$_SESSION['fondementDesignation2']);
            $PDF->Text(70,141,$_SESSION['fondementQuantite2']);	
			//$PDF->Text(97,141,$_SESSION['fondementUnite2']);
			$PDF->Text(111,141,$_SESSION['fondementPrixUnitaire2']);
			$PDF->Text(141,141,$_SESSION['fondementTvaPourcent2']);
			
			$PDF->Text(7,149,$_SESSION['fondementReference3']);	
            $PDF->Text(27,149,$_SESSION['fondementDesignation3']);
            $PDF->Text(70,149,$_SESSION['fondementQuantite3']);	
			//$PDF->Text(97,149,$_SESSION['fondementUnite3']);
			$PDF->Text(111,149,$_SESSION['fondementPrixUnitaire3']);
			$PDF->Text(141,149,$_SESSION['fondementTvaPourcent3']);
			
			$prixTotalHtF1=$_SESSION['fondementPrixUnitaire1']*$_SESSION['fondementQuantite1'];
			$prixTotalHtF2=$_SESSION['fondementPrixUnitaire2']*$_SESSION['fondementQuantite2'];
			$prixTotalHtF3=$_SESSION['fondementPrixUnitaire3']*$_SESSION['fondementQuantite3'];
			$prixTotalHtF=$prixTotalHtF1+$prixTotalHtF2+$prixTotalHtF3;
			
			
			$tvaPourcentF1=$_SESSION['fondementTvaPourcent1']/100;
			$tvaPourcentF2=$_SESSION['fondementTvaPourcent2']/100;
			$tvaPourcentF3=$_SESSION['fondementTvaPourcent3']/100;
			$tvaF1=$tvaPourcentF1*$prixTotalHtF1;
			$tvaF2=$tvaPourcentF2*$prixTotalHtF2;
			$tvaF3=$tvaPourcentF3*$prixTotalHtF3;
			$tvaF=$tvaF1+$tvaF2+$tvaF3;
			
			
			$prixTotalTtcF1=$prixTotalHtF1+$tvaF1;
			$prixTotalTtcF2=$prixTotalHtF2+$tvaF2;
			$prixTotalTtcF3=$prixTotalHtF3+$tvaF3;
			$prixTotalTtcF=$prixTotalTtcF1+$prixTotalTtcF2+$prixTotalTtcF3;
			
			$PDF->Text(156,133,$tvaF1);
			$PDF->Text(176,133,$prixTotalTtcF1);
			
			$PDF->Text(156,141,$tvaF2);
			$PDF->Text(176,141,$prixTotalTtcF2);
			
			$PDF->Text(156,149,$tvaF3);
			$PDF->Text(176,149,$prixTotalTtcF3);
			

			            $PDF->Line($x1,120,$x1 ,152); 
						$PDF->Line($x2,120,$x2 ,152); 
						$PDF->Line($x3,120,$x3 ,152);
						$PDF->Line($x4,120,$x4 ,152);
						$PDF->Line($x5,120,$x5 ,152);
						$PDF->Line($x6,120,$x6 ,152);
						$PDF->Line($x7,120,$x7 ,152);
						$PDF->Line($x8,120,$x8 ,152);
						$PDF->Line($x9,120,$x9 ,152);
			}
			
//---------------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------------

if($_SESSION['choixfondement']==4){
				
			$PDF->Text(7,133,$_SESSION['fondementReference1']);	
            $PDF->Text(27,133,$_SESSION['fondementDesignation1']);
            $PDF->Text(70,133,$_SESSION['fondementQuantite1']);	
			$PDF->Text(97,133,$_SESSION['fondementUnite1']);
			$PDF->Text(111,133,$_SESSION['fondementPrixUnitaire1']);
			$PDF->Text(141,133,$_SESSION['fondementTvaPourcent1']);
			
			
			$PDF->Text(7,141,$_SESSION['fondementReference2']);	
            $PDF->Text(27,141,$_SESSION['fondementDesignation2']);
            $PDF->Text(70,141,$_SESSION['fondementQuantite2']);	
			$PDF->Text(97,141,$_SESSION['fondementUnite2']);
			$PDF->Text(111,141,$_SESSION['fondementPrixUnitaire2']);
			$PDF->Text(141,141,$_SESSION['fondementTvaPourcent2']);
			
			$PDF->Text(7,149,$_SESSION['fondementReference3']);	
            $PDF->Text(27,149,$_SESSION['fondementDesignation3']);
            $PDF->Text(70,149,$_SESSION['fondementQuantite3']);	
			$PDF->Text(97,149,$_SESSION['fondementUnite3']);
			$PDF->Text(111,149,$_SESSION['fondementPrixUnitaire3']);
			$PDF->Text(141,149,$_SESSION['fondementTvaPourcent3']);
			
			$PDF->Text(7,157,$_SESSION['fondementReference4']);	
            $PDF->Text(27,157,$_SESSION['fondementDesignation4']);
            $PDF->Text(70,157,$_SESSION['fondementQuantite4']);	
			$PDF->Text(97,157,$_SESSION['fondementUnite4']);
			$PDF->Text(111,157,$_SESSION['fondementPrixUnitaire4']);
			$PDF->Text(141,157,$_SESSION['fondementTvaPourcent4']);
			
			$prixTotalHtF1=$_SESSION['fondementPrixUnitaire1']*$_SESSION['fondementQuantite1'];
			$prixTotalHtF2=$_SESSION['fondementPrixUnitaire2']*$_SESSION['fondementQuantite2'];
			$prixTotalHtF3=$_SESSION['fondementPrixUnitaire3']*$_SESSION['fondementQuantite3'];
			$prixTotalHtF4=$_SESSION['fondementPrixUnitaire4']*$_SESSION['fondementQuantite4'];
			$prixTotalHtF=$prixTotalHtF1+$prixTotalHtF2+$prixTotalHtF3+$prixTotalHtF4;
			
			
			$tvaPourcentF1=$_SESSION['fondementTvaPourcent1']/100;
			$tvaPourcentF2=$_SESSION['fondementTvaPourcent2']/100;
			$tvaPourcentF3=$_SESSION['fondementTvaPourcent3']/100;
			$tvaPourcentF4=$_SESSION['fondementTvaPourcent4']/100;
			$tvaF1=$tvaPourcentF1*$prixTotalHtF1;
			$tvaF2=$tvaPourcentF2*$prixTotalHtF2;
			$tvaF3=$tvaPourcentF3*$prixTotalHtF3;
			$tvaF4=$tvaPourcentF4*$prixTotalHtF4;
			$tvaF=$tvaF1+$tvaF2+$tvaF3+$tvaF4;
			
			
			$prixTotalTtcF1=$prixTotalHtF1+$tvaF1;
			$prixTotalTtcF2=$prixTotalHtF2+$tvaF2;
			$prixTotalTtcF3=$prixTotalHtF3+$tvaF3;
			$prixTotalTtcF4=$prixTotalHtF4+$tvaF4;
			$prixTotalTtcF=$prixTotalTtcF1+$prixTotalTtcF2+$prixTotalTtcF3+$prixTotalTtcF4;
			
			$PDF->Text(156,133,$tvaF1);
			$PDF->Text(176,133,$prixTotalTtcF1);
			
			$PDF->Text(156,141,$tvaF2);
			$PDF->Text(176,141,$prixTotalTtcF2);
			
			$PDF->Text(156,149,$tvaF3);
			$PDF->Text(176,149,$prixTotalTtcF3);
			
			$PDF->Text(156,157,$tvaF4);
			$PDF->Text(176,157,$prixTotalTtcF4);
			

			            $PDF->Line($x1,120,$x1 ,160); 
						$PDF->Line($x2,120,$x2 ,160); 
						$PDF->Line($x3,120,$x3 ,160);
						$PDF->Line($x4,120,$x4 ,160);
						$PDF->Line($x5,120,$x5 ,160);
						$PDF->Line($x6,120,$x6 ,160);
						$PDF->Line($x7,120,$x7 ,160);
						$PDF->Line($x8,120,$x8 ,160);
						$PDF->Line($x9,120,$x9 ,160);
			}

//---------------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------------

if($_SESSION['choixfondement']==5){
				
			$PDF->Text(7,133,$_SESSION['fondementReference1']);	
            $PDF->Text(27,133,$_SESSION['fondementDesignation1']);
            $PDF->Text(70,133,$_SESSION['fondementQuantite1']);	
			$PDF->Text(97,133,$_SESSION['fondementUnite1']);
			$PDF->Text(111,133,$_SESSION['fondementPrixUnitaire1']);
			$PDF->Text(141,133,$_SESSION['fondementTvaPourcent1']);
			
			
			$PDF->Text(7,141,$_SESSION['fondementReference2']);	
            $PDF->Text(27,141,$_SESSION['fondementDesignation2']);
            $PDF->Text(70,141,$_SESSION['fondementQuantite2']);	
			$PDF->Text(97,141,$_SESSION['fondementUnite2']);
			$PDF->Text(111,141,$_SESSION['fondementPrixUnitaire2']);
			$PDF->Text(141,141,$_SESSION['fondementTvaPourcent2']);
			
			$PDF->Text(7,149,$_SESSION['fondementReference3']);	
            $PDF->Text(27,149,$_SESSION['fondementDesignation3']);
            $PDF->Text(70,149,$_SESSION['fondementQuantite3']);	
			$PDF->Text(97,149,$_SESSION['fondementUnite3']);
			$PDF->Text(111,149,$_SESSION['fondementPrixUnitaire3']);
			$PDF->Text(141,149,$_SESSION['fondementTvaPourcent3']);
			
			$PDF->Text(7,157,$_SESSION['fondementReference4']);	
            $PDF->Text(27,157,$_SESSION['fondementDesignation4']);
            $PDF->Text(70,157,$_SESSION['fondementQuantite4']);	
			$PDF->Text(97,157,$_SESSION['fondementUnite4']);
			$PDF->Text(111,157,$_SESSION['fondementPrixUnitaire4']);
			$PDF->Text(141,157,$_SESSION['fondementTvaPourcent4']);
			
			$PDF->Text(7,165,$_SESSION['fondementReference5']);	
            $PDF->Text(27,165,$_SESSION['fondementDesignation5']);
            $PDF->Text(70,165,$_SESSION['fondementQuantite5']);	
			$PDF->Text(97,165,$_SESSION['fondementUnite5']);
			$PDF->Text(111,165,$_SESSION['fondementPrixUnitaire5']);
			$PDF->Text(141,165,$_SESSION['fondementTvaPourcent5']);
			
			$prixTotalHtF1=$_SESSION['fondementPrixUnitaire1']*$_SESSION['fondementQuantite1'];
			$prixTotalHtF2=$_SESSION['fondementPrixUnitaire2']*$_SESSION['fondementQuantite2'];
			$prixTotalHtF3=$_SESSION['fondementPrixUnitaire3']*$_SESSION['fondementQuantite3'];
			$prixTotalHtF4=$_SESSION['fondementPrixUnitaire4']*$_SESSION['fondementQuantite4'];
			$prixTotalHtF5=$_SESSION['fondementPrixUnitaire5']*$_SESSION['fondementQuantite5'];
			$prixTotalHtF=$prixTotalHtF1+$prixTotalHtF2+$prixTotalHtF3+$prixTotalHtF4+$prixTotalHtF5;
			
			
			$tvaPourcentF1=$_SESSION['fondementTvaPourcent1']/100;
			$tvaPourcentF2=$_SESSION['fondementTvaPourcent2']/100;
			$tvaPourcentF3=$_SESSION['fondementTvaPourcent3']/100;
			$tvaPourcentF4=$_SESSION['fondementTvaPourcent4']/100;
			$tvaPourcentF5=$_SESSION['fondementTvaPourcent5']/100;
			$tvaF1=$tvaPourcentF1*$prixTotalHtF1;
			$tvaF2=$tvaPourcentF2*$prixTotalHtF2;
			$tvaF3=$tvaPourcentF3*$prixTotalHtF3;
			$tvaF4=$tvaPourcentF4*$prixTotalHtF4;
			$tvaF5=$tvaPourcentF5*$prixTotalHtF5;
			$tvaF=$tvaF1+$tvaF2+$tvaF3+$tvaF4+$tvaF5;
			
			
			$prixTotalTtcF1=$prixTotalHtF1+$tvaF1;
			$prixTotalTtcF2=$prixTotalHtF2+$tvaF2;
			$prixTotalTtcF3=$prixTotalHtF3+$tvaF3;
			$prixTotalTtcF4=$prixTotalHtF4+$tvaF4;
			$prixTotalTtcF5=$prixTotalHtF5+$tvaF5;
			$prixTotalTtcF=$prixTotalTtcF1+$prixTotalTtcF2+$prixTotalTtcF3+$prixTotalTtcF4+$prixTotalTtcF5;
			
			$PDF->Text(156,133,$tvaF1);
			$PDF->Text(176,133,$prixTotalTtcF1);
			
			$PDF->Text(156,141,$tvaF2);
			$PDF->Text(176,141,$prixTotalTtcF2);
			
			$PDF->Text(156,149,$tvaF3);
			$PDF->Text(176,149,$prixTotalTtcF3);
			
			$PDF->Text(156,157,$tvaF4);
			$PDF->Text(176,157,$prixTotalTtcF4);
			
			$PDF->Text(156,165,$tvaF5);
			$PDF->Text(176,165,$prixTotalTtcF5);
			

			            $PDF->Line($x1,120,$x1 ,168); 
						$PDF->Line($x2,120,$x2 ,168); 
						$PDF->Line($x3,120,$x3 ,168);
						$PDF->Line($x4,120,$x4 ,168);
						$PDF->Line($x5,120,$x5 ,168);
						$PDF->Line($x6,120,$x6 ,168);
						$PDF->Line($x7,120,$x7 ,168);
						$PDF->Line($x8,120,$x8 ,168);
						$PDF->Line($x9,120,$x9 ,168);
			}
//---------------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------------

if($_SESSION['choixfondement']==6){
				
			$PDF->Text(7,133,$_SESSION['fondementReference1']);	
            $PDF->Text(27,133,$_SESSION['fondementDesignation1']);
            $PDF->Text(70,133,$_SESSION['fondementQuantite1']);	
			//$PDF->Text(97,133,$_SESSION['fondementUnite1']);
			$PDF->Text(111,133,$_SESSION['fondementPrixUnitaire1']);
			$PDF->Text(141,133,$_SESSION['fondementTvaPourcent1']);
			
			
			$PDF->Text(7,141,$_SESSION['fondementReference2']);	
            $PDF->Text(27,141,$_SESSION['fondementDesignation2']);
            $PDF->Text(70,141,$_SESSION['fondementQuantite2']);	
			//$PDF->Text(97,141,$_SESSION['fondementUnite2']);
			$PDF->Text(111,141,$_SESSION['fondementPrixUnitaire2']);
			$PDF->Text(141,141,$_SESSION['fondementTvaPourcent2']);
			
			$PDF->Text(7,149,$_SESSION['fondementReference3']);	
            $PDF->Text(27,149,$_SESSION['fondementDesignation3']);
            $PDF->Text(70,149,$_SESSION['fondementQuantite3']);	
			//$PDF->Text(97,149,$_SESSION['fondementUnite3']);
			$PDF->Text(111,149,$_SESSION['fondementPrixUnitaire3']);
			$PDF->Text(141,149,$_SESSION['fondementTvaPourcent3']);
			
			$PDF->Text(7,157,$_SESSION['fondementReference4']);	
            $PDF->Text(27,157,$_SESSION['fondementDesignation4']);
            $PDF->Text(70,157,$_SESSION['fondementQuantite4']);	
			//$PDF->Text(97,157,$_SESSION['fondementUnite4']);
			$PDF->Text(111,157,$_SESSION['fondementPrixUnitaire4']);
			$PDF->Text(141,157,$_SESSION['fondementTvaPourcent4']);
			
			$PDF->Text(7,165,$_SESSION['fondementReference5']);	
            $PDF->Text(27,165,$_SESSION['fondementDesignation5']);
            $PDF->Text(70,165,$_SESSION['fondementQuantite5']);	
			//$PDF->Text(97,157,$_SESSION['fondementUnite5']);
			$PDF->Text(111,165,$_SESSION['fondementPrixUnitaire5']);
			$PDF->Text(141,165,$_SESSION['fondementTvaPourcent5']);
			
			$PDF->Text(7,173,$_SESSION['fondementReference6']);	
            $PDF->Text(27,173,$_SESSION['fondementDesignation6']);
            $PDF->Text(70,173,$_SESSION['fondementQuantite6']);	
			//$PDF->Text(97,173,$_SESSION['fondementUnite6']);
			$PDF->Text(111,173,$_SESSION['fondementPrixUnitaire6']);
			$PDF->Text(141,173,$_SESSION['fondementTvaPourcent6']);
			
			$prixTotalHtF1=$_SESSION['fondementPrixUnitaire1']*$_SESSION['fondementQuantite1'];
			$prixTotalHtF2=$_SESSION['fondementPrixUnitaire2']*$_SESSION['fondementQuantite2'];
			$prixTotalHtF3=$_SESSION['fondementPrixUnitaire3']*$_SESSION['fondementQuantite3'];
			$prixTotalHtF4=$_SESSION['fondementPrixUnitaire4']*$_SESSION['fondementQuantite4'];
			$prixTotalHtF5=$_SESSION['fondementPrixUnitaire5']*$_SESSION['fondementQuantite5'];
			$prixTotalHtF6=$_SESSION['fondementPrixUnitaire6']*$_SESSION['fondementQuantite6'];
			$prixTotalHtF=$prixTotalHtF1+$prixTotalHtF2+$prixTotalHtF3+$prixTotalHtF4+$prixTotalHtF5+$prixTotalHtF6;
			
			
			$tvaPourcentF1=$_SESSION['fondementTvaPourcent1']/100;
			$tvaPourcentF2=$_SESSION['fondementTvaPourcent2']/100;
			$tvaPourcentF3=$_SESSION['fondementTvaPourcent3']/100;
			$tvaPourcentF4=$_SESSION['fondementTvaPourcent4']/100;
			$tvaPourcentF5=$_SESSION['fondementTvaPourcent5']/100;
			$tvaPourcentF6=$_SESSION['fondementTvaPourcent6']/100;
			$tvaF1=$tvaPourcentF1*$prixTotalHtF1;
			$tvaF2=$tvaPourcentF2*$prixTotalHtF2;
			$tvaF3=$tvaPourcentF3*$prixTotalHtF3;
			$tvaF4=$tvaPourcentF4*$prixTotalHtF4;
			$tvaF5=$tvaPourcentF5*$prixTotalHtF5;
			$tvaF6=$tvaPourcentF6*$prixTotalHtF6;
			$tvaF=$tvaF1+$tvaF2+$tvaF3+$tvaF4+$tvaF5+$tvaF6;
			
			
			$prixTotalTtcF1=$prixTotalHtF1+$tvaF1;
			$prixTotalTtcF2=$prixTotalHtF2+$tvaF2;
			$prixTotalTtcF3=$prixTotalHtF3+$tvaF3;
			$prixTotalTtcF4=$prixTotalHtF4+$tvaF4;
			$prixTotalTtcF5=$prixTotalHtF5+$tvaF5;
			$prixTotalTtcF6=$prixTotalHtF5+$tvaF6;
			$prixTotalTtcF=$prixTotalTtcF1+$prixTotalTtcF2+$prixTotalTtcF3+$prixTotalTtcF4+$prixTotalTtcF5+$prixTotalTtcF6;
			
			$PDF->Text(156,133,$tvaF1);
			$PDF->Text(176,133,$prixTotalTtcF1);
			
			$PDF->Text(156,141,$tvaF2);
			$PDF->Text(176,141,$prixTotalTtcF2);
			
			$PDF->Text(156,149,$tvaF3);
			$PDF->Text(176,149,$prixTotalTtcF3);
			
			$PDF->Text(156,157,$tvaF4);
			$PDF->Text(176,157,$prixTotalTtcF4);
			
			$PDF->Text(156,165,$tvaF5);
			$PDF->Text(176,165,$prixTotalTtcF5);
			
			$PDF->Text(156,173,$tvaF6);
			$PDF->Text(176,173,$prixTotalTtcF6);
			

			            $PDF->Line($x1,120,$x1 ,176); 
						$PDF->Line($x2,120,$x2 ,176); 
						$PDF->Line($x3,120,$x3 ,176);
						$PDF->Line($x4,120,$x4 ,176);
						$PDF->Line($x5,120,$x5 ,176);
						$PDF->Line($x6,120,$x6 ,176);
						$PDF->Line($x7,120,$x7 ,176);
						$PDF->Line($x8,120,$x8 ,176);
						$PDF->Line($x9,120,$x9 ,176);
			}

if($_SESSION['choixfondement']==7){
				
			$PDF->Text(7,133,$_SESSION['fondementReference1']);	
            $PDF->Text(27,133,$_SESSION['fondementDesignation1']);
            $PDF->Text(70,133,$_SESSION['fondementQuantite1']);	
			//$PDF->Text(97,133,$_SESSION['fondementUnite1']);
			$PDF->Text(111,133,$_SESSION['fondementPrixUnitaire1']);
			$PDF->Text(141,133,$_SESSION['fondementTvaPourcent1']);
			
			
			$PDF->Text(7,141,$_SESSION['fondementReference2']);	
            $PDF->Text(27,141,$_SESSION['fondementDesignation2']);
            $PDF->Text(70,141,$_SESSION['fondementQuantite2']);	
			//$PDF->Text(97,141,$_SESSION['fondementUnite2']);
			$PDF->Text(111,141,$_SESSION['fondementPrixUnitaire2']);
			$PDF->Text(141,141,$_SESSION['fondementTvaPourcent2']);
			
			$PDF->Text(7,149,$_SESSION['fondementReference3']);	
            $PDF->Text(27,149,$_SESSION['fondementDesignation3']);
            $PDF->Text(70,149,$_SESSION['fondementQuantite3']);	
			//$PDF->Text(97,149,$_SESSION['fondementUnite3']);
			$PDF->Text(111,149,$_SESSION['fondementPrixUnitaire3']);
			$PDF->Text(141,149,$_SESSION['fondementTvaPourcent3']);
			
			$PDF->Text(7,157,$_SESSION['fondementReference4']);	
            $PDF->Text(27,157,$_SESSION['fondementDesignation4']);
            $PDF->Text(70,157,$_SESSION['fondementQuantite4']);	
			//$PDF->Text(97,157,$_SESSION['fondementUnite4']);
			$PDF->Text(111,157,$_SESSION['fondementPrixUnitaire4']);
			$PDF->Text(141,157,$_SESSION['fondementTvaPourcent4']);
			
			$PDF->Text(7,165,$_SESSION['fondementReference5']);	
            $PDF->Text(27,165,$_SESSION['fondementDesignation5']);
            $PDF->Text(70,165,$_SESSION['fondementQuantite5']);	
			//$PDF->Text(97,157,$_SESSION['fondementUnite5']);
			$PDF->Text(111,165,$_SESSION['fondementPrixUnitaire5']);
			$PDF->Text(141,165,$_SESSION['fondementTvaPourcent5']);
			
			$PDF->Text(7,173,$_SESSION['fondementReference6']);	
            $PDF->Text(27,173,$_SESSION['fondementDesignation6']);
            $PDF->Text(70,173,$_SESSION['fondementQuantite6']);	
			//$PDF->Text(97,173,$_SESSION['fondementUnite6']);
			$PDF->Text(111,173,$_SESSION['fondementPrixUnitaire6']);
			$PDF->Text(141,173,$_SESSION['fondementTvaPourcent6']);
			
			$PDF->Text(7,181,$_SESSION['fondementReference7']);	
            $PDF->Text(27,181,$_SESSION['fondementDesignation7']);
            $PDF->Text(70,181,$_SESSION['fondementQuantite7']);	
			//$PDF->Text(97,181,$_SESSION['fondementUnite7']);
			$PDF->Text(111,181,$_SESSION['fondementPrixUnitaire7']);
			$PDF->Text(141,181,$_SESSION['fondementTvaPourcent7']);
			
			$prixTotalHtF1=$_SESSION['fondementPrixUnitaire1']*$_SESSION['fondementQuantite1'];
			$prixTotalHtF2=$_SESSION['fondementPrixUnitaire2']*$_SESSION['fondementQuantite2'];
			$prixTotalHtF3=$_SESSION['fondementPrixUnitaire3']*$_SESSION['fondementQuantite3'];
			$prixTotalHtF4=$_SESSION['fondementPrixUnitaire4']*$_SESSION['fondementQuantite4'];
			$prixTotalHtF5=$_SESSION['fondementPrixUnitaire5']*$_SESSION['fondementQuantite5'];
			$prixTotalHtF6=$_SESSION['fondementPrixUnitaire6']*$_SESSION['fondementQuantite6'];
			$prixTotalHtF7=$_SESSION['fondementPrixUnitaire7']*$_SESSION['fondementQuantite7'];
			$prixTotalHtF=$prixTotalHtF1+$prixTotalHtF2+$prixTotalHtF3+$prixTotalHtF4+$prixTotalHtF5+$prixTotalHtF6+$prixTotalHtF7;
			
			
			$tvaPourcentF1=$_SESSION['fondementTvaPourcent1']/100;
			$tvaPourcentF2=$_SESSION['fondementTvaPourcent2']/100;
			$tvaPourcentF3=$_SESSION['fondementTvaPourcent3']/100;
			$tvaPourcentF4=$_SESSION['fondementTvaPourcent4']/100;
			$tvaPourcentF5=$_SESSION['fondementTvaPourcent5']/100;
			$tvaPourcentF6=$_SESSION['fondementTvaPourcent6']/100;
			$tvaPourcentF7=$_SESSION['fondementTvaPourcent7']/100;
			$tvaF1=$tvaPourcentF1*$prixTotalHtF1;
			$tvaF2=$tvaPourcentF2*$prixTotalHtF2;
			$tvaF3=$tvaPourcentF3*$prixTotalHtF3;
			$tvaF4=$tvaPourcentF4*$prixTotalHtF4;
			$tvaF5=$tvaPourcentF5*$prixTotalHtF5;
			$tvaF6=$tvaPourcentF6*$prixTotalHtF6;
			$tvaF7=$tvaPourcentF7*$prixTotalHtF7;
			$tvaF=$tvaF1+$tvaF2+$tvaF3+$tvaF4+$tvaF5+$tvaF6+$tvaF7;
			
			
			$prixTotalTtcF1=$prixTotalHtF1+$tvaF1;
			$prixTotalTtcF2=$prixTotalHtF2+$tvaF2;
			$prixTotalTtcF3=$prixTotalHtF3+$tvaF3;
			$prixTotalTtcF4=$prixTotalHtF4+$tvaF4;
			$prixTotalTtcF5=$prixTotalHtF5+$tvaF5;
			$prixTotalTtcF6=$prixTotalHtF5+$tvaF6;
			$prixTotalTtcF7=$prixTotalHtF7+$tvaF7;
			$prixTotalTtcF=$prixTotalTtcF1+$prixTotalTtcF2+$prixTotalTtcF3+$prixTotalTtcF4+$prixTotalTtcF5+$prixTotalTtcF6+$prixTotalTtcF7;
			
			$PDF->Text(156,133,$tvaF1);
			$PDF->Text(176,133,$prixTotalTtcF1);
			
			$PDF->Text(156,141,$tvaF2);
			$PDF->Text(176,141,$prixTotalTtcF2);
			
			$PDF->Text(156,149,$tvaF3);
			$PDF->Text(176,149,$prixTotalTtcF3);
			
			$PDF->Text(156,157,$tvaF4);
			$PDF->Text(176,157,$prixTotalTtcF4);
			
			$PDF->Text(156,165,$tvaF5);
			$PDF->Text(176,165,$prixTotalTtcF5);
			
			$PDF->Text(156,173,$tvaF6);
			$PDF->Text(176,173,$prixTotalTtcF6);
			
			$PDF->Text(156,181,$tvaF7);
			$PDF->Text(176,181,$prixTotalTtcF7);
			

			            $PDF->Line($x1,120,$x1 ,184); 
						$PDF->Line($x2,120,$x2 ,184); 
						$PDF->Line($x3,120,$x3 ,184);
						$PDF->Line($x4,120,$x4 ,184);
						$PDF->Line($x5,120,$x5 ,184);
						$PDF->Line($x6,120,$x6 ,184);
						$PDF->Line($x7,120,$x7 ,184);
						$PDF->Line($x8,120,$x8 ,184);
						$PDF->Line($x9,120,$x9 ,184);
			}	

if($_SESSION['choixfondement']==8){
				
			$PDF->Text(7,133,$_SESSION['fondementReference1']);	
            $PDF->Text(27,133,$_SESSION['fondementDesignation1']);
            $PDF->Text(70,133,$_SESSION['fondementQuantite1']);	
			//$PDF->Text(97,133,$_SESSION['fondementUnite1']);
			$PDF->Text(111,133,$_SESSION['fondementPrixUnitaire1']);
			$PDF->Text(141,133,$_SESSION['fondementTvaPourcent1']);
			
			
			$PDF->Text(7,141,$_SESSION['fondementReference2']);	
            $PDF->Text(27,141,$_SESSION['fondementDesignation2']);
            $PDF->Text(70,141,$_SESSION['fondementQuantite2']);	
			//$PDF->Text(97,141,$_SESSION['fondementUnite2']);
			$PDF->Text(111,141,$_SESSION['fondementPrixUnitaire2']);
			$PDF->Text(141,141,$_SESSION['fondementTvaPourcent2']);
			
			$PDF->Text(7,149,$_SESSION['fondementReference3']);	
            $PDF->Text(27,149,$_SESSION['fondementDesignation3']);
            $PDF->Text(70,149,$_SESSION['fondementQuantite3']);	
			//$PDF->Text(97,149,$_SESSION['fondementUnite3']);
			$PDF->Text(111,149,$_SESSION['fondementPrixUnitaire3']);
			$PDF->Text(141,149,$_SESSION['fondementTvaPourcent3']);
			
			$PDF->Text(7,157,$_SESSION['fondementReference4']);	
            $PDF->Text(27,157,$_SESSION['fondementDesignation4']);
            $PDF->Text(70,157,$_SESSION['fondementQuantite4']);	
			//$PDF->Text(97,157,$_SESSION['fondementUnite4']);
			$PDF->Text(111,157,$_SESSION['fondementPrixUnitaire4']);
			$PDF->Text(141,157,$_SESSION['fondementTvaPourcent4']);
			
			$PDF->Text(7,165,$_SESSION['fondementReference5']);	
            $PDF->Text(27,165,$_SESSION['fondementDesignation5']);
            $PDF->Text(70,165,$_SESSION['fondementQuantite5']);	
			//$PDF->Text(97,157,$_SESSION['fondementUnite5']);
			$PDF->Text(111,165,$_SESSION['fondementPrixUnitaire5']);
			$PDF->Text(141,165,$_SESSION['fondementTvaPourcent5']);
			
			$PDF->Text(7,173,$_SESSION['fondementReference6']);	
            $PDF->Text(27,173,$_SESSION['fondementDesignation6']);
            $PDF->Text(70,173,$_SESSION['fondementQuantite6']);	
			//$PDF->Text(97,173,$_SESSION['fondementUnite6']);
			$PDF->Text(111,173,$_SESSION['fondementPrixUnitaire6']);
			$PDF->Text(141,173,$_SESSION['fondementTvaPourcent6']);
			
			$PDF->Text(7,181,$_SESSION['fondementReference7']);	
            $PDF->Text(27,181,$_SESSION['fondementDesignation7']);
            $PDF->Text(70,181,$_SESSION['fondementQuantite7']);	
			//$PDF->Text(97,181,$_SESSION['fondementUnite7']);
			$PDF->Text(111,181,$_SESSION['fondementPrixUnitaire7']);
			$PDF->Text(141,181,$_SESSION['fondementTvaPourcent7']);
			
			$PDF->Text(7,189,$_SESSION['fondementReference8']);	
            $PDF->Text(27,189,$_SESSION['fondementDesignation8']);
            $PDF->Text(70,189,$_SESSION['fondementQuantite8']);	
			//$PDF->Text(97,189,$_SESSION['fondementUnite8']);
			$PDF->Text(111,189,$_SESSION['fondementPrixUnitaire8']);
			$PDF->Text(141,189,$_SESSION['fondementTvaPourcent8']);
			
			$prixTotalHtF1=$_SESSION['fondementPrixUnitaire1']*$_SESSION['fondementQuantite1'];
			$prixTotalHtF2=$_SESSION['fondementPrixUnitaire2']*$_SESSION['fondementQuantite2'];
			$prixTotalHtF3=$_SESSION['fondementPrixUnitaire3']*$_SESSION['fondementQuantite3'];
			$prixTotalHtF4=$_SESSION['fondementPrixUnitaire4']*$_SESSION['fondementQuantite4'];
			$prixTotalHtF5=$_SESSION['fondementPrixUnitaire5']*$_SESSION['fondementQuantite5'];
			$prixTotalHtF6=$_SESSION['fondementPrixUnitaire6']*$_SESSION['fondementQuantite6'];
			$prixTotalHtF7=$_SESSION['fondementPrixUnitaire7']*$_SESSION['fondementQuantite7'];
			$prixTotalHtF8=$_SESSION['fondementPrixUnitaire8']*$_SESSION['fondementQuantite8'];
			$prixTotalHtF=$prixTotalHtF1+$prixTotalHtF2+$prixTotalHtF3+$prixTotalHtF4+$prixTotalHtF5+$prixTotalHtF6+$prixTotalHtF7+$prixTotalHtF8;
			
			
			$tvaPourcentF1=$_SESSION['fondementTvaPourcent1']/100;
			$tvaPourcentF2=$_SESSION['fondementTvaPourcent2']/100;
			$tvaPourcentF3=$_SESSION['fondementTvaPourcent3']/100;
			$tvaPourcentF4=$_SESSION['fondementTvaPourcent4']/100;
			$tvaPourcentF5=$_SESSION['fondementTvaPourcent5']/100;
			$tvaPourcentF6=$_SESSION['fondementTvaPourcent6']/100;
			$tvaPourcentF7=$_SESSION['fondementTvaPourcent7']/100;
			$tvaPourcentF8=$_SESSION['fondementTvaPourcent8']/100;
			$tvaF1=$tvaPourcentF1*$prixTotalHtF1;
			$tvaF2=$tvaPourcentF2*$prixTotalHtF2;
			$tvaF3=$tvaPourcentF3*$prixTotalHtF3;
			$tvaF4=$tvaPourcentF4*$prixTotalHtF4;
			$tvaF5=$tvaPourcentF5*$prixTotalHtF5;
			$tvaF6=$tvaPourcentF6*$prixTotalHtF6;
			$tvaF7=$tvaPourcentF7*$prixTotalHtF7;
			$tvaF8=$tvaPourcentF8*$prixTotalHtF8;
			$tvaF=$tvaF1+$tvaF2+$tvaF3+$tvaF4+$tvaF5+$tvaF6+$tvaF7+$tvaF8;
			
			
			$prixTotalTtcF1=$prixTotalHtF1+$tvaF1;
			$prixTotalTtcF2=$prixTotalHtF2+$tvaF2;
			$prixTotalTtcF3=$prixTotalHtF3+$tvaF3;
			$prixTotalTtcF4=$prixTotalHtF4+$tvaF4;
			$prixTotalTtcF5=$prixTotalHtF5+$tvaF5;
			$prixTotalTtcF6=$prixTotalHtF5+$tvaF6;
			$prixTotalTtcF7=$prixTotalHtF7+$tvaF7;
			$prixTotalTtcF8=$prixTotalHtF8+$tvaF8;
			$prixTotalTtcF=$prixTotalTtcF1+$prixTotalTtcF2+$prixTotalTtcF3+$prixTotalTtcF4+$prixTotalTtcF5+$prixTotalTtcF6+$prixTotalTtcF7+$prixTotalTtcF8;
			
			$PDF->Text(156,133,$tvaF1);
			$PDF->Text(176,133,$prixTotalTtcF1);
			
			$PDF->Text(156,141,$tvaF2);
			$PDF->Text(176,141,$prixTotalTtcF2);
			
			$PDF->Text(156,149,$tvaF3);
			$PDF->Text(176,149,$prixTotalTtcF3);
			
			$PDF->Text(156,157,$tvaF4);
			$PDF->Text(176,157,$prixTotalTtcF4);
			
			$PDF->Text(156,165,$tvaF5);
			$PDF->Text(176,165,$prixTotalTtcF5);
			
			$PDF->Text(156,173,$tvaF6);
			$PDF->Text(176,173,$prixTotalTtcF6);
			
			$PDF->Text(156,181,$tvaF7);
			$PDF->Text(176,181,$prixTotalTtcF7);
			
			$PDF->Text(156,189,$tvaF8);
			$PDF->Text(176,189,$prixTotalTtcF8);
			

			            $PDF->Line($x1,120,$x1 ,192); 
						$PDF->Line($x2,120,$x2 ,192); 
						$PDF->Line($x3,120,$x3 ,192);
						$PDF->Line($x4,120,$x4 ,192);
						$PDF->Line($x5,120,$x5 ,192);
						$PDF->Line($x6,120,$x6 ,192);
						$PDF->Line($x7,120,$x7 ,192);
						$PDF->Line($x8,120,$x8 ,192);
						$PDF->Line($x9,120,$x9 ,192);
			}				
			
}

















if(isset($_POST['creer_pdf'])){
$_SESSION['fondementc']=$_POST['fondementc']; $_SESSION['elevationc']=$_POST['elevationc'];
	if(!empty($_SESSION['fondementc']) and isset($_SESSION['fondementPdf'])){
		$PDF->Text(5,118,$_SESSION['fondementc']);
	}
	if(empty($_SESSION['fondementc']) and isset($_SESSION['fondementPdf'])){$PDF->Text(5,118,"Fondement");}
	
	if(!empty($_SESSION['elevationc']) and isset($_SESSION['elevationPdf'])){
		$PDF->Text(5,198,$_SESSION['elevationc']);
		
	}
	if(empty($_SESSION['elevationc']) and isset($_SESSION['elevationPdf'])){$PDF->Text(5,198,"Elevation");}
}





if(isset($_SESSION['fondementPdf']) and !isset($_SESSION['elevationPdf']) and !isset($_SESSION['dallePdf']) and !isset($_SESSION['cloturePdf'])){
$PDF->Text(120,210,"Prix Total HT");
$PDF->Text(120,220,"TVA");
$PDF->Text(120,230,"Prix Total TTC :");
$prixTotalTtc=0;
if(isset($prixTotalTtcF)){$prixTotalTtc=$prixTotalTtc+$prixTotalTtcF; }
if(isset($prixTotalTtcC)){$prixTotalTtc=$prixTotalTtc+$prixTotalTtcC; }
if(isset($prixTotalTtcE)){$prixTotalTtc=$prixTotalTtc+$prixTotalTtcE; }
if(isset($prixTotalTtcD)){$prixTotalTtc=$prixTotalTtc+$prixTotalTtcD; }
$PDF->Text(150,230,$prixTotalTtc);
$PDF->Text(180,230,$monnaie);

$prixTotalHt=0;
if(isset($prixTotalHtF)){$prixTotalHt=$prixTotalHt+$prixTotalHtF; }
if(isset($prixTotalHtC)){$prixTotalHt=$prixTotalHt+$prixTotalHtC; }
if(isset($prixTotalHtE)){$prixTotalHt=$prixTotalHt+$prixTotalHtE; }
if(isset($prixTotalHtD)){$prixTotalHt=$prixTotalHt+$prixTotalHtD; }
$PDF->Text(150,210,$prixTotalHt);
$PDF->Text(180,210,$monnaie);

$tva=0;
if(isset($tvaF)){$tva=$tva+$tvaF; }
if(isset($tvaC)){$tva=$tva+$tvaC; }
if(isset($tvaE)){$tva=$tva+$tvaE; }
if(isset($tvaD)){$tva=$tva+$tvaD; }
$PDF->Text(150,220,$tva);
$PDF->Text(180,220,$monnaie);
}



if(isset($_SESSION['fondementPdf']) and isset($_SESSION['elevationPdf']) and isset($_SESSION['dallePdf']) or isset($_SESSION['cloturePdf'])){
$PDF->AddPage();
}
include_once("dalle.php");
include_once("cloture.php");

if(isset($_POST['creer_pdf'])){
	
	$_SESSION['cloturec']=$_POST['cloturec'];      $_SESSION['dallec']=$_POST['dallec'];
	if(!empty($_SESSION['cloturec']) and isset($_SESSION['cloturePdf'])){
		$PDF->Text(5,118,$_SESSION['cloturec']);
	}
	if(empty($_SESSION['cloturec']) and isset($_SESSION['cloturePdf'])){$PDF->Text(5,118,"Cloture");}
	
	if(!empty($_SESSION['dallec']) and isset($_SESSION['dallePdf'])){
		$PDF->Text(5,18,$_SESSION['dallec']);
		$dallec="";
	}
	if(empty($_SESSION['dallec']) and isset($_SESSION['dallePdf'])){$PDF->Text(5,18,"Dalle");}
	

}



if(isset($_SESSION['fondementPdf']) and isset($_SESSION['elevationPdf']) and !isset($_SESSION['dallePdf']) and !isset($_SESSION['cloturePdf'])){
	$PDF->AddPage();
$PDF->Text(120,30,"Prix Total HT");
$PDF->Text(120,40,"TVA");
$PDF->Text(120,50,"Prix Total TTC :");
$prixTotalTtc=0;
if(isset($prixTotalTtcF)){$prixTotalTtc=$prixTotalTtc+$prixTotalTtcF; }
if(isset($prixTotalTtcC)){$prixTotalTtc=$prixTotalTtc+$prixTotalTtcC; }
if(isset($prixTotalTtcE)){$prixTotalTtc=$prixTotalTtc+$prixTotalTtcE; }
if(isset($prixTotalTtcD)){$prixTotalTtc=$prixTotalTtc+$prixTotalTtcD; }
$PDF->Text(150,50,$prixTotalTtc);
$PDF->Text(180,50,$monnaie);

$prixTotalHt=0;
if(isset($prixTotalHtF)){$prixTotalHt=$prixTotalHt+$prixTotalHtF; }
if(isset($prixTotalHtC)){$prixTotalHt=$prixTotalHt+$prixTotalHtC; }
if(isset($prixTotalHtE)){$prixTotalHt=$prixTotalHt+$prixTotalHtE; }
if(isset($prixTotalHtD)){$prixTotalHt=$prixTotalHt+$prixTotalHtD; }
$PDF->Text(150,30,$prixTotalHt);
$PDF->Text(180,30,$monnaie);

$tva=0;
if(isset($tvaF)){$tva=$tva+$tvaF; }
if(isset($tvaC)){$tva=$tva+$tvaC; }
if(isset($tvaE)){$tva=$tva+$tvaE; }
if(isset($tvaD)){$tva=$tva+$tvaD; }
$PDF->Text(150,40,$tva);
$PDF->Text(180,40,$monnaie);
}









if(isset($_SESSION['fondementPdf']) and isset($_SESSION['elevationPdf']) and isset($_SESSION['dallePdf']) and !isset($_SESSION['cloturePdf'])){
$PDF->Text(120,130,"Prix Total HT");
$PDF->Text(120,140,"TVA");
$PDF->Text(120,150,"Prix Total TTC :");
$prixTotalTtc=0;
if(isset($prixTotalTtcF)){$prixTotalTtc=$prixTotalTtc+$prixTotalTtcF; }
if(isset($prixTotalTtcC)){$prixTotalTtc=$prixTotalTtc+$prixTotalTtcC; }
if(isset($prixTotalTtcE)){$prixTotalTtc=$prixTotalTtc+$prixTotalTtcE; }
if(isset($prixTotalTtcD)){$prixTotalTtc=$prixTotalTtc+$prixTotalTtcD; }
$PDF->Text(150,150,$prixTotalTtc);
$PDF->Text(180,150,$monnaie);

$prixTotalHt=0;
if(isset($prixTotalHtF)){$prixTotalHt=$prixTotalHt+$prixTotalHtF; }
if(isset($prixTotalHtC)){$prixTotalHt=$prixTotalHt+$prixTotalHtC; }
if(isset($prixTotalHtE)){$prixTotalHt=$prixTotalHt+$prixTotalHtE; }
if(isset($prixTotalHtD)){$prixTotalHt=$prixTotalHt+$prixTotalHtD; }
$PDF->Text(150,130,$prixTotalHt);
$PDF->Text(180,130,$monnaie);

$tva=0;
if(isset($tvaF)){$tva=$tva+$tvaF; }
if(isset($tvaC)){$tva=$tva+$tvaC; }
if(isset($tvaE)){$tva=$tva+$tvaE; }
if(isset($tvaD)){$tva=$tva+$tvaD; }
$PDF->Text(150,140,$tva);
$PDF->Text(180,140,$monnaie);
}









if(isset($_SESSION['fondementPdf']) and isset($_SESSION['elevationPdf']) and isset($_SESSION['dallePdf']) and isset($_SESSION['cloturePdf'])){
$PDF->Text(120,210,"Prix Total HT");
$PDF->Text(120,220,"TVA");
$PDF->Text(120,230,"Prix Total TTC :");
$prixTotalTtc=0;
if(isset($prixTotalTtcF)){$prixTotalTtc=$prixTotalTtc+$prixTotalTtcF; }
if(isset($prixTotalTtcC)){$prixTotalTtc=$prixTotalTtc+$prixTotalTtcC; }
if(isset($prixTotalTtcE)){$prixTotalTtc=$prixTotalTtc+$prixTotalTtcE; }
if(isset($prixTotalTtcD)){$prixTotalTtc=$prixTotalTtc+$prixTotalTtcD; }
$PDF->Text(150,230,$prixTotalTtc);
$PDF->Text(180,230,$monnaie);

$prixTotalHt=0;
if(isset($prixTotalHtF)){$prixTotalHt=$prixTotalHt+$prixTotalHtF; }
if(isset($prixTotalHtC)){$prixTotalHt=$prixTotalHt+$prixTotalHtC; }
if(isset($prixTotalHtE)){$prixTotalHt=$prixTotalHt+$prixTotalHtE; }
if(isset($prixTotalHtD)){$prixTotalHt=$prixTotalHt+$prixTotalHtD; }
$PDF->Text(150,210,$prixTotalHt);
$PDF->Text(180,210,$monnaie);

$tva=0;
if(isset($tvaF)){$tva=$tva+$tvaF; }
if(isset($tvaC)){$tva=$tva+$tvaC; }
if(isset($tvaE)){$tva=$tva+$tvaE; }
if(isset($tvaD)){$tva=$tva+$tvaD; }
$PDF->Text(150,220,$tva);
$PDF->Text(180,220,$monnaie);
}
$PDF->Output();
unset($_SESSION['clotureReference1']);
unset($_SESSION['clotureDesignation1']);
unset($_SESSION['clotureQuantite1']);
unset($_SESSION['clotureUnite1']);
unset($_SESSION['cloturePrixUnitaire1']);
unset($_SESSION['clotureTvaPourcent2']);

unset($_SESSION['clotureReference2']);
unset($_SESSION['clotureDesignation2']);
unset($_SESSION['clotureQuantite2']);
unset($_SESSION['clotureUnite2']);
unset($_SESSION['cloturePrixUnitaire2']);
unset($_SESSION['clotureTvaPourcent2']);

unset($_SESSION['clotureReference3']);
unset($_SESSION['clotureDesignation3']);
unset($_SESSION['clotureQuantite3']);
unset($_SESSION['clotureUnite3']);
unset($_SESSION['cloturePrixUnitaire3']);
unset($_SESSION['clotureTvaPourcent3']);

unset($_SESSION['clotureReference4']);
unset($_SESSION['clotureDesignation4']);
unset($_SESSION['clotureQuantite4']);
unset($_SESSION['clotureUnite4']);
unset($_SESSION['cloturePrixUnitaire4']);
unset($_SESSION['clotureTvaPourcent4']);

unset($_SESSION['clotureReference5']);
unset($_SESSION['clotureDesignation5']);
unset($_SESSION['clotureQuantite5']);
unset($_SESSION['clotureUnite5']);
unset($_SESSION['cloturePrixUnitaire5']);
unset($_SESSION['clotureTvaPourcent5']);


unset($_SESSION['dalleReference1']);
unset($_SESSION['dalleDesignation1']);
unset($_SESSION['dalleQuantite1']);
unset($_SESSION['dalleUnite1']);
unset($_SESSION['dallePrixUnitaire1']);
unset($_SESSION['dalleTvaPourcent2']);

unset($_SESSION['dalleReference2']);
unset($_SESSION['dalleDesignation2']);
unset($_SESSION['dalleQuantite2']);
unset($_SESSION['dalleUnite2']);
unset($_SESSION['dallePrixUnitaire2']);
unset($_SESSION['dalleTvaPourcent2']);

unset($_SESSION['dalleReference3']);
unset($_SESSION['dalleDesignation3']);
unset($_SESSION['dalleQuantite3']);
unset($_SESSION['dalleUnite3']);
unset($_SESSION['dallePrixUnitaire3']);
unset($_SESSION['dalleTvaPourcent3']);

unset($_SESSION['dalleReference4']);
unset($_SESSION['dalleDesignation4']);
unset($_SESSION['dalleQuantite4']);
unset($_SESSION['dalleUnite4']);
unset($_SESSION['dallePrixUnitaire4']);
unset($_SESSION['dalleTvaPourcent4']);

unset($_SESSION['dalleReference5']);
unset($_SESSION['dalleDesignation5']);
unset($_SESSION['dalleQuantite5']);
unset($_SESSION['dalleUnite5']);
unset($_SESSION['dallePrixUnitaire5']);
unset($_SESSION['dalleTvaPourcent5']);

unset($_SESSION['dalleReference6']);
unset($_SESSION['dalleDesignation6']);
unset($_SESSION['dalleQuantite6']);
unset($_SESSION['dalleUnite6']);
unset($_SESSION['dallePrixUnitaire6']);
unset($_SESSION['dalleTvaPourcent6']);

unset($_SESSION['dalleReference7']);
unset($_SESSION['dalleDesignation7']);
unset($_SESSION['dalleQuantite7']);
unset($_SESSION['dalleUnite7']);
unset($_SESSION['dallePrixUnitaire7']);
unset($_SESSION['dalleTvaPourcent7']);

unset($_SESSION['dalleReference8']);
unset($_SESSION['dalleDesignation8']);
unset($_SESSION['dalleQuantite8']);
unset($_SESSION['dalleUnite8']);
unset($_SESSION['dallePrixUnitaire8']);
unset($_SESSION['dalleTvaPourcent8']);





unset($_SESSION['fondementReference1']);
unset($_SESSION['fondementDesignation1']);
unset($_SESSION['fondementQuantite1']);
unset($_SESSION['fondementUnite1']);
unset($_SESSION['fondementPrixUnitaire1']);
unset($_SESSION['fondementTvaPourcent2']);

unset($_SESSION['fondementReference2']);
unset($_SESSION['fondementDesignation2']);
unset($_SESSION['fondementQuantite2']);
unset($_SESSION['fondementUnite2']);
unset($_SESSION['fondementPrixUnitaire2']);
unset($_SESSION['fondementTvaPourcent2']);

unset($_SESSION['fondementReference3']);
unset($_SESSION['fondementDesignation3']);
unset($_SESSION['fondementQuantite3']);
unset($_SESSION['fondementUnite3']);
unset($_SESSION['fondementPrixUnitaire3']);
unset($_SESSION['fondementTvaPourcent3']);

unset($_SESSION['fondementReference4']);
unset($_SESSION['fondementDesignation4']);
unset($_SESSION['fondementQuantite4']);
unset($_SESSION['fondementUnite4']);
unset($_SESSION['fondementPrixUnitaire4']);
unset($_SESSION['fondementTvaPourcent4']);

unset($_SESSION['fondementReference5']);
unset($_SESSION['fondementDesignation5']);
unset($_SESSION['fondementQuantite5']);
unset($_SESSION['fondementUnite5']);
unset($_SESSION['fondementPrixUnitaire5']);
unset($_SESSION['fondementTvaPourcent5']);

unset($_SESSION['fondementReference6']);
unset($_SESSION['fondementDesignation6']);
unset($_SESSION['fondementQuantite6']);
unset($_SESSION['fondementUnite6']);
unset($_SESSION['fondementPrixUnitaire6']);
unset($_SESSION['fondementTvaPourcent6']);

unset($_SESSION['fondementReference7']);
unset($_SESSION['fondementDesignation7']);
unset($_SESSION['fondementQuantite7']);
unset($_SESSION['fondementUnite7']);
unset($_SESSION['fondementPrixUnitaire7']);
unset($_SESSION['fondementTvaPourcent7']);

unset($_SESSION['fondementReference8']);
unset($_SESSION['fondementDesignation8']);
unset($_SESSION['fondementQuantite8']);
unset($_SESSION['fondementUnite8']);
unset($_SESSION['fondementPrixUnitaire8']);
unset($_SESSION['fondementTvaPourcent8']);



unset($_SESSION['elevationReference1']);
unset($_SESSION['elevationDesignation1']);
unset($_SESSION['elevationQuantite1']);
unset($_SESSION['elevationUnite1']);
unset($_SESSION['elevationPrixUnitaire1']);
unset($_SESSION['elevationTvaPourcent2']);

unset($_SESSION['elevationReference2']);
unset($_SESSION['elevationDesignation2']);
unset($_SESSION['elevationQuantite2']);
unset($_SESSION['elevationUnite2']);
unset($_SESSION['elevationPrixUnitaire2']);
unset($_SESSION['elevationTvaPourcent2']);

unset($_SESSION['elevationReference3']);
unset($_SESSION['elevationDesignation3']);
unset($_SESSION['elevationQuantite3']);
unset($_SESSION['elevationUnite3']);
unset($_SESSION['elevationPrixUnitaire3']);
unset($_SESSION['elevationTvaPourcent3']);

unset($_SESSION['elevationReference4']);
unset($_SESSION['elevationDesignation4']);
unset($_SESSION['elevationQuantite4']);
unset($_SESSION['elevationUnite4']);
unset($_SESSION['elevationPrixUnitaire4']);
unset($_SESSION['elevationTvaPourcent4']);

unset($_SESSION['elevationReference5']);
unset($_SESSION['elevationDesignation5']);
unset($_SESSION['elevationQuantite5']);
unset($_SESSION['elevationUnite5']);
unset($_SESSION['elevationPrixUnitaire5']);
unset($_SESSION['elevationTvaPourcent5']);

unset($_SESSION['elevationReference6']);
unset($_SESSION['elevationDesignation6']);
unset($_SESSION['elevationQuantite6']);
unset($_SESSION['elevationUnite6']);
unset($_SESSION['elevationPrixUnitaire6']);
unset($_SESSION['elevationTvaPourcent6']);

unset($_SESSION['elevationReference7']);
unset($_SESSION['elevationDesignation7']);
unset($_SESSION['elevationQuantite7']);
unset($_SESSION['elevationUnite7']);
unset($_SESSION['elevationPrixUnitaire7']);
unset($_SESSION['elevationTvaPourcent7']);

unset($_SESSION['elevationReference8']);
unset($_SESSION['elevationDesignation8']);
unset($_SESSION['elevationQuantite8']);
unset($_SESSION['elevationUnite8']);
unset($_SESSION['elevationPrixUnitaire8']);
unset($_SESSION['elevationTvaPourcent8']);

unset($_SESSION['choixdalle']);
unset($_SESSION['choixfondement']);
unset($_SESSION['choixelevation']);
unset($_SESSION['choixfondement']);
unset($_SESSION['choixcloture']);

unset($_SESSION['dallePdf']);
unset($_SESSION['fondementPdf']);
unset($_SESSION['elevationPdf']);
unset($_SESSION['cloturePdf']);

unset($_SESSION['fondementc']);
unset($_SESSION['cloturec']);
unset($_SESSION['elevationc']);
unset($_SESSION['dallec']); 

 
ob_end_flush();
?>
