<?php
session_start();
ob_start();

require '../conexion.php';
if ($_POST["id"] == 'modificar'){

    $id = $mysqli->real_escape_string($_GET['id']); 
    $service = $mysqli->real_escape_string($_POST['service']); 
    $dateneed = $mysqli->real_escape_string($_POST['dateneed']); 
    $referral = $mysqli->real_escape_string($_POST['referral']);
    $company = $mysqli->real_escape_string($_POST['company']);
    $contact = $mysqli->real_escape_string($_POST['contact']);
    $phone = $mysqli->real_escape_string($_POST['phone']);
    $address = $mysqli->real_escape_string($_POST['address']);
    $city = $mysqli->real_escape_string($_POST['city']);
    $zip = $mysqli->real_escape_string($_POST['zip']);
    $lockcode = $mysqli->real_escape_string($_POST['lockcode']);
    $emailcont = $mysqli->real_escape_string($_POST['emailcont']);
    $POS = $mysqli->real_escape_string($_POST['POS']);
    $QA = $mysqli->real_escape_string($_POST['QA']);
    $WEP = $mysqli->real_escape_string($_POST['WEP']);
    
    // Upper Level
    $Un = $mysqli->real_escape_string($_POST['Un']);
    $Uhrs = $mysqli->real_escape_string($_POST['Uhrs']);
    $Urooms = $mysqli->real_escape_string($_POST['Urooms']);
    $Uclosets = $mysqli->real_escape_string($_POST['Uclosets']);
    $Ubroms = $mysqli->real_escape_string($_POST['Ubroms']);
    $Ufans = $mysqli->real_escape_string($_POST['Ufans']);
    $Uwinds = $mysqli->real_escape_string($_POST['Uwinds']);
    $Ublinds = $mysqli->real_escape_string($_POST['Ublinds']);
    $Uofrooms = $mysqli->real_escape_string($_POST['Uofrooms']);
    $Ufamrooms = $mysqli->real_escape_string($_POST['Ufamrooms']);
    $Uledges = $mysqli->real_escape_string($_POST['Uledges']);
    $Ufire = $mysqli->real_escape_string($_POST['Ufire']);
    $Ugas = $mysqli->real_escape_string($_POST['Ugas']);
    $Uwood = $mysqli->real_escape_string($_POST['Uwood']);
    $Ulaundry = $mysqli->real_escape_string($_POST['Ulaundry']);
    $Uwasher = $mysqli->real_escape_string($_POST['Uwasher']);
    $Udryer = $mysqli->real_escape_string($_POST['Udryer']);
    $Uslidoor = $mysqli->real_escape_string($_POST['Uslidoor']);
    $Uclean = $mysqli->real_escape_string($_POST['Uclean']);
    $Ucarpet = $mysqli->real_escape_string($_POST['Ucarpet']);
    $Ucleanc = $mysqli->real_escape_string($_POST['Ucleanc']);
    $Uvaccum = $mysqli->real_escape_string($_POST['Uvaccum']);
    $UFrooms = $mysqli->real_escape_string($_POST['UFrooms']);
    $UFclosets = $mysqli->real_escape_string($_POST['UFclosets']);
    $UFhall = $mysqli->real_escape_string($_POST['UFhall']);
    $UFstair = $mysqli->real_escape_string($_POST['UFstair']);
    $UFwood = $mysqli->real_escape_string($_POST['UFwood']);
    $UFwoodt = $mysqli->real_escape_string($_POST['UFwoodt']);
    $UFtile = $mysqli->real_escape_string($_POST['UFtile']);
    $UFtilet = $mysqli->real_escape_string($_POST['UFtilet']);
    $UFvtc = $mysqli->real_escape_string($_POST['UFvtc']);
    $UFvtct = $mysqli->real_escape_string($_POST['UFvtct']);
    $Unotes = $mysqli->real_escape_string($_POST['Unotes']);
    
    // Main Level
    $Mhrs = $mysqli->real_escape_string($_POST['Mhrs']);
    $Mrooms = $mysqli->real_escape_string($_POST['Mrooms']);
    $Mclosets = $mysqli->real_escape_string($_POST['Mclosets']);
    $Mbroms = $mysqli->real_escape_string($_POST['Mbroms']);
    $Mfans = $mysqli->real_escape_string($_POST['Mfans']);
    $Mwinds = $mysqli->real_escape_string($_POST['Mwinds']);
    $Mblinds = $mysqli->real_escape_string($_POST['Mblinds']);
    $Mofrooms = $mysqli->real_escape_string($_POST['Mofrooms']);
    $Mfamrooms = $mysqli->real_escape_string($_POST['Mfamrooms']);
    $Mledges = $mysqli->real_escape_string($_POST['Mledges']);
    $Mkitchen = $mysqli->real_escape_string($_POST['Mkitchen']);
    $Mtkitchg = $mysqli->real_escape_string($_POST['Mtkitchg']);
    $Mfire = $mysqli->real_escape_string($_POST['Mfire']);
    $Mgas = $mysqli->real_escape_string($_POST['Mgas']);
    $Mwood = $mysqli->real_escape_string($_POST['Mwood']);
    $Mlaundry = $mysqli->real_escape_string($_POST['Mlaundry']);
    $Mwasher = $mysqli->real_escape_string($_POST['Mwasher']);
    $Mdryer = $mysqli->real_escape_string($_POST['Mdryer']);
    $Mlivroom = $mysqli->real_escape_string($_POST['Mlivroom']);
    $Mdinroom = $mysqli->real_escape_string($_POST['Mdinroom']);
    $Mstove = $mysqli->real_escape_string($_POST['Mstove']);
    $MSin = $mysqli->real_escape_string($_POST['MSin']);
    $MSout = $mysqli->real_escape_string($_POST['MSout']);
    $MSnum = $mysqli->real_escape_string($_POST['MSnum']);
    $Mfridge = $mysqli->real_escape_string($_POST['Mfridge']);
    $MFin = $mysqli->real_escape_string($_POST['MFin']);
    $MFout = $mysqli->real_escape_string($_POST['MFout']);
    $MFnum = $mysqli->real_escape_string($_POST['MFnum']);
    $Mdwasher = $mysqli->real_escape_string($_POST['Mdwasher']);
    $MDin = $mysqli->real_escape_string($_POST['MDin']);
    $MDout = $mysqli->real_escape_string($_POST['MDout']);
    $MDnum = $mysqli->real_escape_string($_POST['MDnum']);
    $Mmicro = $mysqli->real_escape_string($_POST['Mmicro']);
    $MMin = $mysqli->real_escape_string($_POST['MMin']);
    $MMout = $mysqli->real_escape_string($_POST['MMout']);
    $MMnum = $mysqli->real_escape_string($_POST['MMnum']);
    $Mslidoor = $mysqli->real_escape_string($_POST['Mslidoor']);
    $Mclean = $mysqli->real_escape_string($_POST['Mclean']);
    $Mcarpet = $mysqli->real_escape_string($_POST['Mcarpet']);
    $Mcleanc = $mysqli->real_escape_string($_POST['Mcleanc']);
    $Mvaccum = $mysqli->real_escape_string($_POST['Mvaccum']);
    $MFrooms = $mysqli->real_escape_string($_POST['MFrooms']);
    $MFclosets = $mysqli->real_escape_string($_POST['MFclosets']);
    $MFhall = $mysqli->real_escape_string($_POST['MFhall']);
    $MFstair = $mysqli->real_escape_string($_POST['MFstair']);
    $MFwood = $mysqli->real_escape_string($_POST['MFwood']);
    $MFwoodt = $mysqli->real_escape_string($_POST['MFwoodt']);
    $MFtile = $mysqli->real_escape_string($_POST['MFtile']);
    $MFtilet = $mysqli->real_escape_string($_POST['MFtilet']);
    $MFvtc = $mysqli->real_escape_string($_POST['MFvtc']);
    $MFvtct = $mysqli->real_escape_string($_POST['MFvtct']);
    $Mnotes = $mysqli->real_escape_string($_POST['Mnotes']);
    
    // Basement
    $Bn = $mysqli->real_escape_string($_POST['Bn']);
    $Bunfinish = $mysqli->real_escape_string($_POST['Bunfinish']);
    $Bhrs = $mysqli->real_escape_string($_POST['Bhrs']);
    $Brooms = $mysqli->real_escape_string($_POST['Brooms']);
    $Bclosets = $mysqli->real_escape_string($_POST['Bclosets']);
    $Bbroms = $mysqli->real_escape_string($_POST['Bbroms']);
    $Bfans = $mysqli->real_escape_string($_POST['Bfans']);
    $Bwinds = $mysqli->real_escape_string($_POST['Bwinds']);
    $Bblinds = $mysqli->real_escape_string($_POST['Bblinds']);
    $Bofrooms = $mysqli->real_escape_string($_POST['Bofrooms']);
    $Bfamrooms = $mysqli->real_escape_string($_POST['Bfamrooms']);
    $Bledges = $mysqli->real_escape_string($_POST['Bledges']);
    $Bfire = $mysqli->real_escape_string($_POST['Bfire']);
    $Bgas = $mysqli->real_escape_string($_POST['Bgas']);
    $Bwood = $mysqli->real_escape_string($_POST['Bwood']);
    $Blaundry = $mysqli->real_escape_string($_POST['Blaundry']);
    $Bwasher = $mysqli->real_escape_string($_POST['Bwasher']);
    $Bdryer = $mysqli->real_escape_string($_POST['Bdryer']);
    $Bslidoor = $mysqli->real_escape_string($_POST['Bslidoor']);
    $Bclean = $mysqli->real_escape_string($_POST['Bclean']);
    $Bcarpet = $mysqli->real_escape_string($_POST['Bcarpet']);
    $Bcleanc = $mysqli->real_escape_string($_POST['Bcleanc']);
    $Bvaccum = $mysqli->real_escape_string($_POST['Bvaccum']);
    $BFrooms = $mysqli->real_escape_string($_POST['BFrooms']);
    $BFclosets = $mysqli->real_escape_string($_POST['BFclosets']);
    $BFhall = $mysqli->real_escape_string($_POST['BFhall']);
    $BFstair = $mysqli->real_escape_string($_POST['BFstair']);
    $BFwood = $mysqli->real_escape_string($_POST['BFwood']);
    $BFwoodt = $mysqli->real_escape_string($_POST['BFwoodt']);
    $BFtile = $mysqli->real_escape_string($_POST['BFtile']);
    $BFtilet = $mysqli->real_escape_string($_POST['BFtilet']);
    $BFvtc = $mysqli->real_escape_string($_POST['BFvtc']);
    $BFvtct = $mysqli->real_escape_string($_POST['BFvtct']);
    $Bnotes = $mysqli->real_escape_string($_POST['Bnotes']);
    
    
    // Datos pago
    $Orooms = $mysqli->real_escape_string($_POST['Orooms']);
    $Obathms = $mysqli->real_escape_string($_POST['Obathms']);
    $Garage = $mysqli->real_escape_string($_POST['Garage']);
    $Gamain = $mysqli->real_escape_string($_POST['Gamain']);
    $Gabasem = $mysqli->real_escape_string($_POST['Gabasem']);
    $Mechroom = $mysqli->real_escape_string($_POST['Mechroom']);
    $mechU = $mysqli->real_escape_string($_POST['mechU']);
    $mechM = $mysqli->real_escape_string($_POST['mechM']);
    $mechB = $mysqli->real_escape_string($_POST['mechB']);
    $WaterY = $mysqli->real_escape_string($_POST['WaterY']);
    $WaterN = $mysqli->real_escape_string($_POST['WaterN']);
    $EnergyY = $mysqli->real_escape_string($_POST['EnergyY']);
    $EnergyN = $mysqli->real_escape_string($_POST['EnergyN']);
    $Cleaprice = $mysqli->real_escape_string($_POST['Cleaprice']);
    $Cleadisc = $mysqli->real_escape_string($_POST['Cleadisc']);
    $Cleatotal = $mysqli->real_escape_string($_POST['Cleatotal']);
    $Carpprice = $mysqli->real_escape_string($_POST['Carpprice']);
    $Carpdisc = $mysqli->real_escape_string($_POST['Carpdisc']);
    $Carptotal = $mysqli->real_escape_string($_POST['Carptotal']);
    $Winprice = $mysqli->real_escape_string($_POST['Winprice']);
    $Windisc = $mysqli->real_escape_string($_POST['Windisc']);
    $Wintotal = $mysqli->real_escape_string($_POST['Wintotal']);
    $Haulprice = $mysqli->real_escape_string($_POST['Haulprice']);
    $Hauldisc = $mysqli->real_escape_string($_POST['Hauldisc']);
    $Haultotal = $mysqli->real_escape_string($_POST['Haultotal']);
    $Washprice = $mysqli->real_escape_string($_POST['Washprice']); //whash se cambio a other 
    $Washdisc = $mysqli->real_escape_string($_POST['Washdisc']);
    $Washtotal = $mysqli->real_escape_string($_POST['Washtotal']);
    $otherspec = $mysqli->real_escape_string($_POST['otherspec']);
    $Travfree = $mysqli->real_escape_string($_POST['Travfree']);
    $Tranfree = $mysqli->real_escape_string($_POST['Tranfree']);
    $total = $mysqli->real_escape_string($_POST['total']);
    $Careaprice = $mysqli->real_escape_string($_POST['Careaprice']);
    $Careapricex = $mysqli->real_escape_string($_POST['Careapricex']);
    $Careatotal = $mysqli->real_escape_string($_POST['Careatotal']);
    $Wfront = $mysqli->real_escape_string($_POST['Wfront']);
    $Wfrontx2 = $mysqli->real_escape_string($_POST['Wfrontx2']);
    $Wfrontx = $mysqli->real_escape_string($_POST['Wfrontx']);
    $Wfronttotal = $mysqli->real_escape_string($_POST['Wfronttotal']);
    $Wright = $mysqli->real_escape_string($_POST['Wright']);
    $Wrightx2 = $mysqli->real_escape_string($_POST['Wrightx2']);
    $Wrightx = $mysqli->real_escape_string($_POST['Wrightx']);
    $Wrighttotal = $mysqli->real_escape_string($_POST['Wrighttotal']);
    $Wback = $mysqli->real_escape_string($_POST['Wback']);
    $Wbackx2 = $mysqli->real_escape_string($_POST['Wbackx2']);
    $Wbackx = $mysqli->real_escape_string($_POST['Wbackx']);
    $Wbacktotal = $mysqli->real_escape_string($_POST['Wbacktotal']);
    $Wleft = $mysqli->real_escape_string($_POST['Wleft']);
    $Wleftx2 = $mysqli->real_escape_string($_POST['Wleftx2']);
    $Wleftx = $mysqli->real_escape_string($_POST['Wleftx']);
    $Wlefttotal = $mysqli->real_escape_string($_POST['Wlefttotal']);
    $windowstotal = $mysqli->real_escape_string($_POST['windowstotal']);
    //office use
    $Scale = $mysqli->real_escape_string($_POST['Scale']);
    $Ltech = $mysqli->real_escape_string($_POST['Ltech']);
    $Hrslabor = $mysqli->real_escape_string($_POST['Hrslabor']);
    $tech = $mysqli->real_escape_string($_POST['tech']);
    $crminhouse = $mysqli->real_escape_string($_POST['crminhouse']);
    $subcont = $mysqli->real_escape_string($_POST['subcont']);
    $subname = $mysqli->real_escape_string($_POST['subname']);
    $paytech = $mysqli->real_escape_string($_POST['paytech']);
    $CRMrep = $mysqli->real_escape_string($_POST['CRMrep']);
    $Extranotes = $mysqli->real_escape_string($_POST['Extranotes']);



$sql = "UPDATE services SET  dateservice ='$dateservice', service ='$service' ,dateneed ='$dateneed', referral ='$referral',company ='$company',contact ='$contact',phone ='$phone',address ='$address',city ='$city',zip ='$zip',lockcode ='$lockcode',emailcont ='$emailcont',POS ='$POS',QA ='$QA',WEP ='$WEP',
Un ='$Un',Uhrs ='$Uhrs',Urooms ='$Urooms',Uclosets ='$Uclosets',Ubroms ='$Ubroms',Ufans ='$Ufans',Uwinds ='$Uwinds',Ublinds ='$Ublinds',Uofrooms ='$Uofrooms',Ufamrooms ='$Ufamrooms',Uledges ='$Uledges',Ufire ='$Ufire',Ugas ='$Ugas',Uwood ='$Uwood',Ulaundry ='$Ulaundry',Uwasher ='$Uwasher',Udryer ='$Udryer',Uslidoor ='$Uslidoor',Uclean ='$Uclean',Ucarpet ='$Ucarpet',Ucleanc ='$Ucleanc',Uvaccum ='$Uvaccum',UFrooms ='$UFrooms',UFclosets ='$UFclosets',UFhall ='$UFhall',UFstair ='$UFstair',UFwood ='$UFwood',UFwoodt ='$UFwoodt',UFtile ='$UFtile',UFtilet ='$UFtilet',UFvtc ='$UFvtc',UFvtct ='$UFvtct',Unotes ='$Unotes',
Mhrs ='$Mhrs',Mrooms ='$Mrooms',Mclosets ='$Mclosets',Mbroms ='$Mbroms',Mfans ='$Mfans',Mwinds ='$Mwinds',Mblinds ='$Mblinds',Mofrooms ='$Mofrooms',Mfamrooms ='$Mfamrooms',Mledges ='$Mledges',Mkitchen ='$Mkitchen',Mtkitchg ='$Mtkitchg',Mfire ='$Mfire',Mgas ='$Mgas',Mwood ='$Mwood',Mlaundry ='$Mlaundry',Mwasher ='$Mwasher',Mdryer ='$Mdryer',Mlivroom ='$Mlivroom',Mdinroom ='$Mdinroom',Mstove ='$Mstove',MSin ='$MSin',MSout ='$MSout',MSnum ='$MSnum',Mfridge ='$Mfridge',MFin ='$MFin',MFout ='$MFout',MFnum ='$MFnum',Mdwasher ='$Mdwasher',MDin ='$MDin',MDout ='$MDout',MDnum ='$MDnum',Mmicro ='$Mmicro',MMin ='$MMin',MMout ='$MMout',MMnum ='$MMnum',Mslidoor ='$Mslidoor',Mclean ='$Mclean',Mcarpet ='$Mcarpet',Mcleanc ='$Mcleanc',Mvaccum ='$Mvaccum',MFrooms ='$MFrooms',MFclosets ='$MFclosets',MFhall ='$MFhall',MFstair ='$MFstair',MFwood ='$MFwood',MFwoodt ='$MFwoodt',MFtile ='$MFtile',MFtilet ='$MFtilet',MFvtc ='$MFvtc',MFvtct ='$MFvtct',Mnotes ='$Mnotes',
Bn ='$Bn',Bunfinish ='$Bunfinish',Bhrs ='$Bhrs',Brooms ='$Brooms',Bclosets ='$Bclosets',Bbroms ='$Bbroms',Bfans ='$Bfans',Bwinds ='$Bwinds',Bblinds ='$Bblinds',Bofrooms ='$Bofrooms',Bfamrooms ='$Bfamrooms',Bledges ='$Bledges',Bfire ='$Bfire',Bgas ='$Bgas',Bwood ='$Bwood',Blaundry ='$Blaundry',Bwasher ='$Bwasher',Bdryer ='$Bdryer',Bslidoor ='$Bslidoor',Bclean ='$Bclean',Bcarpet ='$Bcarpet',Bcleanc ='$Bcleanc',Bvaccum ='$Bvaccum',BFrooms ='$BFrooms',BFclosets ='$BFclosets',BFhall ='$BFhall',BFstair ='$BFstair',BFwood ='$BFwood',BFwoodt ='$BFwoodt',BFtile ='$BFtile',BFtilet ='$BFtilet',BFvtc ='$BFvtc',BFvtct ='$BFvtct',Bnotes ='$Bnotes',
Orooms ='$Orooms',Obathms ='$Obathms',Garage ='$Garage',Gamain ='$Gamain',Gabasem ='$Gabasem',Mechroom ='$Mechroom',mechU ='$mechU',mechM ='$mechM',mechB ='$mechB',WaterY ='$WaterY',WaterN ='$WaterN',EnergyY ='$EnergyY',EnergyN ='$EnergyN',Cleaprice ='$Cleaprice',Cleadisc ='$Cleadisc',Cleatotal ='$Cleatotal',Carpprice ='$Carpprice',Carpdisc ='$Carpdisc',Carptotal ='$Carptotal',Winprice ='$Winprice',Windisc ='$Windisc',Wintotal ='$Wintotal',Haulprice ='$Haulprice',Hauldisc ='$Hauldisc',Haultotal ='$Haultotal',Washprice ='$Washprice',Washdisc ='$Washdisc',Washtotal ='$Washtotal',otherspec ='$otherspec',Travfree ='$Travfree',Tranfree ='$Tranfree',total ='$total',Careaprice ='$Careaprice',Careapricex ='$Careapricex',Careatotal ='$Careatotal',Wfront ='$Wfront',Wfrontx2 ='$Wfrontx2',Wfrontx ='$Wfrontx',Wfronttotal ='$Wfronttotal',Wright ='$Wright',Wrightx2 ='$Wrightx2',Wrightx ='$Wrightx',Wrighttotal ='$Wrighttotal',Wback ='$Wback',Wbackx2 ='$Wbackx2',Wbackx ='$Wbackx',Wbacktotal ='$Wbacktotal',Wleft ='$Wleft',Wleftx2 ='$Wleftx2',Wleftx ='$Wleftx',Wlefttotal ='$Wlefttotal',windowstotal ='$windowstotal',
Scale ='$Scale',Ltech ='$Ltech',Hrslabor ='$Hrslabor',tech ='$tech',crminhouse ='$crminhouse',subcont ='$subcont',subname ='$subname',paytech ='$paytech',CRMrep ='$CRMrep',Extranotes ='$Extranotes' WHERE id=$id  ";

if($mysqli->query($sql)){
}

header('Location: ../main.php');
}
?>





