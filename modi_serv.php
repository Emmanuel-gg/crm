<?php
session_start();
 require 'conexion.php';
 $consulta = "SELECT  * FROM services WHERE id='{$_GET["id"]}'"; 
 $resultado = $mysqli->query($consulta);
$dato = $resultado->fetch_array();

 ?>

<!doctype html>
<html lang="en" data-layout="horizontal" data-sidebar="light" data-sidebar-size="lg" data-topbar="dark">

    <head>

        <meta charset="utf-8" />
        <title>CRM | Cleaning Sistem</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Layout config Js -->
        <script src="assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />


    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">

 
            
            <!-- ========== App Menu ========== -->
            <div class="app-menu navbar-menu ">
                <!-- LOGO -->
                <div id="scrollbar">
                    <div class="container-fluid">
            
                        <div id="two-column-menu">
                        </div>
                        <ul class="navbar-nav" id="navbar-nav">
                            

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">EDIT | property specs </h4>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                    <form enctype="multipart/form-data"  action="functions/modificar.php?id=<?php echo $_GET['id']; ?>" method="post">
                    <input type="hidden" name="id" value="modificar">
                        <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="live-preview">
                                        <div class="row gy-4">
                                            
                                        <div class="col-xxl-2 col-md-3">
                                        <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" name="POS" id="POS" value="x" <?php if ( $dato['POS'] == "x")  echo 'checked="checked"';?>/>
                                            <label class="form-check-label" for="formCheck1">
                                                Price on site
                                            </label>
                                        </div>
                                        <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" name="QA" id="QA" value="x" <?php if ( $dato['QA'] == "x")  echo 'checked="checked"';?>/>
                                            <label class="form-check-label" for="formCheck1">
                                                Quote approved
                                            </label>
                                        </div>
                                        <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" name="WEP" id="WEP" value="x" <?php if ( $dato['WEP'] == "x")  echo 'checked="checked"';?>/>
                                            <label class="form-check-label" for="formCheck1">
                                                Will email proposal
                                            </label>
                                        </div>
                                        </div>
                                        <?php
                                        if(isset($_POST['submit'])){

                                            if(!empty($_POST['lang'])) {

                                                foreach($_POST['lang'] as $value){
                                                    echo "value : ".$value.'<br/>';
                                                }

                                            }

                                        }
                                        ?>
                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Srvcs Reqed</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control " style="color: #1c7bdb ;"
                                                            id="iconrightInput" placeholder="" name="service" id="service"  maxlength="56" value="<?php echo $dato['service']; ?>" required >

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <!-- Input Date -->
                                                <div class="col-xxl-3 col-md-5">
                                                    <label for="exampleInputdate" class="form-label">Needed by</label> 
                                                    <input type="datetime-local" style="color: #1c7bdb ;" class="form-control" data-provider="flatpickr" value="<?php echo $dato['dateneed']; ?>" data-date-format="m d, Y" data-enable-time name="dateneed"  id="dateneed"  required>
                                                </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Referral from</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control "
                                                            id="iconrightInput" placeholder="" style="color: #1c7bdb ;" name="referral" id="referral"  value="<?php echo $dato['referral']; ?>" maxlength="19" required>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Company Name</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control "
                                                            id="iconrightInput" placeholder="" style="color: #1c7bdb ;" name="company" id="company"  value="<?php echo $dato['company']; ?>" maxlength="32" required>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Rep/Contact</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control "
                                                            id="iconrightInput" placeholder="" style="color: #1c7bdb ;" name="contact" id="contact" value="<?php echo $dato['contact']; ?>" maxlength="35" required>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Phone</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control "
                                                            id="iconrightInput" placeholder="" style="color: #1c7bdb ;" name="phone" id="phone" value="<?php echo $dato['phone']; ?>" maxlength="20" required>
                                                        <i class="ri-phone-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Address</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control "
                                                            id="iconrightInput" placeholder="" style="color: #1c7bdb ;" name="address" id="address"  value="<?php echo $dato['address']; ?>" maxlength="39" required>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-md-3">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">City</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control "
                                                            id="iconrightInput" placeholder="" style="color: #1c7bdb ;" name="city" id="city" value="<?php echo $dato['city']; ?>" maxlength="17" required>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-3">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Zip</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control "
                                                            id="iconrightInput" placeholder="" style="color: #1c7bdb ;" name="zip" id="zip" value="<?php echo $dato['zip']; ?>" maxlength="18" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Lockbox/Garage</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control form-control-icon"
                                                            id="iconrightInput" placeholder=""  style="color: #1c7bdb ;" name="lockcode" id="lockcode" value="<?php echo $dato['lockcode']; ?>" maxlength="10" required>
                                                        <i class="  ri-git-repository-private-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Email</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control form-control-icon"
                                                            id="iconrightInput" placeholder="" style="color: #1c7bdb ;" name="emailcont" id="emailcont" value="<?php echo $dato['emailcont']; ?>" maxlength="28" required>
                                                        <i class=" ri-mail-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->

                                           
                                           
                                           
                                         
                               
                                        </div>
                                        <!--end row-->
                                    </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        <br>
                                        <div class="live-preview">
                                            <div class="accordion custom-accordionwithicon-plus" id="accordionWithplusicon">
                                                <div class="accordion-item" style="border-color:#f0b474">
                                                    <h2 class="accordion-header" id="accordionwithplusExample1">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_plusExamplecollapse1" aria-expanded="true" aria-controls="accor_plusExamplecollapse1"style="background-color:#f0b474;">
                                                            Upper Level
                                                        </button>
                                                    </h2>

                                                    <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox" name="Un" id="Un" value="x" <?php if ( $dato['Un'] == "x")  echo 'checked="checked"';?>/>
                                                        <label class="form-check-label" for="formCheck1">
                                                            None
                                                        </label>
                                                    </div>
                                        
                                                    <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Hrs of labor</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Uhrs" id="Uhrs" value="<?php echo $dato['Uhrs']; ?>">
                                                </div>
                                            </div>
                                            <!--end col-->
                                                    <div id="accor_plusExamplecollapse1" class="accordion-collapse collapse " aria-labelledby="accordionwithplusExample1" data-bs-parent="#accordionWithplusicon">
                                                        <div class="accordion-body">
                                                          <div class="row gy-4">
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Room(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Urooms" id="Urooms" value="<?php echo $dato['Urooms']; ?>">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Closet(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Uclosets" id="Uclosets" value="<?php echo $dato['Uclosets']; ?>">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Bathroom(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Ubroms" id="Ubroms" value="<?php echo $dato['Ubroms']; ?>">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Celling fans</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Ufans" id="Ufans" value="<?php echo $dato['Ufans']; ?>">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Windows</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Uwinds" id="Uwinds" value="<?php echo $dato['Uwinds']; ?>">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Blinds</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Ublinds" id="Ublinds" value="<?php echo $dato['Ublinds']; ?>">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Office room(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Uofrooms" id="Uofrooms" value="<?php echo $dato['Uofrooms']; ?>">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Family room(s)</span>
                                                    <input type="text" class="form-control"  style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Ufamrooms" id="Ufamrooms" value="<?php echo $dato['Ufamrooms']; ?>">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <!-- Base Example -->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Uledges" id="Uledges" value="x"  <?php if ( $dato['Uledges'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Ledge(s)
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Ufire" id="Ufire" value="x" <?php if ( $dato['Ufire'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Fireplace
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Ugas" id="Ugas" value="x" <?php if ( $dato['Ugas'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Gas
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Uwood" id="Uwood" value="x" <?php if ( $dato['Uwood'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Wood
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Ulaundry" id="Ulaundry" value="x" <?php if ( $dato['Ulaundry'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Laundry room
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Uwasher" id="Uwasher" value="x" <?php if ( $dato['Uwasher'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Washer
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Udryer" id="Udryer" value="x" <?php if ( $dato['Udryer'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Dryer
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Uslidoor" id="Uslidoor" value="x" <?php if ( $dato['Uslidoor'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Sliding door
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Uclean" id="Uclean" value="x" <?php if ( $dato['Uclean'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Clean
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                    
                                            <div class="border mt-3 border-dashed"></div>
                                            <p class="text-muted">TYPE OF FLOOR </p>
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Ucarpet" id="Ucarpet" value="x" <?php if ( $dato['Ucarpet'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Carpet 
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Ucleanc" id="Ucleanc" value="x" <?php if ( $dato['Ucleanc'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Clean
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Uvaccum" id="Uvaccum" value="x" <?php if ( $dato['Uvaccum'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Vaccum
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
            
                                           <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Room(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="UFrooms" id="UFrooms" value="<?php echo $dato['UFrooms']; ?>">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Closet(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="UFclosets" id="UFclosets" value="<?php echo $dato['UFclosets']; ?>">
                                                </div>
                                            </div>
                                            <!--end col-->
                
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Hall(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="UFhall" id="UFhall" value="<?php echo $dato['UFhall']; ?>">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Stairs/Land</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="UFstair" id="UFstair" value="<?php echo $dato['UFstair']; ?>">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="UFwood" id="UFwood" value="x" <?php if ( $dato['UFwood'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Wood Floor
                                                        <input type="text" class="form-control" style="color: #1c7bdb ;" style="width:80px;height:30px" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="UFwoodt" id="UFwoodt" maxlength="28" value="<?php echo $dato['UFwoodt']; ?>">
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="UFtile" id="UFtile" value="x" <?php if ( $dato['UFtile'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Tile Floor
                                                        <input type="text" class="form-control" style="color: #1c7bdb ;" style="width:80px;height:30px" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="UFtilet" id="UFtilet" maxlength="30" value="<?php echo $dato['UFtilet']; ?>">
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="UFvtc" id="UFvtc" value="x" <?php if ( $dato['UFvtc'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    VTC
                                                        <input type="text" class="form-control" style="color: #1c7bdb ;" style="width:80px;height:30px" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="UFvtct" id="UFvtct" maxlength="33" value="<?php echo $dato['UFvtct']; ?>">
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                         <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="exampleFormControlTextarea5" class="form-label">Notes</label>
                                                    <textarea class="form-control" name="Unotes" id="Unotes" style="color: #1c7bdb ;" 
                                                        rows="4" cols="41"  maxlength="164"><?php echo $dato['Unotes']; ?></textarea>
                                                </div>
                                            </div>
                                            <!--end col-->
                               
                                        </div>
                                        <!--end row-->   
       
                                                        </div> 
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="accordion-item"  style="border-color:#bce8e8">
                                                    <h2 class="accordion-header" id="accordionwithplusExample2">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_plusExamplecollapse2" aria-expanded="false" aria-controls="accor_plusExamplecollapse2"style="background-color:#bce8e8;">
                                                            Main Level
                                                        </button>
                                                    </h2>
                                                     <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Hrs of labor</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Mhrs" id="Mhrs" value="<?php echo $dato['Mhrs']; ?>">
                                                </div>
                                            </div>
                                            <!--end col-->
                                                    <div id="accor_plusExamplecollapse2" class="accordion-collapse collapse " aria-labelledby="accordionwithplusExample2" data-bs-parent="#accordionWithplusicon">
                                                        <div class="accordion-body">
                                                          <div class="row gy-4">
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Room(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Mrooms" id="Mrooms" value="<?php echo $dato['Mrooms']; ?>">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Closet(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Mclosets" id="Mclosets" value="<?php echo $dato['Mclosets']; ?>">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Bathroom(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Mbroms" id="Mbroms" value="<?php echo $dato['Mbroms']; ?>">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Celling fans</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Mfans" id="Mfans" value="<?php echo $dato['Mfans']; ?>">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Windows</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Mwinds" id="Mwinds" value="<?php echo $dato['Mwinds']; ?>">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Blinds</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Mblinds" id="Mblinds" value="<?php echo $dato['Mblinds']; ?>">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Office room(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Mofrooms" id="Mofrooms" value="<?php echo $dato['Mofrooms']; ?>">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Family room(s)</span>
                                                    <input type="text" class="form-control"  style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Mfamrooms" id="Mfamrooms" value="<?php echo $dato['Mfamrooms']; ?>">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mledges" id="Mledges" value="x"  <?php if ( $dato['Mledges'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Ledge(s)
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mkitchen" id="Mkitchen" value="x" <?php if ( $dato['Mkitchen'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Kitchen
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mtkitchg" id="Mtkitchg" value="x" <?php if ( $dato['Mtkitchg'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Top Kitchen Gabinets
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mfire" id="Mfire" value="x" <?php if ( $dato['Mfire'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Fireplace
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mgas" id="Mgas" value="x" <?php if ( $dato['Mgas'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Gas
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mwood" id="Mwood" value="x" <?php if ( $dato['Mwood'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Wood
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mlaundry" id="Mlaundry" value="x" <?php if ( $dato['Mlaundry'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Laundry room
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mwasher" id="Mwasher" value="x" <?php if ( $dato['Mwasher'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Washer
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mdryer" id="Mdryer" value="x" <?php if ( $dato['Mdryer'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Dryer
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mlivroom" id="Mlivroom" value="x" <?php if ( $dato['Mlivroom'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Living room
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mdinroom" id="Mdinroom" value="x" <?php if ( $dato['Mdinroom'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Dining room
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mstove" id="Mstove" value="x" <?php if ( $dato['Mstove'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Stove
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="MSin" id="MSin" value="x" <?php if ( $dato['MSin'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    in
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="MSout" id="MSout" value="x" <?php if ( $dato['MSout'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Out
                                                </label>
                                                </div>
                                                <div class="col-xxl-5 col-md-5">
                                                    <input class="form-control" type="text" name="MSnum" id="MSnum" style="color: #1c7bdb ;" value="<?php echo $dato['MSnum']; ?>">
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mfridge" id="Mfridge" value="x" <?php if ( $dato['Mfridge'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Fridge
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="MFin" id="MFin" value="x" <?php if ( $dato['MFin'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    in
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="MFout" id="MFout" value="x" <?php if ( $dato['MFout'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Out
                                                </label>
                                                </div>
                                                <div class="col-xxl-5 col-md-5">
                                                    <input class="form-control" type="text" name="MFnum" id="MFnum" style="color: #1c7bdb ;" value="<?php echo $dato['MFnum']; ?>">
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mdwasher" id="Mdwasher" value="x" <?php if ( $dato['Mdwasher'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Dishwasher
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="MDin" id="MDin" value="x" <?php if ( $dato['MDin'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    in
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="MDout" id="MDout" value="x" <?php if ( $dato['MDout'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Out
                                                </label>
                                                </div>
                                                <div class="col-xxl-5 col-md-5">
                                                    <input class="form-control" type="text" name="MDnum" id="MDnum" style="color: #1c7bdb ;" value="<?php echo $dato['MDnum']; ?>">
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mmicro" id="Mmicro" value="x" <?php if ( $dato['Mmicro'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Microwave
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="MMin" id="MMin" value="x" <?php if ( $dato['MMin'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    in
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="MMout" id="MMout" value="x" <?php if ( $dato['MMout'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Out
                                                </label>
                                                </div>
                                                <div class="col-xxl-5 col-md-5">
                                                    <input class="form-control" type="text" name="MMnum" id="MMnum" style="color: #1c7bdb ;" value="<?php echo $dato['MMnum']; ?>">
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mslidoor" id="Mslidoor" value="x" <?php if ( $dato['Mslidoor'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Sliding door
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mclean" id="Mclean" value="x" <?php if ( $dato['Mclean'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Clean
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->

                                            
                                            
                                            <div class="border mt-3 border-dashed"></div>
                                            <p class="text-muted">TYPE OF FLOOR </p>
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mcarpet" id="Mcarpet" value="x" <?php if ( $dato['Mcarpet'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Carpet 
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mcleanc" id="Mcleanc" value="x" <?php if ( $dato['Mcleanc'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Clean
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mvaccum" id="Mvaccum" value="x" <?php if ( $dato['Mvaccum'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Vaccum
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
            
                                           <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Room(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="MFrooms" id="MFrooms" value="<?php echo $dato['MFrooms']; ?>">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Closet(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="MFclosets" id="MFclosets" value="<?php echo $dato['MFclosets']; ?>">
                                                </div>
                                            </div>
                                            <!--end col-->
                
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Hall(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="MFhall" id="MFhall" value="<?php echo $dato['MFhall']; ?>">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Stairs/Land</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="MFstair" id="MFstair" value="<?php echo $dato['MFstair']; ?>">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="MFwood" id="MFwood" value="x" <?php if ( $dato['MFwood'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Wood Floor
                                                        <input type="text" class="form-control" style="color: #1c7bdb ;" style="width:80px;height:30px" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="MFwoodt" id="MFwoodt" maxlength="14" value="<?php echo $dato['MFwoodt']; ?>">
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="MFtile" id="MFtile" value="x" <?php if ( $dato['MFtile'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Tile Floor
                                                        <input type="text" class="form-control" style="color: #1c7bdb ;" style="width:80px;height:30px" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="MFtilet" id="MFtilet" maxlength="16" value="<?php echo $dato['MFtilet']; ?>">
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="MFvtc" id="MFvtc" value="x" <?php if ( $dato['MFvtc'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    VTC
                                                        <input type="text" class="form-control" style="color: #1c7bdb ;" style="width:80px;height:30px" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="MFvtct" id="MFvtct" maxlength="20" value="<?php echo $dato['MFvtct']; ?>">
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                         <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="exampleFormControlTextarea5" class="form-label">Notes</label>
                                                    <textarea class="form-control" name="Mnotes" id="Mnotes" style="color: #1c7bdb ;" 
                                                        rows="2" cols="50"  maxlength="100"><?php echo $dato['Mnotes']; ?></textarea>
                                                </div>
                                            </div>
                                            <!--end col-->
                               
                                        </div>
                                        <!--end row-->   
       
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                <div class="accordion-item" style="border-color:#cae8bc">
                                                    <h2 class="accordion-header" id="accordionwithplusExample3" >
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_plusExamplecollapse3" aria-expanded="false" aria-controls="accor_plusExamplecollapse3"style="background-color:#cae8bc;">
                                                            Basement
                                                        </button>
                                                    </h2>


                                                    <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox" name="Bn" id="Bn" value="x" <?php if ( $dato['Bn'] == "x")  echo 'checked="checked"';?>/>
                                                        <label class="form-check-label" for="formCheck1">
                                                            None
                                                        </label>
                                                    </div>
                                                    <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox" name="Bunfinish" id="Bunfinish" value="x" <?php if ( $dato['Bunfinish'] == "x")  echo 'checked="checked"';?>/>
                                                        <label class="form-check-label" for="formCheck1">
                                                            Unfinished
                                                        </label>
                                                    </div>

                                                    <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Hrs of labor</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Bhrs" id="Bhrs" value="<?php echo $dato['Bhrs']; ?>">
                                                </div>
                                            </div>
                                            <!--end col-->
                                                    <div id="accor_plusExamplecollapse3" class="accordion-collapse collapse" aria-labelledby="accordionwithplusExample3" data-bs-parent="#accordionWithplusicon">
                                                        <div class="accordion-body">
                                                          <div class="row gy-4">
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Room(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Brooms" id="Brooms" value="<?php echo $dato['Brooms']; ?>">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Closet(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Bclosets" id="Bclosets" value="<?php echo $dato['Bclosets']; ?>">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Bathroom(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Bbroms" id="Bbroms" value="<?php echo $dato['Bbroms']; ?>">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Celling fans</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Bfans" id="Bfans" value="<?php echo $dato['Bfans']; ?>">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Windows</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Bwinds" id="Bwinds" value="<?php echo $dato['Bwinds']; ?>">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Blinds</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Bblinds" id="Bblinds" value="<?php echo $dato['Bblinds']; ?>">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Office room(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Bofrooms" id="Bofrooms" value="<?php echo $dato['Bofrooms']; ?>">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Family room(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Bfamrooms" id="Bfamrooms" value="<?php echo $dato['Bfamrooms']; ?>">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <!-- Base Example -->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Bledges" id="Bledges" value="x" <?php if ( $dato['Bledges'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Ledge(s)
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Bfire" id="Bfire" value="x" <?php if ( $dato['Bfire'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Fireplace
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Bgas" id="Bgas" value="x" <?php if ( $dato['Bgas'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Gas
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Bwood" id="Bwood" value="x" <?php if ( $dato['Bwood'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Wood
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Blaundry" id="Blaundry" value="x" <?php if ( $dato['Blaundry'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Laundry room
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Bwasher" id="Bwasher" value="x" <?php if ( $dato['Bwasher'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Washer
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Bdryer" id="Bdryer" value="x" <?php if ( $dato['Bdryer'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Dryer
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Bslidoor" id="Bslidoor" value="x" <?php if ( $dato['Bslidoor'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Sliding door
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Bclean" id="Bclean" value="x" <?php if ( $dato['Bclean'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Clean
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            
                                            <div class="border mt-3 border-dashed"></div>
                                            <p class="text-muted">TYPE OF FLOOR </p>
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Bcarpet" id="Bcarpet" value="x" <?php if ( $dato['Bcarpet'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Carpet 
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Bcleanc" id="Bcleanc" value="x" <?php if ( $dato['Bcleanc'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Clean
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Bvaccum" id="Bvaccum" value="x" <?php if ( $dato['Bvaccum'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Vaccum
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
            
                                           <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Room(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="BFrooms" id="BFrooms" value="<?php echo $dato['BFrooms']; ?>">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Closet(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="BFclosets" id="BFclosets" value="<?php echo $dato['BFclosets']; ?>">
                                                </div>
                                            </div>
                                            <!--end col-->
                
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Hall(s)</span>
                                                    <input type="text" class="form-control"style="color: #1c7bdb ;"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="BFhall" id="BFhall" value="<?php echo $dato['BFhall']; ?>">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Stairs/Land</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="BFstair" id="BFstair" value="<?php echo $dato['BFstair']; ?>">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="BFwood" id="BFwood" value="x" <?php if ( $dato['BFwood'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Wood Floor
                                                        <input type="text" class="form-control" style="color: #1c7bdb ;" style="width:80px;height:30px" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="BFwoodt" id="BFwoodt"  maxlength="35" value="<?php echo $dato['BFwoodt']; ?>">
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="BFtile" id="BFtile" value="x" <?php if ( $dato['BFtile'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Tile Floor
                                                        <input type="text" class="form-control" style="color: #1c7bdb ;" style="width:80px;height:30px" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="BFtilet" id="BFtilet"  maxlength="37" value="<?php echo $dato['BFtilet']; ?>">
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="BFvtc" id="BFvtc" value="x" <?php if ( $dato['BFvtc'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    VTC
                                                        <input type="text" class="form-control" style="color: #1c7bdb ;" style="width:80px;height:30px" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="BFvtct" id="BFvtct"  maxlength="40" value="<?php echo $dato['BFvtct']; ?>">
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                         <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="exampleFormControlTextarea5" class="form-label">Notes</label>
                                                    <textarea class="form-control" name="Bnotes" id="Bnotes" style="color: #1c7bdb ;" 
                                                        rows="2" cols="33"  maxlength="66"><?php echo $dato['Bnotes']; ?></textarea>
                                                </div>
                                            </div>
                                            <!--end col-->
                               
                                        </div>
                                        <!--end row-->   
       
                                                        </div> 
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <br>
                                        <br>
                                        
                                        <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                 Overview
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Room(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Orooms" id="Orooms" value="<?php echo $dato['Orooms']; ?>">
                                                </div>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Bathroom(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Obathms" id="Obathms" value="<?php echo $dato['Obathms']; ?>">
                                                </div>
                                                <div class="border mt-3 border-dashed"></div>
                                                Extras
                                                <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox"  name="Garage" id="Garage" value="x" <?php if ( $dato['Garage'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Garage
        
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Gamain" id="Gamain" value="x" <?php if ( $dato['Gamain'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Main Level
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Gabasem" id="Gabasem" value="x" <?php if ( $dato['Gabasem'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Basement
                                                </label>
                                                </div>
                                                
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox"  name="Mechroom" id="Mechroom" value="x" <?php if ( $dato['Mechroom'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Mechanical Room  
                                                    </label>
                                                    <input class="form-check-input" type="checkbox"  name="mechU" id="mechU" value="x" <?php if ( $dato['mechU'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Upper 
                                                    </label>
                                                    <input class="form-check-input" type="checkbox"  name="mechM" id="mechM" value="x" <?php if ( $dato['mechM'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Main  
                                                    </label>
                                                    <input class="form-check-input" type="checkbox"  name="mechB" id="mechB" value="x" <?php if ( $dato['mechB'] == "x")  echo 'checked="checked"';?>/>
                                                    <label class="form-check-label" for="formCheck1">
                                                    Basement  
                                                    </label>
                                                </div>
                                                
                                            </div>                                       
                                            <!--end col-->
                                                
                                            </div>
                                            <!--end col-->
                                                
                                           
                                            <div class="col-xxl-4 col-md-6">
                                                Property has  <b>Water:</b> <input class="form-check-input" type="checkbox" name="WaterY" id="WaterY" value="x" <?php if ( $dato['WaterY'] == "x")  echo 'checked="checked"';?>/> YES&nbsp;<input class="form-check-input" type="checkbox" name="WaterN" id="WaterN" value="x" <?php if ( $dato['WaterN'] == "x")  echo 'checked="checked"';?>/>NO&nbsp;&nbsp;
                                                <b>Energy:</b> <input class="form-check-input" type="checkbox" name="EnergyY" id="EnergyY" value="x" <?php if ( $dato['EnergyY'] == "x")  echo 'checked="checked"';?>/> YES&nbsp;<input class="form-check-input" type="checkbox" name="EnergyN" id="EnergyN" value="x" <?php if ( $dato['EnergyN'] == "x")  echo 'checked="checked"';?>/>NO
                                               <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Cleaning Service: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby=""  name="Cleaprice" id="Cleaprice" value="<?php echo $dato['Cleaprice']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Discount: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Cleadisc" id="Cleadisc" value="<?php echo $dato['Cleadisc']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Total: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Cleatotal" id="Cleatotal" value="<?php echo $dato['Cleatotal']; ?>">
                                                   
                                                    </div> 
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Carpet Cleaning: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Carpprice" id="Carpprice" value="<?php echo $dato['Carpprice']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Discount: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Carpdisc" id="Carpdisc" value="<?php echo $dato['Carpdisc']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Total: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Carptotal" id="Carptotal" value="<?php echo $dato['Carptotal']; ?>">
                                                   
                                                    </div> 
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Window Cleaning: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Winprice" id="Winprice" value="<?php echo $dato['Winprice']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Discount: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Windisc" id="Windisc" value="<?php echo $dato['Windisc']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Total: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Wintotal" id="Wintotal" value="<?php echo $dato['Wintotal']; ?>">
                                                   
                                                    </div> 
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Hauling: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Haulprice" id="Haulprice" value="<?php echo $dato['Haulprice']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Discount: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Hauldisc" id="Hauldisc" value="<?php echo $dato['Hauldisc']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Total: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Haultotal" id="Haultotal" value="<?php echo $dato['Haultotal']; ?>">
                                                   
                                                    </div> 
                                                <div class="input-group input-group-sm">
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="otherspec" id="otherspec" placeholder="New spec     :$" maxlength="15" value="<?php echo $dato['otherspec']; ?>">
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Washprice" id="Washprice" value="<?php echo $dato['Washprice']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Discount: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Washdisc" id="Washdisc" value="<?php echo $dato['Washdisc']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Total: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Washtotal" id="Washtotal" value="<?php echo $dato['Washtotal']; ?>">
                                                   
                                                    </div> 
                                                    
                                                    <br>
                                                    <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Travel Free</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Travfree" id="Travfree" value="<?php echo $dato['Travfree']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Transaction Free</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Tranfree" id="Tranfree" value="<?php echo $dato['Tranfree']; ?>">
                                                    </div> 
                                                    <br>


                                                    
                                                <div class="input-group input-group-sm " >
                                                
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">total=</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="total" id="total" value="<?php echo $dato['total']; ?>">
                                                    
                                                   
                                                    </div> 

                                            </div>
                                            <div class="col-xxl-3 col-md-4">
                                                <br>
                                               <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Carpet areas</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Careaprice" id="Careaprice" value="<?php echo $dato['Careaprice']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">x $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Careapricex" id="Careapricex" value="<?php echo $dato['Careapricex']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">=</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Careatotal" id="Careatotal" value="<?php echo $dato['Careatotal']; ?>">
                                                   
                                                    </div> 
                                                <div class="border mt-3 border-dashed"></div>
                                                Windows:
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Front:</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Wfront" id="Wfront" value="<?php echo $dato['Wfront']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">x 2 =</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Wfrontx2" id="Wfrontx2" value="<?php echo $dato['Wfrontx2']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">x $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Wfrontx" id="Wfrontx" value="<?php echo $dato['Wfrontx']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">=</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Wfronttotal" id="Wfronttotal" value="<?php echo $dato['Wfronttotal']; ?>">
                                                   
                                                    </div> 
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Right:</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Wright" id="Wright" value="<?php echo $dato['Wright']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">x 2 =</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Wrightx2" id="Wrightx2" value="<?php echo $dato['Wrightx2']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">x $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Wrightx" id="Wrightx" value="<?php echo $dato['Wrightx']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">=</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Wrighttotal" id="Wrighttotal" value="<?php echo $dato['Wrighttotal']; ?>">
                                                   
                                                    </div> 
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Back:</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Wback" id="Wback" value="<?php echo $dato['Wback']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">x 2 =</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Wbackx2" id="Wbackx2" value="<?php echo $dato['Wbackx2']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">x $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Wbackx" id="Wbackx" value="<?php echo $dato['Wbackx']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">=</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Wbacktotal" id="Wbacktotal" value="<?php echo $dato['Wbacktotal']; ?>">
                                                   
                                                    </div> 
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Left:</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Wleft" id="Wleft" value="<?php echo $dato['Wleft']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">x 2 =</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Wleftx2" id="Wleftx2" value="<?php echo $dato['Wleftx2']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">x $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Wleftx" id="Wleftx" value="<?php echo $dato['Wleftx']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">=</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;"  aria-label="" aria-describedby="" name="Wlefttotal" id="Wlefttotal" value="<?php echo $dato['Wlefttotal']; ?>">
                                                   
                                                    </div> 
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Total =</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="windowstotal" id="windowstotal" value="<?php echo $dato['windowstotal']; ?>">
                                                    </div>

                                            </div>
                                            <div class="col-xxl-3 col-md-4">
                                           
                                               
                                                <div class="border mt-3 border-dashed"></div>
                                                Office Use
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Scale:</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Scale" id="Scale" value="<?php echo $dato['Scale']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Lead Tech:</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Ltech" id="Ltech" maxlength="8" value="<?php echo $dato['Ltech']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Hrs of labor:</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Hrslabor" id="Hrslabor" value="<?php echo $dato['Hrslabor']; ?>">
                                                    
                                                   
                                                    </div> 
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Techs:</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="tech" id="tech"  maxlength="22" value="<?php echo $dato['tech']; ?>">
                                                    </div> 
                                                CRM /In house <input class="form-check-input" type="checkbox" name="crminhouse" id="crminhouse" value="x" <?php if ( $dato['crminhouse'] == "x")  echo 'checked="checked"';?>/>&nbsp;&nbsp;&nbsp;&nbsp; Sub-contractor<input class="form-check-input" type="checkbox" name="subcont" id="subcont" value="x" <?php if ( $dato['subcont'] == "x")  echo 'checked="checked"';?>/>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Sub-contactor name</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="subname" id="subname"  maxlength="10" value="<?php echo $dato['subname']; ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Pay tech: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="paytech" id="paytech" value="<?php echo $dato['paytech']; ?>">
                                                    
                                                   
                                                    </div> 
                                                    <br>
                                                    <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">CRM Rep</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="CRMrep" id="CRMrep"  maxlength="9" value="<?php echo $dato['CRMrep']; ?>">
                                                    
                                                    
                                                   
                                                    </div> 
                                            </div>
                                            
                                            <div class="col-xxl-3 col-md-4">
                                            Extra Notes: 
                                            <textarea class="form-control" id="" rows="2" cols="49"  maxlength="98" name="Extranotes" id="Extranotes" style="color: #1c7bdb ;" ><?php echo $dato['Extranotes']; ?></textarea>

                                            </div>
                                            <div class="col-xxl-3 col-md-4">
                                            <canvas id="canvas"></canvas>
</div>
                                            <script>
    //======================================================================
    // VARIABLES  CANVAS FIRMA 
    //======================================================================
    let miCanvas = document.querySelector('#canvas');
    let lineas = [];
    let correccionX = 0;
    let correccionY = 0;
    let pintarLinea = false;
    // Marca el nuevo punto
    let nuevaPosicionX = 0;
    let nuevaPosicionY = 0;

    let posicion = miCanvas.getBoundingClientRect()
    correccionX = posicion.x;
    correccionY = posicion.y;

    miCanvas.width = 500;
    miCanvas.height = 500;

    //======================================================================
    // FUNCIONES
    //======================================================================

    /**
     * Funcion que empieza a dibujar la linea
     */
    function empezarDibujo () {
        pintarLinea = true;
        lineas.push([]);
    };
    
    /**
     * Funcion que guarda la posicion de la nueva línea
     */
    function guardarLinea() {
        lineas[lineas.length - 1].push({
            x: nuevaPosicionX,
            y: nuevaPosicionY
        });
    }

    /**
     * Funcion dibuja la linea
     */
    function dibujarLinea (event) {
        event.preventDefault();
        if (pintarLinea) {
            let ctx = miCanvas.getContext('2d')
            // Estilos de linea
            ctx.lineJoin = ctx.lineCap = 'round';
            ctx.lineWidth = 3;
            // Color de la linea
            ctx.strokeStyle = '#0d0909';
            // Marca el nuevo punto
            if (event.changedTouches == undefined) {
                // Versión ratón
                nuevaPosicionX = event.layerX;
                nuevaPosicionY = event.layerY;
            } else {
                // Versión touch, pantalla tactil
                nuevaPosicionX = event.changedTouches[0].pageX - correccionX;
                nuevaPosicionY = event.changedTouches[0].pageY - correccionY;
            }
            // Guarda la linea
            guardarLinea();
            // Redibuja todas las lineas guardadas
            ctx.beginPath();
            lineas.forEach(function (segmento) {
                ctx.moveTo(segmento[0].x, segmento[0].y);
                segmento.forEach(function (punto, index) {
                    ctx.lineTo(punto.x, punto.y);
                });
            });
            ctx.stroke();
        }
    }

    /**
     * Funcion que deja de dibujar la linea
     */
    function pararDibujar () {
        pintarLinea = false;
        guardarLinea();
    }

    //======================================================================
    // EVENTOS
    //======================================================================

    // Eventos raton
    miCanvas.addEventListener('mousedown', empezarDibujo, false);
    miCanvas.addEventListener('mousemove', dibujarLinea, false);
    miCanvas.addEventListener('mouseup', pararDibujar, false);

    // Eventos pantallas táctiles
    miCanvas.addEventListener('touchstart', empezarDibujo, false);
    miCanvas.addEventListener('touchmove', dibujarLinea, false);

</script>
                                            
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="d-none code-view">

                                        </div>









                                        <br>
                                        <div class="col-lg ">
                                         <div class="hstack gap-2 justify-content-center">
                                               <button  type="submit" class="btn btn-warning">Save Changes</button>
                                                       
                                            </div>
                                                    <!--end col-->
                 
                                </div>
                                <!--end col-->
                                    </div><!-- end card-body -->
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                </div><!-- end card -->
                            </div><!--end col-->
                    <!--aqui puede terminar el input-->
                    </form>
                    
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © The code house.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by Devs Jean
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
                                                            

        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="assets/js/plugins.js"></script>
        
        <!-- prismjs plugin -->
        <script src="assets/libs/prismjs/prism.js"></script>
        <script src="assets/libs/list.js/list.min.js"></script>
        <script src="assets/libs/list.pagination.js/list.pagination.min.js"></script>

        <script type="text/javascript" src="js/class.ajax.js?v=<?php echo time();?>"></script> 
  
        <!-- listjs init -->
        <script src="assets/js/pages/listjs.init.js"></script>

        <!-- App js -->
        <script  src="assets/js/app.js"></script>
        
        
    </body>
    
</html>

