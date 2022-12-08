<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    //$this->Image('logo.png',10,8,33);
    // Arial bold 15
    //$this->SetFont('Arial','B',15);
    // Movernos a la derecha
    //$this->Cell(80);
    // Título
    //$this->Cell(30,10,'Title',1,0,'C');
    // Salto de línea
    //$this->Ln(20);
}

// Pie de página
function Footer()
{

    // Posición: a 1,5 cm del final
    //$this->SetY(-15);
    // Arial italic 8
    //$this->SetFont('Arial','I',8);
    // Número de página
    //$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
} 

 require 'conexion.php';
$consulta = "SELECT  * FROM services WHERE id='{$_GET["id"]}'"; 
$resultado = $mysqli->query($consulta);



// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetTitle('CRM');
$pdf->SetFont('Times','',10);
$pdf->Image('fpdf/img/Master.jpg',0,0,210);
$pdf->SetTextColor(  48, 71, 200  );



while($row = $resultado->fetch_assoc()){
    $pdf->SetXY(180,10); // posicion dateservice
    $pdf->cell(50,10,$row['id'], 0, 0, 'c', 0);
    $pdf->SetXY(165,15); // posicion dateservice
    $pdf->cell(50,10, date('m/d/Y g:i:s a ',strtotime($row['dateservice'])), 0, 0, 'c', 0);
    $pdf->SetXY(61,43.5); // posicion service
    $pdf->multicell(52,4,$row['service'], 0, 'l', 0);
    $pdf->SetXY(74,49); // posicion dateneed
    $pdf->cell(50,10, date('m/d/Y H:i:s a',strtotime($row['dateneed'])), 0, 0, 'c', 0);
    $pdf->SetXY(77,54); // posicion referral
    $pdf->cell(50,10,$row['referral'], 0, 0, 'c', 0);
    $pdf->SetXY(143,22); // posicion company
    $pdf->cell(50,10,$row['company'], 0, 0, 'c', 0);
    $pdf->SetXY(137,27); // posicion contact
    $pdf->cell(50,10,$row['contact'], 0, 0, 'c', 0);
    $pdf->SetXY(127,32); // posicion phone
    $pdf->cell(50,10,$row['phone'], 0, 0, 'c', 0);
    $pdf->SetXY(130,38); // posicion address
    $pdf->cell(50,10,$row['address'], 0, 0, 'c', 0);
    $pdf->SetXY(115,42.5); // posicion city
    $pdf->cell(50,10,$row['city'], 0, 0, 'c', 0);
    $pdf->SetXY(161,42); // posicion zip
    $pdf->cell(50,10,$row['zip'], 0, 0, 'c', 0);
    $pdf->SetXY(186,52); // posicion lockcode
    $pdf->cell(50,10,$row['lockcode'], 0, 0, 'c', 0);
    $pdf->SetXY(116,51.5); // posicion 
    $pdf->cell(50,10,$row['emailcont'], 0, 0, 'c', 0);
    $pdf->SetXY(75,30.3); // posicion POS
    $pdf->cell(50,10,$row['POS'], 0, 0, 'c', 0);
    $pdf->SetXY(107,34.5); // posicion QA
    $pdf->cell(50,10,$row['QA'], 0, 0, 'c', 0);
    $pdf->SetXY(106.8,30.4); // posicion WEP
    $pdf->cell(50,10,$row['WEP'], 0, 0, 'c', 0);

// Upper Level
    $pdf->SetXY(40.5,61.6); // posicion Un
    $pdf->cell(50,10,$row['Un'], 0, 0, 'c', 0);
    $pdf->SetXY(175,61.8); // posicion Uhrs
    $pdf->cell(50,10,$row['Uhrs'], 0, 0, 'c', 0);
    $pdf->SetXY(16.5,66.9); // posicion Urooms
    $pdf->cell(50,10,$row['Urooms'], 0, 0, 'c', 0);
    $pdf->SetXY(16.5,71.5); // posicion Uclosets
    $pdf->cell(50,10,$row['Uclosets'], 0, 0, 'c', 0);
    $pdf->SetXY(16.5,75.8); // posicion Ubroms
    $pdf->cell(50,10,$row['Ubroms'], 0, 0, 'c', 0);
    $pdf->SetXY(16.5,80); // posicion Ufans
    $pdf->cell(50,10,$row['Ufans'], 0, 0, 'c', 0);
    $pdf->SetXY(16.5,84.5); // posicion Uwinds
    $pdf->cell(50,10,$row['Uwinds'], 0, 0, 'c', 0);
    $pdf->SetXY(16.5,89); // posicion Ublinds
    $pdf->cell(50,10,$row['Ublinds'], 0, 0, 'c', 0);
    $pdf->SetXY(16.5,93.4); // posicion Uofrooms
    $pdf->cell(50,10,$row['Uofrooms'], 0, 0, 'c', 0);
    $pdf->SetXY(16.5,97.5); // posicion Ufamrooms
    $pdf->cell(50,10,$row['Ufamrooms'], 0, 0, 'c', 0);
    $pdf->SetXY(47,66.9); // posicion Uledges
    $pdf->cell(50,10,$row['Uledges'], 0, 0, 'c', 0);
    $pdf->SetXY(47,71.5); // posicion Ufire
    $pdf->cell(50,10,$row['Ufire'], 0, 0, 'c', 0);
    $pdf->SetXY(62,74.5); // posicion Ugas
    $pdf->cell(50,10,$row['Ugas'], 0, 0, 'c', 0);
    $pdf->SetXY(52,74.5); // posicion Uwood
    $pdf->cell(50,10,$row['Uwood'], 0, 0, 'c', 0);
    $pdf->SetXY(47,80); // posicion Ulaundry
    $pdf->cell(50,10,$row['Ulaundry'], 0, 0, 'c', 0);
    $pdf->SetXY(52.2,83.5); // posicion Uwasher
    $pdf->cell(50,10,$row['Uwasher'], 0, 0, 'c', 0);
    $pdf->SetXY(63.5,83.7); // posicion Udryer
    $pdf->cell(50,10,$row['Udryer'], 0, 0, 'c', 0);
    $pdf->SetXY(47.5,88.5); // posicion Uslidoor 
    $pdf->cell(50,10,$row['Uslidoor'], 0, 0, 'c', 0);
    $pdf->SetXY(56,92.3); // posicion 
    $pdf->cell(50,10,$row['Uclean'], 0, 0, 'c', 0);
    $pdf->SetXY(83,67); // posicion 
    $pdf->cell(50,10,$row['Ucarpet'], 0, 0, 'c', 0);
    $pdf->SetXY(88.4,70.5); // posicion 
    $pdf->cell(50,10,$row['Ucleanc'], 0, 0, 'c', 0);
    $pdf->SetXY(100,70.5); // posicion 
    $pdf->cell(50,10,$row['Uvaccum'], 0, 0, 'c', 0);
    $pdf->SetXY(90,75.5); // posicion 
    $pdf->cell(50,10,$row['UFrooms'], 0, 0, 'c', 0);
    $pdf->SetXY(90,80); // posicion 
    $pdf->cell(50,10,$row['UFclosets'], 0, 0, 'c', 0);
    $pdf->SetXY(90,84.2); // posicion 
    $pdf->cell(50,10,$row['UFhall'], 0, 0, 'c', 0);
    $pdf->SetXY(90,88.5); // posicion 
    $pdf->cell(50,10,$row['UFstair'], 0, 0, 'c', 0);
    $pdf->SetXY(125.5,67); // posicion 
    $pdf->cell(50,10,$row['UFwood'], 0, 0, 'c', 0);
    $pdf->SetXY(147,67.3); // posicion 
    $pdf->cell(50,10,$row['UFwoodt'], 0, 0, 'c', 0);
    $pdf->SetXY(125.5,71.5); // posicion 
    $pdf->cell(50,10,$row['UFtile'], 0, 0, 'c', 0);
    $pdf->SetXY(144,71.5); // posicion 
    $pdf->cell(50,10,$row['UFtilet'], 0, 0, 'c', 0);
    $pdf->SetXY(125.5,75.6); // posicion 
    $pdf->cell(50,10,$row['UFvtc'], 0, 0, 'c', 0);
    $pdf->SetXY(138,75.6); // posicion 
    $pdf->cell(50,10,$row['UFvtct'], 0, 0, 'c', 0);
    $pdf->SetXY(124,88); // posicion 
    $pdf->multicell(76,4,$row['Unotes'], 0,'l', 0);

// Main Level
    $pdf->SetXY(174.5,108); // posicion 
    $pdf->cell(50,10,$row['Mhrs'], 0, 0, 'c', 0);
    $pdf->SetXY(16.5,112.5); // posicion 
    $pdf->cell(50,10,$row['Mrooms'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,117); // posicion 
    $pdf->cell(50,10,$row['Mclosets'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,121.5); // posicion 
    $pdf->cell(50,10,$row['Mbroms'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,126); // posicion 
    $pdf->cell(50,10,$row['Mfans'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,130); // posicion 
    $pdf->cell(50,10,$row['Mwinds'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,134.5); // posicion 
    $pdf->cell(50,10,$row['Mblinds'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,139); // posicion 
    $pdf->cell(50,10,$row['Mofrooms'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,143); // posicion 
    $pdf->cell(50,10,$row['Mfamrooms'], 0, 0, 'c', 0);
    $pdf->SetXY(46.5,112.5); // posicion 
    $pdf->cell(50,10,$row['Mledges'], 0, 0, 'c', 0); 
    $pdf->SetXY(78.2,112.5); // posicion 
    $pdf->cell(50,10,$row['Mkitchen'], 0, 0, 'c', 0); 
    $pdf->SetXY(78.2,134); // posicion 
    $pdf->cell(50,10,$row['Mtkitchg'], 0, 0, 'c', 0); 
    $pdf->SetXY(46.5,117); // posicion 
    $pdf->cell(50,10,$row['Mfire'], 0, 0, 'c', 0); 
    $pdf->SetXY(62,121); // posicion 
    $pdf->cell(50,10,$row['Mgas'], 0, 0, 'c', 0); 
    $pdf->SetXY(52,121); // posicion 
    $pdf->cell(50,10,$row['Mwood'], 0, 0, 'c', 0); 
    $pdf->SetXY(46.5,125); // posicion 
    $pdf->cell(50,10,$row['Mlaundry'], 0, 0, 'c', 0); 
    $pdf->SetXY(53,130); // posicion 
    $pdf->cell(50,10,$row['Mwasher'], 0, 0, 'c', 0); 
    $pdf->SetXY(64.2,130); // posicion 
    $pdf->cell(50,10,$row['Mdryer'], 0, 0, 'c', 0); 
    $pdf->SetXY(46.5,134); // posicion 
    $pdf->cell(50,10,$row['Mlivroom'], 0, 0, 'c', 0); 
    $pdf->SetXY(46.5,139); // posicion 
    $pdf->cell(50,10,$row['Mdinroom'], 0, 0, 'c', 0); 
    $pdf->SetXY(78.4,117); // posicion 
    $pdf->cell(50,10,$row['Mstove'], 0, 0, 'c', 0);
    $pdf->SetXY(93,117); // posicion 
    $pdf->cell(50,10,$row['MSin'], 0, 0, 'c', 0); 
    $pdf->SetXY(99.4,117); // posicion 
    $pdf->cell(50,10,$row['MSout'], 0, 0, 'c', 0); 
    $pdf->SetXY(106,117); // posicion 
    $pdf->cell(50,10,$row['MSnum'], 0, 0, 'c', 0); 
    $pdf->SetXY(78.4,121); // posicion 
    $pdf->cell(50,10,$row['Mfridge'], 0, 0, 'c', 0); 
    $pdf->SetXY(93,121); // posicion 
    $pdf->cell(50,10,$row['MFin'], 0, 0, 'c', 0); 
    $pdf->SetXY(99.4,121); // posicion 
    $pdf->cell(50,10,$row['MFout'], 0, 0, 'c', 0); 
    $pdf->SetXY(106,121); // posicion 
    $pdf->cell(50,10,$row['MFnum'], 0, 0, 'c', 0); 
    $pdf->SetXY(78.4,125.5); // posicion 
    $pdf->cell(50,10,$row['Mdwasher'], 0, 0, 'c', 0); 
    $pdf->SetXY(100.5,125.5); // posicion 
    $pdf->cell(50,10,$row['MDin'], 0, 0, 'c', 0); 
    $pdf->SetXY(106.6,125.5); // posicion 
    $pdf->cell(50,10,$row['MDout'], 0, 0, 'c', 0); 
    $pdf->SetXY(113,125); // posicion 
    $pdf->cell(50,10,$row['MDnum'], 0, 0, 'c', 0); 
    $pdf->SetXY(78.4,130); // posicion 
    $pdf->cell(50,10,$row['Mmicro'], 0, 0, 'c', 0); 
    $pdf->SetXY(100.5,130); // posicion 
    $pdf->cell(50,10,$row['MMin'], 0, 0, 'c', 0); 
    $pdf->SetXY(106.6,130); // posicion 
    $pdf->cell(50,10,$row['MMout'], 0, 0, 'c', 0); 
    $pdf->SetXY(113,130); // posicion 
    $pdf->cell(50,10,$row['MMnum'], 0, 0, 'c', 0); 
    $pdf->SetXY(78.4,138); // posicion 
    $pdf->cell(50,10,$row['Mslidoor'], 0, 0, 'c', 0); 
    $pdf->SetXY(83.5,141); // posicion 
    $pdf->cell(50,10,$row['Mclean'], 0, 0, 'c', 0); 
    $pdf->SetXY(118.5,114); // posicion 
    $pdf->cell(50,10,$row['Mcarpet'], 0, 0, 'c', 0); 
    $pdf->SetXY(123.3,117.5); // posicion 
    $pdf->cell(50,10,$row['Mcleanc'], 0, 0, 'c', 0); 
    $pdf->SetXY(134.5,117.5); // posicion 
    $pdf->cell(50,10,$row['Mvaccum'], 0, 0, 'c', 0); 
    $pdf->SetXY(125,122); // posicion 
    $pdf->cell(50,10,$row['MFrooms'], 0, 0, 'c', 0); 
    $pdf->SetXY(125,126.3); // posicion 
    $pdf->cell(50,10,$row['MFclosets'], 0, 0, 'c', 0); 
    $pdf->SetXY(125,131); // posicion 
    $pdf->cell(50,10,$row['MFhall'], 0, 0, 'c', 0); 
    $pdf->SetXY(125,135.5); // posicion 
    $pdf->cell(50,10,$row['MFstair'], 0, 0, 'c', 0); 
    $pdf->SetXY(151,114); // posicion 
    $pdf->cell(50,10,$row['MFwood'], 0, 0, 'c', 0); 
    $pdf->SetXY(173,114); // posicion 
    $pdf->cell(50,10,$row['MFwoodt'], 0, 0, 'c', 0); 
    $pdf->SetXY(151,118); // posicion 
    $pdf->cell(50,10,$row['MFtile'], 0, 0, 'c', 0); 
    $pdf->SetXY(170,118); // posicion 
    $pdf->cell(50,10,$row['MFtilet'], 0, 0, 'c', 0); 
    $pdf->SetXY(151,122.5); // posicion 
    $pdf->cell(50,10,$row['MFvtc'], 0, 0, 'c', 0); 
    $pdf->SetXY(163,122.5); // posicion 
    $pdf->cell(50,10,$row['MFvtct'], 0, 0, 'c', 0); 
    $pdf->SetXY(110,146.5); // posicion 
    $pdf->multicell(91,3.5,$row['Mnotes'], 0, 'l', 0); 


// Basement Level

    $pdf->SetXY(36,155.5); // posicion 
    $pdf->cell(50,10,$row['Bn'], 0, 0, 'c', 0); 
    $pdf->SetXY(47.5,155.5); // posicion 
    $pdf->cell(50,10,$row['Bunfinish'], 0, 0, 'c', 0); 
    $pdf->SetXY(175,155); // posicion 
    $pdf->cell(50,10,$row['Bhrs'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,161); // posicion 
    $pdf->cell(50,10,$row['Brooms'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,165.5); // posicion 
    $pdf->cell(50,10,$row['Bclosets'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,169.5); // posicion 
    $pdf->cell(50,10,$row['Bbroms'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,174); // posicion 
    $pdf->cell(50,10,$row['Bfans'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,178.5); // posicion 
    $pdf->cell(50,10,$row['Bwinds'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,183); // posicion 
    $pdf->cell(50,10,$row['Bblinds'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,187); // posicion 
    $pdf->cell(50,10,$row['Bofrooms'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,192); // posicion 
    $pdf->cell(50,10,$row['Bfamrooms'], 0, 0, 'c', 0);
    $pdf->SetXY(46,161); // posicion 
    $pdf->cell(50,10,$row['Bledges'], 0, 0, 'c', 0);
    $pdf->SetXY(46,166); // posicion 
    $pdf->cell(50,10,$row['Bfire'], 0, 0, 'c', 0); 
    $pdf->SetXY(62,169.5); // posicion 
    $pdf->cell(50,10,$row['Bgas'], 0, 0, 'c', 0); 
    $pdf->SetXY(52,169.5); // posicion 
    $pdf->cell(50,10,$row['Bwood'], 0, 0, 'c', 0); 
    $pdf->SetXY(46,173); // posicion 
    $pdf->cell(50,10,$row['Blaundry'], 0, 0, 'c', 0); 
    $pdf->SetXY(52,177); // posicion 
    $pdf->cell(50,10,$row['Bwasher'], 0, 0, 'c', 0); 
    $pdf->SetXY(63,177); // posicion 
    $pdf->cell(50,10,$row['Bdryer'], 0, 0, 'c', 0);
    $pdf->SetXY(46,181); // posicion 
    $pdf->cell(50,10,$row['Bslidoor'], 0, 0, 'c', 0); 
    $pdf->SetXY(53,184.5); // posicion 
    $pdf->cell(50,10,$row['Bclean'], 0, 0, 'c', 0); 
    $pdf->SetXY(72,160); // posicion 
    $pdf->cell(50,10,$row['Bcarpet'], 0, 0, 'c', 0); 
    $pdf->SetXY(77,163); // posicion 
    $pdf->cell(50,10,$row['Bcleanc'], 0, 0, 'c', 0); 
    $pdf->SetXY(88.5,163); // posicion 
    $pdf->cell(50,10,$row['Bvaccum'], 0, 0, 'c', 0); 
    $pdf->SetXY(78.5,168); // posicion 
    $pdf->cell(50,10,$row['BFrooms'], 0, 0, 'c', 0);
    $pdf->SetXY(78.5,172.5); // posicion
    $pdf->cell(50,10,$row['BFclosets'], 0, 0, 'c', 0); 
    $pdf->SetXY(78.5,176.5); // posicion 
    $pdf->cell(50,10,$row['BFhall'], 0, 0, 'c', 0);
    $pdf->SetXY(78.5,181); // posicion 
    $pdf->cell(50,10,$row['BFstair'], 0, 0, 'c', 0); 
    $pdf->SetXY(112,160); // posicion 
    $pdf->cell(50,10,$row['BFwood'], 0, 0, 'c', 0); 
    $pdf->SetXY(134,160.2); // posicion 
    $pdf->cell(50,10,$row['BFwoodt'], 0, 0, 'c', 0); 
    $pdf->SetXY(112.3,164); // posicion 
    $pdf->cell(50,10,$row['BFtile'], 0, 0, 'c', 0); 
    $pdf->SetXY(131,164.5); // posicion 
    $pdf->cell(50,10,$row['BFtilet'], 0, 0, 'c', 0); 
    $pdf->SetXY(112.3,168.5); // posicion 
    $pdf->cell(50,10,$row['BFvtc'], 0, 0, 'c', 0);
    $pdf->SetXY(125,168.5); // posicion 
    $pdf->cell(50,10,$row['BFvtct'], 0, 0, 'c', 0); 
    $pdf->SetXY(44.5,195); // posicion 
    $pdf->multicell(61,3.5,$row['Bnotes'], 0, 'l', 0); 

    
// pagos
    $pdf->SetXY(12,208.5); // posicion 
    $pdf->cell(50,10,$row['Orooms'], 0, 0, 'c', 0); 
    $pdf->SetXY(12,212.5); // posicion 
    $pdf->cell(50,10,$row['Obathms'], 0, 0, 'c', 0);

    $pdf->SetXY(109.5,181.5); // posicion 
    $pdf->cell(50,10,$row['Garage'], 0, 0, 'c', 0); 
    $pdf->SetXY(117,184.8); // posicion 
    $pdf->cell(50,10,$row['Gamain'], 0, 0, 'c', 0); 
    $pdf->SetXY(130.2,184.8); // posicion 
    $pdf->cell(50,10,$row['Gabasem'], 0, 0, 'c', 0); 

    $pdf->SetXY(154,181.5); // posicion 
    $pdf->cell(50,10,$row['Mechroom'], 0, 0, 'c', 0); 
    $pdf->SetXY(159.5,185); // posicion 
    $pdf->cell(50,10,$row['mechU'], 0, 0, 'c', 0);
    $pdf->SetXY(175.5,185); // posicion 
    $pdf->cell(50,10,$row['mechM'], 0, 0, 'c', 0); 
    $pdf->SetXY(188.5,185); // posicion 
    $pdf->cell(50,10,$row['mechB'], 0, 0, 'c', 0);  


    $pdf->SetXY(134.5,198.2); // posicion 
    $pdf->cell(50,10,$row['WaterY'], 0, 0, 'c', 0); 
    $pdf->SetXY(142.5,198.2); // posicion 
    $pdf->cell(50,10,$row['WaterN'], 0, 0, 'c', 0); 
    $pdf->SetXY(185.5,198.2); // posicion 
    $pdf->cell(50,10,$row['EnergyY'], 0, 0, 'c', 0); 
    $pdf->SetXY(193.5,198.2); // posicion 
    $pdf->cell(50,10,$row['EnergyN'], 0, 0, 'c', 0); 


    $pdf->SetXY(67,204); // posicion 
    $pdf->cell(50,10,$row['Cleaprice'], 0, 0, 'c', 0); 
    $pdf->SetXY(94,204); // posicion 
    $pdf->cell(50,10,$row['Cleadisc'], 0, 0, 'c', 0); 
    $pdf->SetXY(115,204); // posicion 
    $pdf->cell(50,10,$row['Cleatotal'], 0, 0, 'c', 0); 

    $pdf->SetXY(67,208); // posicion 
    $pdf->cell(50,10,$row['Carpprice'], 0, 0, 'c', 0); 
    $pdf->SetXY(94,208); // posicion 
    $pdf->cell(50,10,$row['Carpdisc'], 0, 0, 'c', 0); 
    $pdf->SetXY(115,208); // posicion 
    $pdf->cell(50,10,$row['Carptotal'], 0, 0, 'c', 0);

    $pdf->SetXY(67,211.5); // posicion 
    $pdf->cell(50,10,$row['Winprice'], 0, 0, 'c', 0); 
    $pdf->SetXY(94,211.5); // posicion 
    $pdf->cell(50,10,$row['Windisc'], 0, 0, 'c', 0); 
    $pdf->SetXY(115,211.5); // posicion 
    $pdf->cell(50,10,$row['Wintotal'], 0, 0, 'c', 0); 

    $pdf->SetXY(67,215.5); // posicion 
    $pdf->cell(50,10,$row['Haulprice'], 0, 0, 'c', 0); 
    $pdf->SetXY(94,215.5); // posicion 
    $pdf->cell(50,10,$row['Hauldisc'], 0, 0, 'c', 0); 
    $pdf->SetXY(115,215.5); // posicion 
    $pdf->cell(50,10,$row['Haultotal'], 0, 0, 'c', 0); 

    $pdf->SetXY(67,220); // se cambio a other wash
    $pdf->cell(50,10,$row['Washprice'], 0, 0, 'c', 0); 
    $pdf->SetXY(94,220); // posicion 
    $pdf->cell(50,10,$row['Washdisc'], 0, 0, 'c', 0); 
    $pdf->SetXY(115,220); // posicion 
    $pdf->cell(50,10,$row['Washtotal'], 0, 0, 'c', 0);
    $pdf->SetXY(38,220); // posicion 
    $pdf->cell(50,10,$row['otherspec'], 0, 0, 'c', 0);

    $pdf->SetXY(158,207); // posicion 
    $pdf->cell(50,10,$row['Travfree'], 0, 0, 'c', 0); 
    $pdf->SetXY(158,211.2); // posicion 
    $pdf->cell(50,10,$row['Tranfree'], 0, 0, 'c', 0); 
    $pdf->SetXY(185,210); // posicion 
    $pdf->cell(50,10,$row['total'], 0, 0, 'c', 0); 


    $pdf->SetXY(154,223); // posicion 
    $pdf->cell(50,10,$row['Careaprice'], 0, 0, 'c', 0); 
    $pdf->SetXY(165.5,223); // posicion 
    $pdf->cell(50,10,$row['Careapricex'], 0, 0, 'c', 0); 
    $pdf->SetXY(178,223); // posicion 
    $pdf->cell(50,10,$row['Careatotal'], 0, 0, 'c', 0); 


    $pdf->SetXY(141.5,235.5); // posicion 
    $pdf->cell(50,10,$row['Wfront'], 0, 0, 'c', 0); 
    $pdf->SetXY(155,235.5); // posicion 
    $pdf->cell(50,10,$row['Wfrontx2'], 0, 0, 'c', 0); 
    $pdf->SetXY(167.5,235.5); // posicion 
    $pdf->cell(50,10,$row['Wfrontx'], 0, 0, 'c', 0); 
    $pdf->SetXY(180.5,235.5); // posicion 
    $pdf->cell(50,10,$row['Wfronttotal'], 0, 0, 'c', 0);
    
    
    $pdf->SetXY(141.5,241); // posicion 
    $pdf->cell(50,10,$row['Wright'], 0, 0, 'c', 0); 
    $pdf->SetXY(155.5,241); // posicion 
    $pdf->cell(50,10,$row['Wrightx2'], 0, 0, 'c', 0); 
    $pdf->SetXY(167.5,241); // posicion 
    $pdf->cell(50,10,$row['Wrightx'], 0, 0, 'c', 0); 
    $pdf->SetXY(180.5,241); // posicion 
    $pdf->cell(50,10,$row['Wrighttotal'], 0, 0, 'c', 0); 


    $pdf->SetXY(141.5,245.7); // posicion 
    $pdf->cell(50,10,$row['Wback'], 0, 0, 'c', 0); 
    $pdf->SetXY(155,245.7); // posicion 
    $pdf->cell(50,10,$row['Wbackx2'], 0, 0, 'c', 0); 
    $pdf->SetXY(167.5,245.7); // posicion 
    $pdf->cell(50,10,$row['Wbackx'], 0, 0, 'c', 0); 
    $pdf->SetXY(180.5,245.7); // posicion 
    $pdf->cell(50,10,$row['Wbacktotal'], 0, 0, 'c', 0); 


    $pdf->SetXY(141.5,250.8); // posicion 
    $pdf->cell(50,10,$row['Wleft'], 0, 0, 'c', 0); 
    $pdf->SetXY(155,250.8); // posicion 
    $pdf->cell(50,10,$row['Wleftx2'], 0, 0, 'c', 0); 
    $pdf->SetXY(167.5,250.8); // posicion 
    $pdf->cell(50,10,$row['Wleftx'], 0, 0, 'c', 0); 
    $pdf->SetXY(180.5,250.8); // posicion 
    $pdf->cell(50,10,$row['Wlefttotal'], 0, 0, 'c', 0); 


    $pdf->SetXY(180.5,256); // posicion 
    $pdf->cell(50,10,$row['windowstotal'], 0, 0, 'c', 0); 

    
// office use
    $pdf->SetXY(18,231.5); // posicion 
    $pdf->cell(50,10,$row['Scale'], 0, 0, 'c', 0); 
    $pdf->SetXY(63,232); // posicion 
    $pdf->cell(50,10,$row['Ltech'], 0, 0, 'c', 0); 
    $pdf->SetXY(41,232); // posicion 
    $pdf->cell(50,10,$row['Hrslabor'], 0, 0, 'c', 0); 
    $pdf->SetXY(87,232); // posicion 
    $pdf->cell(50,10,$row['tech'], 0, 0, 'c', 0); 


    $pdf->SetXY(40.5,238); // posicion 
    $pdf->cell(50,10,$row['crminhouse'], 0, 0, 'c', 0); 
    $pdf->SetXY(71.3,237.5); // posicion 
    $pdf->cell(50,10,$row['subcont'], 0, 0, 'c', 0); 
    $pdf->SetXY(74.5,237); // posicion 
    $pdf->cell(50,10,$row['subname'], 0, 0, 'c', 0); 
    $pdf->SetXY(107,236.9); // posicion 
    $pdf->cell(50,10,$row['paytech'], 0, 0, 'c', 0); 
    $pdf->SetXY(109.5 ,256); // posicion 
    $pdf->cell(50,10,$row['CRMrep'], 0, 0, 'c', 0); 
    $pdf->SetXY(113,193); // posicion 
    $pdf->multicell(89,3.5,$row['Extranotes'], 0, 'l', 0); 

    $pdf->SetXY(113,193);
    $image = $row['imagen'];
    $pdf->Image('https://crmcleaning.com/cleansis/functions/'.$image, 50, 252, 21);
   // $pdf->Image($imagen, 50, 252, 21); 
   // $pdf->Image('fpdf/img/Master.jpg',0,0,210);
   
}



$pdf->Output();



?>