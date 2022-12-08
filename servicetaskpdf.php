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
$pdf->Image('fpdf/img/Mastertask.jpg',0,0,210);
$pdf->SetTextColor(  48, 71, 200  );



while($row = $resultado->fetch_assoc()){
    $pdf->SetXY(180,10); // posicion dateservice
    $pdf->cell(50,10,$row['id'], 0, 0, 'c', 0);
    $pdf->SetXY(165,15); // posicion dateservice
    $pdf->cell(50,10, date('m/d/Y g:i:s a ',strtotime($row['dateservice'])), 0, 0, 'c', 0);
    $pdf->SetXY(59,41); // posicion service
    $pdf->multicell(52,4,$row['service'], 0, 'l', 0);
    $pdf->SetXY(72,47); // posicion dateneed
    $pdf->cell(50,10, date('m/d/Y H:i:s a',strtotime($row['dateneed'])), 0, 0, 'c', 0);
    $pdf->SetXY(75,52); // posicion referral
    $pdf->cell(50,10,$row['referral'], 0, 0, 'c', 0);
    $pdf->SetXY(136,31.5); // posicion contact
    $pdf->cell(50,10,$row['contact'], 0, 0, 'c', 0);
    $pdf->SetXY(130,38); // posicion address
    $pdf->cell(50,10,$row['address'], 0, 0, 'c', 0);
    $pdf->SetXY(115,42.5); // posicion city
    $pdf->cell(50,10,$row['city'], 0, 0, 'c', 0);
    $pdf->SetXY(161,42.7); // posicion zip
    $pdf->cell(50,10,$row['zip'], 0, 0, 'c', 0);
    $pdf->SetXY(130,49.5); // posicion lockcode
    $pdf->cell(50,10,$row['lockcode'], 0, 0, 'c', 0);
   
 

// Upper Level
    $pdf->SetXY(40.5,61.8); // posicion Un
    $pdf->cell(50,10,$row['Un'], 0, 0, 'c', 0);
    $pdf->SetXY(175,62); // posicion Uhrs
    $pdf->cell(50,10,$row['Uhrs'], 0, 0, 'c', 0);
    $pdf->SetXY(16.5,68); // posicion Urooms
    $pdf->cell(50,10,$row['Urooms'], 0, 0, 'c', 0);
    $pdf->SetXY(16.5,72.5); // posicion Uclosets
    $pdf->cell(50,10,$row['Uclosets'], 0, 0, 'c', 0);
    $pdf->SetXY(16.5,76.8); // posicion Ubroms
    $pdf->cell(50,10,$row['Ubroms'], 0, 0, 'c', 0);
    $pdf->SetXY(16.5,81); // posicion Ufans
    $pdf->cell(50,10,$row['Ufans'], 0, 0, 'c', 0);
    $pdf->SetXY(16.5,85.5); // posicion Uwinds
    $pdf->cell(50,10,$row['Uwinds'], 0, 0, 'c', 0);
    $pdf->SetXY(16.5,90); // posicion Ublinds
    $pdf->cell(50,10,$row['Ublinds'], 0, 0, 'c', 0);
    $pdf->SetXY(16.5,94.4); // posicion Uofrooms
    $pdf->cell(50,10,$row['Uofrooms'], 0, 0, 'c', 0);
    $pdf->SetXY(16.5,98.5); // posicion Ufamrooms
    $pdf->cell(50,10,$row['Ufamrooms'], 0, 0, 'c', 0);


    $pdf->SetXY(47,67); // posicion Uledges
    $pdf->cell(50,10,$row['Uledges'], 0, 0, 'c', 0);
    $pdf->SetXY(47,72); // posicion Ufire
    $pdf->cell(50,10,$row['Ufire'], 0, 0, 'c', 0);
    $pdf->SetXY(62,75); // posicion Ugas
    $pdf->cell(50,10,$row['Ugas'], 0, 0, 'c', 0);
    $pdf->SetXY(52,75); // posicion Uwood
    $pdf->cell(50,10,$row['Uwood'], 0, 0, 'c', 0);
    $pdf->SetXY(47,81); // posicion Ulaundry
    $pdf->cell(50,10,$row['Ulaundry'], 0, 0, 'c', 0);
    $pdf->SetXY(52.2,84.5); // posicion Uwasher
    $pdf->cell(50,10,$row['Uwasher'], 0, 0, 'c', 0);
    $pdf->SetXY(63.5,84.7); // posicion Udryer
    $pdf->cell(50,10,$row['Udryer'], 0, 0, 'c', 0);
    $pdf->SetXY(47.5,89.5); // posicion Uslidoor 
    $pdf->cell(50,10,$row['Uslidoor'], 0, 0, 'c', 0);
    $pdf->SetXY(56,93.3); // posicion 
    $pdf->cell(50,10,$row['Uclean'], 0, 0, 'c', 0);
    $pdf->SetXY(83,68); // posicion 
    $pdf->cell(50,10,$row['Ucarpet'], 0, 0, 'c', 0);
    $pdf->SetXY(88.4,71.5); // posicion 
    $pdf->cell(50,10,$row['Ucleanc'], 0, 0, 'c', 0);
    $pdf->SetXY(100,71.5); // posicion 
    $pdf->cell(50,10,$row['Uvaccum'], 0, 0, 'c', 0);
    $pdf->SetXY(90,76.5); // posicion 
    $pdf->cell(50,10,$row['UFrooms'], 0, 0, 'c', 0);
    $pdf->SetXY(90,81); // posicion 
    $pdf->cell(50,10,$row['UFclosets'], 0, 0, 'c', 0);
    $pdf->SetXY(90,85.2); // posicion 
    $pdf->cell(50,10,$row['UFhall'], 0, 0, 'c', 0);
    $pdf->SetXY(90,89.5); // posicion 
    $pdf->cell(50,10,$row['UFstair'], 0, 0, 'c', 0);

    $pdf->SetXY(125.5,68); // posicion 
    $pdf->cell(50,10,$row['UFwood'], 0, 0, 'c', 0);
    $pdf->SetXY(147,68.3); // posicion 
    $pdf->cell(50,10,$row['UFwoodt'], 0, 0, 'c', 0);
    $pdf->SetXY(125.5,72.5); // posicion 
    $pdf->cell(50,10,$row['UFtile'], 0, 0, 'c', 0);
    $pdf->SetXY(144,72.5); // posicion 
    $pdf->cell(50,10,$row['UFtilet'], 0, 0, 'c', 0);
    $pdf->SetXY(125.5,76.6); // posicion 
    $pdf->cell(50,10,$row['UFvtc'], 0, 0, 'c', 0);
    $pdf->SetXY(138,76.6); // posicion 
    $pdf->cell(50,10,$row['UFvtct'], 0, 0, 'c', 0);
    $pdf->SetXY(124,89); // posicion 
    $pdf->multicell(76,4,$row['Unotes'], 0,'l', 0);

// Main Level
    $pdf->SetXY(174.5,113); // posicion 
    $pdf->cell(50,10,$row['Mhrs'], 0, 0, 'c', 0);
    $pdf->SetXY(16.5,118.5); // posicion 
    $pdf->cell(50,10,$row['Mrooms'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,123); // posicion 
    $pdf->cell(50,10,$row['Mclosets'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,127.5); // posicion 
    $pdf->cell(50,10,$row['Mbroms'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,132); // posicion 
    $pdf->cell(50,10,$row['Mfans'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,136); // posicion 
    $pdf->cell(50,10,$row['Mwinds'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,140.5); // posicion 
    $pdf->cell(50,10,$row['Mblinds'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,145); // posicion 
    $pdf->cell(50,10,$row['Mofrooms'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,149); // posicion 
    $pdf->cell(50,10,$row['Mfamrooms'], 0, 0, 'c', 0);
    $pdf->SetXY(46.5,117.7); // posicion 
    $pdf->cell(50,10,$row['Mledges'], 0, 0, 'c', 0); 
    $pdf->SetXY(78.2,118.5); // posicion 
    $pdf->cell(50,10,$row['Mkitchen'], 0, 0, 'c', 0); 
    $pdf->SetXY(78.2,140); // posicion 
    $pdf->cell(50,10,$row['Mtkitchg'], 0, 0, 'c', 0); 
    $pdf->SetXY(46.5,122); // posicion 
    $pdf->cell(50,10,$row['Mfire'], 0, 0, 'c', 0); 
    $pdf->SetXY(62,126); // posicion 
    $pdf->cell(50,10,$row['Mgas'], 0, 0, 'c', 0); 
    $pdf->SetXY(52,126); // posicion 
    $pdf->cell(50,10,$row['Mwood'], 0, 0, 'c', 0); 
    $pdf->SetXY(46.5,130); // posicion 
    $pdf->cell(50,10,$row['Mlaundry'], 0, 0, 'c', 0); 
    $pdf->SetXY(53,135); // posicion 
    $pdf->cell(50,10,$row['Mwasher'], 0, 0, 'c', 0); 
    $pdf->SetXY(64.2,135); // posicion 
    $pdf->cell(50,10,$row['Mdryer'], 0, 0, 'c', 0); 
    $pdf->SetXY(46.5,139); // posicion 
    $pdf->cell(50,10,$row['Mlivroom'], 0, 0, 'c', 0); 
    $pdf->SetXY(46.5,144); // posicion 
    $pdf->cell(50,10,$row['Mdinroom'], 0, 0, 'c', 0); 
    $pdf->SetXY(78.4,123); // posicion 
    $pdf->cell(50,10,$row['Mstove'], 0, 0, 'c', 0);
    $pdf->SetXY(93,123); // posicion 
    $pdf->cell(50,10,$row['MSin'], 0, 0, 'c', 0); 
    $pdf->SetXY(99.4,123); // posicion 
    $pdf->cell(50,10,$row['MSout'], 0, 0, 'c', 0); 
    $pdf->SetXY(106,123); // posicion 
    $pdf->cell(50,10,$row['MSnum'], 0, 0, 'c', 0); 
    $pdf->SetXY(78.4,127); // posicion  
    $pdf->cell(50,10,$row['Mfridge'], 0, 0, 'c', 0); 
    $pdf->SetXY(93,127); // posicion 
    $pdf->cell(50,10,$row['MFin'], 0, 0, 'c', 0); 
    $pdf->SetXY(99.4,127); // posicion 
    $pdf->cell(50,10,$row['MFout'], 0, 0, 'c', 0); 
    $pdf->SetXY(106,126); // posicion 
    $pdf->cell(50,10,$row['MFnum'], 0, 0, 'c', 0); 
    $pdf->SetXY(78.4,131.5); // posicion 
    $pdf->cell(50,10,$row['Mdwasher'], 0, 0, 'c', 0); 
    $pdf->SetXY(100.5,131.5); // posicion 
    $pdf->cell(50,10,$row['MDin'], 0, 0, 'c', 0); 
    $pdf->SetXY(106.6,131.5); // posicion 
    $pdf->cell(50,10,$row['MDout'], 0, 0, 'c', 0); 
    $pdf->SetXY(113,131); // posicion 
    $pdf->cell(50,10,$row['MDnum'], 0, 0, 'c', 0); 
    $pdf->SetXY(78.4,136); // posicion 
    $pdf->cell(50,10,$row['Mmicro'], 0, 0, 'c', 0); 
    $pdf->SetXY(100.5,136); // posicion 
    $pdf->cell(50,10,$row['MMin'], 0, 0, 'c', 0); 
    $pdf->SetXY(106.6,136); // posicion 
    $pdf->cell(50,10,$row['MMout'], 0, 0, 'c', 0); 
    $pdf->SetXY(113,136); // posicion 
    $pdf->cell(50,10,$row['MMnum'], 0, 0, 'c', 0); 
    $pdf->SetXY(78.4,144); // posicion 
    $pdf->cell(50,10,$row['Mslidoor'], 0, 0, 'c', 0); 
    $pdf->SetXY(83.5,147); // posicion 
    $pdf->cell(50,10,$row['Mclean'], 0, 0, 'c', 0); 
    $pdf->SetXY(118.5,120); // posicion 
    $pdf->cell(50,10,$row['Mcarpet'], 0, 0, 'c', 0); 
    $pdf->SetXY(123.3,123.4); // posicion 
    $pdf->cell(50,10,$row['Mcleanc'], 0, 0, 'c', 0); 
    $pdf->SetXY(134.5,123.4); // posicion 
    $pdf->cell(50,10,$row['Mvaccum'], 0, 0, 'c', 0); 
    $pdf->SetXY(125,128); // posicion dd
    $pdf->cell(50,10,$row['MFrooms'], 0, 0, 'c', 0); 
    $pdf->SetXY(125,132.2); // posicion 
    $pdf->cell(50,10,$row['MFclosets'], 0, 0, 'c', 0); 
    $pdf->SetXY(125,137); // posicion 
    $pdf->cell(50,10,$row['MFhall'], 0, 0, 'c', 0); 
    $pdf->SetXY(125,141.4); // posicion 
    $pdf->cell(50,10,$row['MFstair'], 0, 0, 'c', 0); 
    $pdf->SetXY(151,120); // posicion 
    $pdf->cell(50,10,$row['MFwood'], 0, 0, 'c', 0); 
    $pdf->SetXY(173,120); // posicion 
    $pdf->cell(50,10,$row['MFwoodt'], 0, 0, 'c', 0); 
    $pdf->SetXY(151,124); // posicion 
    $pdf->cell(50,10,$row['MFtile'], 0, 0, 'c', 0); 
    $pdf->SetXY(170,124); // posicion 
    $pdf->cell(50,10,$row['MFtilet'], 0, 0, 'c', 0); 
    $pdf->SetXY(151,128.4); // posicion 
    $pdf->cell(50,10,$row['MFvtc'], 0, 0, 'c', 0); 
    $pdf->SetXY(163,128.4); // posicion 
    $pdf->cell(50,10,$row['MFvtct'], 0, 0, 'c', 0); 
    $pdf->SetXY(110,152.4); // posicion 
    $pdf->multicell(91,3.5,$row['Mnotes'], 0, 'l', 0); 


// Basement Level

    $pdf->SetXY(36,165.5); // posicion 
    $pdf->cell(50,10,$row['Bn'], 0, 0, 'c', 0); 
    $pdf->SetXY(47.5,165.5); // posicion 
    $pdf->cell(50,10,$row['Bunfinish'], 0, 0, 'c', 0); 

    $pdf->SetXY(175,165); // posicion 
    $pdf->cell(50,10,$row['Bhrs'], 0, 0, 'c', 0); 

    $pdf->SetXY(16.5,171); // posicion 
    $pdf->cell(50,10,$row['Brooms'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,175.5); // posicion 
    $pdf->cell(50,10,$row['Bclosets'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,179.5); // posicion 
    $pdf->cell(50,10,$row['Bbroms'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,184); // posicion 
    $pdf->cell(50,10,$row['Bfans'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,188.5); // posicion 
    $pdf->cell(50,10,$row['Bwinds'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,193); // posicion 
    $pdf->cell(50,10,$row['Bblinds'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,197); // posicion 
    $pdf->cell(50,10,$row['Bofrooms'], 0, 0, 'c', 0); 
    $pdf->SetXY(16.5,202); // posicion 
    $pdf->cell(50,10,$row['Bfamrooms'], 0, 0, 'c', 0);

    $pdf->SetXY(46,171); // posicion 
    $pdf->cell(50,10,$row['Bledges'], 0, 0, 'c', 0);
    $pdf->SetXY(46,176); // posicion 
    $pdf->cell(50,10,$row['Bfire'], 0, 0, 'c', 0); 
    $pdf->SetXY(62,179.5); // posicion 
    $pdf->cell(50,10,$row['Bgas'], 0, 0, 'c', 0); 
    $pdf->SetXY(52,179.5); // posicion 
    $pdf->cell(50,10,$row['Bwood'], 0, 0, 'c', 0); 
    $pdf->SetXY(46,183); // posicion 
    $pdf->cell(50,10,$row['Blaundry'], 0, 0, 'c', 0); 
    $pdf->SetXY(52,187); // posicion 
    $pdf->cell(50,10,$row['Bwasher'], 0, 0, 'c', 0); 
    $pdf->SetXY(63,187); // posicion 
    $pdf->cell(50,10,$row['Bdryer'], 0, 0, 'c', 0);
    $pdf->SetXY(46,191); // posicion 
    $pdf->cell(50,10,$row['Bslidoor'], 0, 0, 'c', 0); 
    $pdf->SetXY(53,194.5); // posicion 
    $pdf->cell(50,10,$row['Bclean'], 0, 0, 'c', 0); 
    $pdf->SetXY(72,170); // posicion 
    $pdf->cell(50,10,$row['Bcarpet'], 0, 0, 'c', 0); 
    $pdf->SetXY(77,173); // posicion 
    $pdf->cell(50,10,$row['Bcleanc'], 0, 0, 'c', 0); 
    $pdf->SetXY(88.5,173); // posicion 
    $pdf->cell(50,10,$row['Bvaccum'], 0, 0, 'c', 0); 
    $pdf->SetXY(78.5,178); // posicion 
    $pdf->cell(50,10,$row['BFrooms'], 0, 0, 'c', 0);
    $pdf->SetXY(78.5,182.5); // posicion
    $pdf->cell(50,10,$row['BFclosets'], 0, 0, 'c', 0); 
    $pdf->SetXY(78.5,186.5); // posicion 
    $pdf->cell(50,10,$row['BFhall'], 0, 0, 'c', 0);
    $pdf->SetXY(78.5,191); // posicion 
    $pdf->cell(50,10,$row['BFstair'], 0, 0, 'c', 0); 

    $pdf->SetXY(112,170); // posicion 
    $pdf->cell(50,10,$row['BFwood'], 0, 0, 'c', 0); 
    $pdf->SetXY(134,170.2); // posicion 
    $pdf->cell(50,10,$row['BFwoodt'], 0, 0, 'c', 0); 
    $pdf->SetXY(112.3,174); // posicion 
    $pdf->cell(50,10,$row['BFtile'], 0, 0, 'c', 0); 
    $pdf->SetXY(131,174.5); // posicion 
    $pdf->cell(50,10,$row['BFtilet'], 0, 0, 'c', 0); 
    $pdf->SetXY(112.3,178.2); // posicion 
    $pdf->cell(50,10,$row['BFvtc'], 0, 0, 'c', 0);
    $pdf->SetXY(124,178.2); // posicion 
    $pdf->cell(50,10,$row['BFvtct'], 0, 0, 'c', 0); 
    $pdf->SetXY(44.5,205); // posicion 
    $pdf->multicell(61,3.5,$row['Bnotes'], 0, 'l', 0); 

    

// pagos
$pdf->SetXY(15,250); // posicion 
$pdf->cell(50,10,$row['Orooms'], 0, 0, 'c', 0); 
$pdf->SetXY(36.5,250); // posicion 
$pdf->cell(50,10,$row['Obathms'], 0, 0, 'c', 0);

$pdf->SetXY(109.5,191.5); // posicion 
$pdf->cell(50,10,$row['Garage'], 0, 0, 'c', 0); 
$pdf->SetXY(117,195); // posicion 
$pdf->cell(50,10,$row['Gamain'], 0, 0, 'c', 0); 
$pdf->SetXY(130.2,195); // posicion 
$pdf->cell(50,10,$row['Gabasem'], 0, 0, 'c', 0); 

$pdf->SetXY(154,191.5); // posicion 
$pdf->cell(50,10,$row['Mechroom'], 0, 0, 'c', 0); 
$pdf->SetXY(159.5,195); // posicion 
$pdf->cell(50,10,$row['mechU'], 0, 0, 'c', 0);
$pdf->SetXY(175.5,195); // posicion 
$pdf->cell(50,10,$row['mechM'], 0, 0, 'c', 0); 
$pdf->SetXY(188.5,195); // posicion 
$pdf->cell(50,10,$row['mechB'], 0, 0, 'c', 0);  


$pdf->SetXY(134.5,208.2); // posicion 
$pdf->cell(50,10,$row['WaterY'], 0, 0, 'c', 0); 
$pdf->SetXY(142.5,208.2); // posicion 
$pdf->cell(50,10,$row['WaterN'], 0, 0, 'c', 0); 
$pdf->SetXY(185.5,208.2); // posicion 
$pdf->cell(50,10,$row['EnergyY'], 0, 0, 'c', 0); 
$pdf->SetXY(193.5,208.2); // posicion 
$pdf->cell(50,10,$row['EnergyN'], 0, 0, 'c', 0); 

    
// office use
    $pdf->SetXY(87,250); // posicion 
    $pdf->cell(50,10,$row['Scale'], 0, 0, 'c', 0); 
    $pdf->SetXY(132,250); // posicion 
    $pdf->cell(50,10,$row['Ltech'], 0, 0, 'c', 0); 
    $pdf->SetXY(110,250); // posicion 
    $pdf->cell(50,10,$row['Hrslabor'], 0, 0, 'c', 0); 
    $pdf->SetXY(157,250); // posicion 
    $pdf->cell(50,10,$row['tech'], 0, 0, 'c', 0); 


   
    $pdf->SetXY(109.5 ,230); // posicion 
    $pdf->cell(50,10,$row['CRMrep'], 0, 0, 'c', 0); 
    $pdf->SetXY(113,203); // posicion 
    $pdf->multicell(89,3.5,$row['Extranotes'], 0, 'l', 0); 

    $pdf->SetXY(113,153);
    $image = $row['imagen'];
    $pdf->Image('https://crmcleaning.com/cleansis/functions/'.$image, 50, 225.5, 21);
   // $pdf->Image($imagen, 50, 252, 21); 
   // $pdf->Image('fpdf/img/Master.jpg',0,0,210);
   
}



$pdf->Output();



?>