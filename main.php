<?php
session_start();
require 'conexion.php';
date_default_timezone_set('America/Denver');


$dir = "assets/images/profilepictures/";

if(!isset($_SESSION['id'])){
header("Location: login.php");
}
$id = $_SESSION['id'];
$nombre = $_SESSION['nombre'];
$tipo_usuario = $_SESSION['tipo_usuario'];


?>
<style>
    form-control {
        color: #2370bd;
    }
  
   
</style>
<!DOCTYPE html>
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
        <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>




  
        
    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex"> 
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="17">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="" alt="" height="17">
                        </span>
                    </a>
                </div>
            

                <!-- App Search-->
                <form class="app-search d-none d-md-block"> 
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search..." autocomplete="off"
                            id="search-options" value="">
                        <span class="mdi mdi-magnify search-widget-icon"></span>
                        <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                            id="search-close-options"></span>
                    </div>
                    
                </form> 
            </div>

            <div class="d-flex align-items-center">

     



                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                        data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22'></i>
                    </button>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button"
                        class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>

          

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="<?= $dir .$id.'.jpg';  ?>"
                                alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"><?php echo $nombre; ?></span>
                                <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Admin</span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome!</h6>
                        <a class="dropdown-item" href="functions/logoutfunction.php"><i
                                class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                class="align-middle" data-key="t-logout">Logout</span></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
            
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
                                    <h4 class="mb-sm-0">property specs - CRM | Cleaning Sistem</h4>
                                    
                                    <div class="col-lg ">
                                         <div class="hstack gap-2 justify-content-end">
                                               <a href="users.php"
                                                   class="btn btn-success"><i class=" ri-user-add-line"></i></a>
                                                          
                                            </div>
                                                    <!--end col-->
                                </div>
                                <!--end col-->
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                    <form enctype="multipart/form-data"  action="functions/guardaservicio.php" method="post" id="formguardarservicio">
                        <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="live-preview">
                                        <div class="row gy-4">
                                            
                                        <div class="col-xxl-2 col-md-3">
                                        <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" name="POS" id="POS" value="x">
                                            <label class="form-check-label" for="formCheck1">
                                                Price on site
                                            </label>
                                        </div>
                                        <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" name="QA" id="QA" value="x">
                                            <label class="form-check-label" for="formCheck1">
                                                Quote approved
                                            </label>
                                        </div>
                                        <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" name="WEP" id="WEP" value="x">
                                            <label class="form-check-label" for="formCheck1">
                                                Will email proposal
                                            </label>
                                        </div>
                                        </div>

                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Srvcs Reqed</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control " style="color: #1c7bdb ;"
                                                            id="iconrightInput" placeholder="" name="service" id="service"  maxlength="56" required>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <!-- Input Date -->
                                                <div class="col-xxl-3 col-md-5">
                                                    <label for="exampleInputdate" class="form-label">Needed by</label> 
                                                    <input type="datetime-local" style="color: #1c7bdb ;" class="form-control" data-provider="flatpickr" data-date-format="m d, Y" data-enable-time name="dateneed"  id="dateneed"  required>
                                                </div>
                                                
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Referral from</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control "
                                                            id="iconrightInput" placeholder="" style="color: #1c7bdb ;" name="referral" id="referral"  maxlength="19" required>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Company Name</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control "
                                                            id="iconrightInput" placeholder="" style="color: #1c7bdb ;" name="company" id="company" maxlength="32" required>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Rep/Contact</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control "
                                                            id="iconrightInput" placeholder="" style="color: #1c7bdb ;" name="contact" id="contact" maxlength="35" required>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Phone</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control "
                                                            id="iconrightInput" placeholder="" style="color: #1c7bdb ;" name="phone" id="phone"  maxlength="20" required>
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
                                                            id="iconrightInput" placeholder="" style="color: #1c7bdb ;" name="address" id="address"  maxlength="39" required>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-md-3">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">City</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control "
                                                            id="iconrightInput" placeholder="" style="color: #1c7bdb ;" name="city" id="city"  maxlength="17" required>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-3">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Zip</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control "
                                                            id="iconrightInput" placeholder="" style="color: #1c7bdb ;" name="zip" id="zip"  maxlength="18" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Lockbox/Garage</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control form-control-icon"
                                                            id="iconrightInput" placeholder=""  style="color: #1c7bdb ;" name="lockcode" id="lockcode"  maxlength="10" required>
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
                                                            id="iconrightInput" placeholder="" style="color: #1c7bdb ;" name="emailcont" id="emailcont"  maxlength="37" required>
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
                                                    <input class="form-check-input" type="checkbox" name="Un" id="Un" value="x">
                                                        <label class="form-check-label" for="formCheck1">
                                                            None
                                                        </label>
                                                    </div>
                                        
                                                    <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Hrs of labor</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" step="0.001" oninput="upperhours()" aria-describedby="inputGroup-sizing-sm" name="Uhrs" id="Uhrs" required>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <script>
                                                        function upperhours(){
                                                          try{
                                                            
                                                            document.getElementById("Hrslabor").value = parseFloat(document.getElementById("Uhrs").value) + parseFloat(document.getElementById("Mhrs").value) + parseFloat(document.getElementById("Bhrs").value)  ;
                                                          }  catch (e) {}
                                                        }
                                                    </script>
                                                    <div id="accor_plusExamplecollapse1" class="accordion-collapse collapse " aria-labelledby="accordionwithplusExample1" data-bs-parent="#accordionWithplusicon">
                                                        <div class="accordion-body">
                                                          <div class="row gy-4">
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Room(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" step="0.001" oninput="rommbathsupper()" aria-describedby="inputGroup-sizing-sm" name="Urooms" id="Urooms" required>
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Closet(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Uclosets" id="Uclosets">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Bathroom(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" step="0.001" oninput="rommbathsupper()" aria-describedby="inputGroup-sizing-sm" name="Ubroms" id="Ubroms" required>
                                                </div>
                                                <script>
                                                        function rommbathsupper(){
                                                          try{
                                                            //Orooms suma
                                                            document.getElementById("Orooms").value = parseFloat(document.getElementById("Urooms").value) + parseFloat(document.getElementById("Mrooms").value) + parseFloat(document.getElementById("Brooms").value)  ;
                                                            //Obathms suma
                                                            document.getElementById("Obathms").value = parseFloat(document.getElementById("Ubroms").value) + parseFloat(document.getElementById("Mbroms").value) + parseFloat(document.getElementById("Bbroms").value)  ;
                                                          }  catch (e) {}
                                                        }
                                                    </script>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Celling fans</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Ufans" id="Ufans">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Windows</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Uwinds" id="Uwinds">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Blinds</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Ublinds" id="Ublinds">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Office room(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Uofrooms" id="Uofrooms">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Family room(s)</span>
                                                    <input type="text" class="form-control"  style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Ufamrooms" id="Ufamrooms">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <!-- Base Example -->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Uledges" id="Uledges" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Ledge(s)
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Ufire" id="Ufire" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Fireplace
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Ugas" id="Ugas" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Gas
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Uwood" id="Uwood" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Wood
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Ulaundry" id="Ulaundry" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Laundry room
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Uwasher" id="Uwasher" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Washer
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Udryer" id="Udryer" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Dryer
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Uslidoor" id="Uslidoor" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Sliding door
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Uclean" id="Uclean" value="x">
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
                                                    <input class="form-check-input" type="checkbox" name="Ucarpet" id="Ucarpet" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Carpet 
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Ucleanc" id="Ucleanc" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Clean
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Uvaccum" id="Uvaccum" value="x">
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
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="UFrooms" id="UFrooms">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Closet(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="UFclosets" id="UFclosets">
                                                </div>
                                            </div>
                                            <!--end col-->
                
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Hall(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="UFhall" id="UFhall">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Stairs/Land</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="UFstair" id="UFstair">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="UFwood" id="UFwood" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Wood Floor
                                                        <input type="text" class="form-control" style="color: #1c7bdb ;" style="width:80px;height:30px" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="UFwoodt" id="UFwoodt" maxlength="28">
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="UFtile" id="UFtile" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Tile Floor
                                                        <input type="text" class="form-control" style="color: #1c7bdb ;" style="width:80px;height:30px" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="UFtilet" id="UFtilet" maxlength="30">
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="UFvtc" id="UFvtc" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    VTC
                                                        <input type="text" class="form-control" style="color: #1c7bdb ;" style="width:80px;height:30px" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="UFvtct" id="UFvtct" maxlength="33">
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                         <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="exampleFormControlTextarea5" class="form-label">Notes</label>
                                                    <textarea class="form-control" name="Unotes" id="Unotes" style="color: #1c7bdb ;" 
                                                        rows="4" cols="41"  maxlength="164"></textarea>
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
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_plusExamplecollapse2"  aria-expanded="false" aria-controls="accor_plusExamplecollapse2"style="background-color:#bce8e8;">
                                                            Main Level
                                                        </button>
                                                    </h2>
                                                     <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Hrs of labor</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" step="0.001" oninput="mainhours()" aria-describedby="inputGroup-sizing-sm" name="Mhrs" id="Mhrs" required>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <script>
                                                        function mainhours(){
                                                          try{
                                                            
                                                            document.getElementById("Hrslabor").value = parseFloat(document.getElementById("Uhrs").value) + parseFloat(document.getElementById("Mhrs").value) + parseFloat(document.getElementById("Bhrs").value)  ;
                                                          }  catch (e) {}
                                                        }
                                                    </script>
                                                    <div id="accor_plusExamplecollapse2" class="accordion-collapse collapse " aria-labelledby="accordionwithplusExample2" data-bs-parent="#accordionWithplusicon">
                                                        <div class="accordion-body">
                                                          <div class="row gy-4">
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Room(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" step="0.001" oninput="rommbathsmain()" aria-describedby="inputGroup-sizing-sm" name="Mrooms" id="Mrooms" required>
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Closet(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Mclosets" id="Mclosets">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Bathroom(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" step="0.001" oninput="rommbathsmain()" aria-describedby="inputGroup-sizing-sm" name="Mbroms" id="Mbroms" required>
                                                </div>
                                                <script>
                                                        function rommbathsmain(){
                                                          try{
                                                            //Orooms suma
                                                            document.getElementById("Orooms").value = parseFloat(document.getElementById("Urooms").value) + parseFloat(document.getElementById("Mrooms").value) + parseFloat(document.getElementById("Brooms").value)  ;
                                                            //Obathms suma
                                                            document.getElementById("Obathms").value = parseFloat(document.getElementById("Ubroms").value) + parseFloat(document.getElementById("Mbroms").value) + parseFloat(document.getElementById("Bbroms").value)  ;
                                                          }  catch (e) {}
                                                        }
                                                    </script>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Celling fans</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Mfans" id="Mfans">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Windows</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Mwinds" id="Mwinds">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Blinds</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Mblinds" id="Mblinds">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Office room(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Mofrooms" id="Mofrooms">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Family room(s)</span>
                                                    <input type="text" class="form-control"  style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Mfamrooms" id="Mfamrooms">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mledges" id="Mledges" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Ledge(s)
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mkitchen" id="Mkitchen" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Kitchen
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mtkitchg" id="Mtkitchg" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Top Kitchen Gabinets
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mfire" id="Mfire" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Fireplace
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mgas" id="Mgas" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Gas
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mwood" id="Mwood" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Wood
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mlaundry" id="Mlaundry" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Laundry room
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mwasher" id="Mwasher" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Washer
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mdryer" id="Mdryer" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Dryer
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mlivroom" id="Mlivroom" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Living room
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mdinroom" id="Mdinroom" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Dining room
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mstove" id="Mstove" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Stove
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="MSin" id="MSin" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    in
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="MSout" id="MSout" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Out
                                                </label>
                                                </div>
                                                <div class="col-xxl-5 col-md-5">
                                                    <input class="form-control" type="text" name="MSnum" id="MSnum" style="color: #1c7bdb ;" >
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mfridge" id="Mfridge" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Fridge
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="MFin" id="MFin" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    in
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="MFout" id="MFout" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Out
                                                </label>
                                                </div>
                                                <div class="col-xxl-5 col-md-5">
                                                    <input class="form-control" type="text" name="MFnum" id="MFnum" style="color: #1c7bdb ;" >
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mdwasher" id="Mdwasher" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Dishwasher
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="MDin" id="MDin" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    in
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="MDout" id="MDout" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Out
                                                </label>
                                                </div>
                                                <div class="col-xxl-5 col-md-5">
                                                    <input class="form-control" type="text" name="MDnum" id="MDnum" style="color: #1c7bdb ;" >
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mmicro" id="Mmicro" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Microwave
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="MMin" id="MMin" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    in
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="MMout" id="MMout" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Out
                                                </label>
                                                </div>
                                                <div class="col-xxl-5 col-md-5">
                                                    <input class="form-control" type="text" name="MMnum" id="MMnum" style="color: #1c7bdb ;" >
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mslidoor" id="Mslidoor" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Sliding door
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mclean" id="Mclean" value="x">
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
                                                    <input class="form-check-input" type="checkbox" name="Mcarpet" id="Mcarpet" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Carpet 
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mcleanc" id="Mcleanc" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Clean
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Mvaccum" id="Mvaccum" value="x">
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
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="MFrooms" id="MFrooms">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Closet(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="MFclosets" id="MFclosets">
                                                </div>
                                            </div>
                                            <!--end col-->
                
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Hall(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="MFhall" id="MFhall">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Stairs/Land</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="MFstair" id="MFstair">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="MFwood" id="MFwood" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Wood Floor
                                                        <input type="text" class="form-control" style="color: #1c7bdb ;" style="width:80px;height:30px" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="MFwoodt" id="MFwoodt" maxlength="14">
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="MFtile" id="MFtile" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Tile Floor
                                                        <input type="text" class="form-control" style="color: #1c7bdb ;" style="width:80px;height:30px" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="MFtilet" id="MFtilet" maxlength="16">
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="MFvtc" id="MFvtc" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    VTC
                                                        <input type="text" class="form-control" style="color: #1c7bdb ;" style="width:80px;height:30px" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="MFvtct" id="MFvtct" maxlength="20">
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                         <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="exampleFormControlTextarea5" class="form-label">Notes</label>
                                                    <textarea class="form-control" name="Mnotes" id="Mnotes" style="color: #1c7bdb ;" 
                                                        rows="2" cols="50"  maxlength="100"></textarea>
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
                                                    <input class="form-check-input" type="checkbox" name="Bn" id="Bn" value="x">
                                                        <label class="form-check-label" for="formCheck1">
                                                            None
                                                        </label>
                                                    </div>
                                                    <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox" name="Bunfinish" id="Bunfinish" value="x">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Unfinished
                                                        </label>
                                                    </div>

                                                    <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Hrs of labor</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" step="0.001" oninput="basementhours()" name="Bhrs" id="Bhrs" required>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <script>
                                                        function basementhours(){
                                                          try{
                                                            
                                                            document.getElementById("Hrslabor").value = parseFloat(document.getElementById("Uhrs").value) + parseFloat(document.getElementById("Mhrs").value) + parseFloat(document.getElementById("Bhrs").value)  ;
                                                          }  catch (e) {}
                                                        }
                                                    </script>
                                                    <div id="accor_plusExamplecollapse3" class="accordion-collapse collapse" aria-labelledby="accordionwithplusExample3" data-bs-parent="#accordionWithplusicon">
                                                        <div class="accordion-body">
                                                          <div class="row gy-4">
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Room(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" step="0.001" oninput="rommbathsbasement()" aria-describedby="inputGroup-sizing-sm" name="Brooms" id="Brooms" required>
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Closet(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Bclosets" id="Bclosets">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Bathroom(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" step="0.001" oninput="rommbathsbasement()" aria-describedby="inputGroup-sizing-sm" name="Bbroms" id="Bbroms" required>
                                                </div>
                                                <script>
                                                        function rommbathsbasement(){
                                                          try{
                                                            //Orooms suma
                                                            document.getElementById("Orooms").value = parseFloat(document.getElementById("Urooms").value) + parseFloat(document.getElementById("Mrooms").value) + parseFloat(document.getElementById("Brooms").value)  ;
                                                            //Obathms suma
                                                            document.getElementById("Obathms").value = parseFloat(document.getElementById("Ubroms").value) + parseFloat(document.getElementById("Mbroms").value) + parseFloat(document.getElementById("Bbroms").value)  ;
                                                          }  catch (e) {}
                                                        }
                                                    </script>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Celling fans</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Bfans" id="Bfans">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Windows</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Bwinds" id="Bwinds">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Blinds</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Bblinds" id="Bblinds">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Office room(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Bofrooms" id="Bofrooms">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Family room(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Bfamrooms" id="Bfamrooms">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <!-- Base Example -->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Bledges" id="Bledges" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Ledge(s)
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Bfire" id="Bfire" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Fireplace
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Bgas" id="Bgas" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Gas
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Bwood" id="Bwood" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Wood
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Blaundry" id="Blaundry" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Laundry room
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Bwasher" id="Bwasher" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Washer
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Bdryer" id="Bdryer" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Dryer
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Bslidoor" id="Bslidoor" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Sliding door
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Bclean" id="Bclean" value="x">
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
                                                    <input class="form-check-input" type="checkbox" name="Bcarpet" id="Bcarpet" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Carpet 
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Bcleanc" id="Bcleanc" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Clean
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Bvaccum" id="Bvaccum" value="x">
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
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="BFrooms" id="BFrooms">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Closet(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="BFclosets" id="BFclosets">
                                                </div>
                                            </div>
                                            <!--end col-->
                
                                            <div class="col-xxl-1 col-md-2">
                                                <!-- Input Group Sizing -->
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Hall(s)</span>
                                                    <input type="text" class="form-control"style="color: #1c7bdb ;"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="BFhall" id="BFhall">
                                                </div>
                                                <br>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Stairs/Land</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="BFstair" id="BFstair">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="BFwood" id="BFwood" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Wood Floor
                                                        <input type="text" class="form-control" style="color: #1c7bdb ;" style="width:80px;height:30px" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="BFwoodt" id="BFwoodt"  maxlength="35">
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="BFtile" id="BFtile" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Tile Floor
                                                        <input type="text" class="form-control" style="color: #1c7bdb ;" style="width:80px;height:30px" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="BFtilet" id="BFtilet"  maxlength="37">
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="BFvtc" id="BFvtc" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    VTC
                                                        <input type="text" class="form-control" style="color: #1c7bdb ;" style="width:80px;height:30px" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="BFvtct" id="BFvtct"  maxlength="40">
                                                </label>
                                                </div>
                                            </div>                                       
                                            <!--end col-->
                                         <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="exampleFormControlTextarea5" class="form-label">Notes</label>
                                                    <textarea class="form-control" name="Bnotes" id="Bnotes" style="color: #1c7bdb ;" 
                                                        rows="2" cols="33"  maxlength="66"></textarea>
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
                                                    <input type="text" class="form-control" style="color: #1c7bdb; background-color: #b2bdc8; " aria-label="Sizing example input" step="0.001" aria-describedby="inputGroup-sizing-sm" name="Orooms" id="Orooms" required>
                                                </div>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Bathroom(s)</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ; background-color: #b2bdc8;" aria-label="Sizing example input" step="0.001" aria-describedby="inputGroup-sizing-sm" name="Obathms" id="Obathms" required>
                                                </div>
                                               
                                                <div class="border mt-3 border-dashed"></div>
                                                Extras
                                                <div class="col-xxl-1 col-md-2">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox"  name="Garage" id="Garage" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Garage
        
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Gamain" id="Gamain" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Main Level
                                                </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" name="Gabasem" id="Gabasem" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Basement
                                                </label>
                                                </div>
                                                
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox"  name="Mechroom" id="Mechroom" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Mechanical Room  
                                                    </label>
                                                    <br>
                                                    <input class="form-check-input" type="checkbox"  name="mechU" id="mechU" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Upper 
                                                    </label>
                                                    <br>
                                                    <input class="form-check-input" type="checkbox"  name="mechM" id="mechM" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Main  
                                                    </label>
                                                    <br>
                                                    <input class="form-check-input" type="checkbox"  name="mechB" id="mechB" value="x">
                                                    <label class="form-check-label" for="formCheck1">
                                                    Basement  
                                                    </label>
                                                </div>
                                                
                                            </div>                                       
                                            <!--end col-->
                                                
                                            </div>
                                            <!--end col-->
                                                
                                           
                                            <div class="col-xxl-4 col-md-6">
                                                Property has  <b>Water:</b> <input class="form-check-input" type="checkbox" name="WaterY" id="WaterY" value="x"> YES&nbsp;<input class="form-check-input" type="checkbox" name="WaterN" id="WaterN" value="x">NO&nbsp;&nbsp;
                                                <b>Energy:</b> <input class="form-check-input" type="checkbox" name="EnergyY" id="EnergyY" value="x"> YES&nbsp;<input class="form-check-input" type="checkbox" name="EnergyN" id="EnergyN" value="x">NO
                                               <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Cleaning Service: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" step="0.001" oninput="calcularcleaning()" name="Cleaprice" id="Cleaprice" required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Discount: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby=""  step="0.001" oninput="calcularcleaning()" name="Cleadisc" id="Cleadisc" required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Total: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ; background-color: #b2bdc8;" aria-label="" aria-describedby="" step="0.001"  name="Cleatotal" id="Cleatotal" required>
                                                    </div> 
                                                    <script>
                                                        function calcularcleaning(){
                                                          try{
                                                            var a = parseFloat(document.getElementById("Cleaprice").value) || 0,
                                                                b = parseFloat(document.getElementById("Cleadisc").value)|| 0;
                                                            
                                                            document.getElementById("Cleatotal").value = a - b;
                                                            //Total suma
                                                            document.getElementById("total").value = parseFloat(document.getElementById("Cleatotal").value) + parseFloat(document.getElementById("Carptotal").value) + parseFloat(document.getElementById("Wintotal").value) + parseFloat(document.getElementById("Haultotal").value) + parseFloat(document.getElementById("Washtotal").value) + parseFloat(document.getElementById("Travfree").value) ;
                                                          }  catch (e) {}
                                                        }
                                                    </script>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm" >Carpet Cleaning: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ; background-color: #b2bdc8;" aria-label="" aria-describedby="" step="0.001" oninput="calcularcarpet()" name="Carpprice"  id="Carpprice" required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Discount: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" step="0.001" oninput="calcularcarpet()" name="Carpdisc" id="Carpdisc" required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Total: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;background-color: #b2bdc8;" aria-label="" aria-describedby="" step="0.001" name="Carptotal" id="Carptotal" required>
                                                    </div> 
                                                    <script>
                                                        function calcularcarpet(){
                                                          try{
                                                            
                                                            var a = parseFloat(document.getElementById("Carpprice").value) || parseFloat(document.getElementById("Careatotal").value),
                                                                b = parseFloat(document.getElementById("Carpdisc").value)|| 0;
                                                            
                                                            document.getElementById("Carptotal").value = a - b;
                                                            //Total suma
                                                            document.getElementById("total").value = parseFloat(document.getElementById("Cleatotal").value) + parseFloat(document.getElementById("Carptotal").value) + parseFloat(document.getElementById("Wintotal").value) + parseFloat(document.getElementById("Haultotal").value) + parseFloat(document.getElementById("Washtotal").value) + parseFloat(document.getElementById("Travfree").value)  ;
                                                          }  catch (e) {}
                                                        }
                                                    </script>
                                                

                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Window Cleaning: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ; background-color: #b2bdc8;" aria-label="" aria-describedby="" step="0.001" oninput="calcularWindow()" name="Winprice" id="Winprice" required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Discount: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" step="0.001" oninput="calcularWindow()" name="Windisc" id="Windisc"required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Total: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ; background-color: #b2bdc8;" aria-label="" aria-describedby="" step="0.001" name="Wintotal" id="Wintotal" required>
                                                    </div> 
                                                    <script>
                                                        function calcularWindow(){
                                                          try{
                                                            var a = parseFloat(document.getElementById("Winprice").value) || 0,
                                                                b = parseFloat(document.getElementById("Windisc").value)|| 0;
                                                            
                                                            document.getElementById("Wintotal").value = a - b;
                                                            //Total suma
                                                            document.getElementById("total").value = parseFloat(document.getElementById("Cleatotal").value) + parseFloat(document.getElementById("Carptotal").value) + parseFloat(document.getElementById("Wintotal").value) + parseFloat(document.getElementById("Haultotal").value) + parseFloat(document.getElementById("Washtotal").value) + parseFloat(document.getElementById("Travfree").value)  ;
                                                          }  catch (e) {}
                                                        }
                                                    </script>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Hauling: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" step="0.001" oninput="calcularHauling()" name="Haulprice" id="Haulprice"required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Discount: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" step="0.001" oninput="calcularHauling()" name="Hauldisc" id="Hauldisc"required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Total: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ; background-color: #b2bdc8;" aria-label="" aria-describedby="" step="0.001" name="Haultotal" id="Haultotal" required>
                                                    </div> 
                                                    <script>
                                                        function calcularHauling(){
                                                          try{
                                                            var a = parseFloat(document.getElementById("Haulprice").value) || 0,
                                                                b = parseFloat(document.getElementById("Hauldisc").value)|| 0;
                                                            
                                                            document.getElementById("Haultotal").value = a - b;
                                                            //Total suma
                                                            document.getElementById("total").value = parseFloat(document.getElementById("Cleatotal").value) + parseFloat(document.getElementById("Carptotal").value) + parseFloat(document.getElementById("Wintotal").value) + parseFloat(document.getElementById("Haultotal").value) + parseFloat(document.getElementById("Washtotal").value) + parseFloat(document.getElementById("Travfree").value) ;
                                                          }  catch (e) {}
                                                        }
                                                    </script>

                                                <div class="input-group input-group-sm">
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="otherspec" id="otherspec" placeholder="New spec     :$" maxlength="15">
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" step="0.001" oninput="calcularotherspec()" name="Washprice" id="Washprice" required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Discount: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" step="0.001" oninput="calcularotherspec()" name="Washdisc" id="Washdisc" required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Total: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ; background-color: #b2bdc8;" aria-label="" aria-describedby="" step="0.001" name="Washtotal" id="Washtotal" required>
                                                    </div> 
                                                    <script>
                                                        function calcularotherspec(){
                                                          try{
                                                            var a = parseFloat(document.getElementById("Washprice").value) || 0,
                                                                b = parseFloat(document.getElementById("Washdisc").value)|| 0;
                                                            
                                                            document.getElementById("Washtotal").value = a - b;
                                                            //Total suma
                                                            document.getElementById("total").value = parseFloat(document.getElementById("Cleatotal").value) + parseFloat(document.getElementById("Carptotal").value) + parseFloat(document.getElementById("Wintotal").value) + parseFloat(document.getElementById("Haultotal").value) + parseFloat(document.getElementById("Washtotal").value) + parseFloat(document.getElementById("Travfree").value) ;
                                                          }  catch (e) {}
                                                        }
                                                    </script>
                                                    
                                                    <br>
                                                    <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Travel Free</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" step="0.001" oninput="totaltoal()" name="Travfree" id="Travfree" required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Transaction Free</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" step="0.001" oninput="totaltoal()" name="Tranfree" id="Tranfree" required>
                                                    </div> 
                                                    <br>
                                                    <script>
                                                        function totaltoal(){
                                                          try{
                                                            //Total suma
                                                           var sum = parseFloat(document.getElementById("Cleatotal").value) + parseFloat(document.getElementById("Carptotal").value) + parseFloat(document.getElementById("Wintotal").value) + parseFloat(document.getElementById("Haultotal").value) + parseFloat(document.getElementById("Washtotal").value) + parseFloat(document.getElementById("Travfree").value);
                                                           var a =  (sum * parseFloat(document.getElementById("Tranfree").value)) / 100;
                                                           
                                                           document.getElementById("total").value = sum + a ;
                                                            
                                          
                                                          }  catch (e) {}
                                                        }
                                                    </script>


                                                    
                                                <div class="input-group input-group-sm " >
                                                
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">total=</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ; background-color: #b2bdc8;" aria-label="" aria-describedby="" step="0.001" name="total" id="total" required>
                                                    </div> 

                                            </div>
                                            <div class="col-xxl-3 col-md-4">
                                                <br>
                                               <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Carpet areas</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" step="0.001" oninput="calcularcarpareas()" name="Careaprice" id="Careaprice" required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">x $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" step="0.001" oninput="calcularcarpareas()" name="Careapricex" id="Careapricex" required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">=</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ; background-color: #b2bdc8;" aria-label="" aria-describedby="" step="0.001" name="Careatotal" id="Careatotal" required>
                                                    </div> 
                                                    <script>
                                                        function calcularcarpareas(){
                                                          try{
                                                            var a = parseFloat(document.getElementById("Careaprice").value) || 0,
                                                                b = parseFloat(document.getElementById("Careapricex").value)|| 0;
                                                            
                                                            document.getElementById("Careatotal").value = a * b;
                                                            document.getElementById("Carpprice").value = document.getElementById("Careatotal").value ;
                                                          }  catch (e) {}
                                                        }
                                                    </script>
                                                <div class="border mt-3 border-dashed"></div>
                                                Windows:
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Front:</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" step="0.001" oninput="calcularwfront()" name="Wfront" id="Wfront"required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">x 2 =</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ; background-color: #b2bdc8;" aria-label="" aria-describedby="" step="0.001" name="Wfrontx2" id="Wfrontx2"required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">x $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" step="0.001" oninput="calcularwfront()" name="Wfrontx" id="Wfrontx"required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">=</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ; background-color: #b2bdc8;" aria-label="" aria-describedby="" step="0.001" name="Wfronttotal" id="Wfronttotal"required>
                                                    </div> 
                                                    <script>
                                                        function calcularwfront(){
                                                          try{
                                                            var a = parseFloat(document.getElementById("Wfront").value) || 0,
                                                                b = parseFloat(document.getElementById("Wfrontx").value)|| 0;
                                                            
                                                            document.getElementById("Wfrontx2").value = a * 2;
        
                                                            document.getElementById("Wfronttotal").value = document.getElementById("Wfrontx2").value * b;
                                                            // se imprime el total de cada window
                                                            document.getElementById("windowstotal").value = parseFloat(document.getElementById("Wfronttotal").value) + parseFloat(document.getElementById("Wrighttotal").value) + parseFloat(document.getElementById("Wbacktotal").value) + parseFloat(document.getElementById("Wlefttotal").value) ;
                                                            // se imprime el total de WINDOW en general
                                                            document.getElementById("Winprice").value = parseFloat(document.getElementById("Wfronttotal").value) + parseFloat(document.getElementById("Wrighttotal").value) + parseFloat(document.getElementById("Wbacktotal").value) + parseFloat(document.getElementById("Wlefttotal").value) ;
                                                            
                                                          }  catch (e) {}
                                                        }
                                                    </script>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Right:</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" step="0.001" oninput="calcularwright()" name="Wright" id="Wright" required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">x 2 =</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ; background-color: #b2bdc8;" aria-label="" aria-describedby="" step="0.001" name="Wrightx2" id="Wrightx2" required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">x $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" step="0.001" oninput="calcularwright()" name="Wrightx" id="Wrightx" required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">=</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ; background-color: #b2bdc8;" aria-label="" aria-describedby="" step="0.001" name="Wrighttotal" id="Wrighttotal" required>
                                                    </div> 
                                                    <script>
                                                        function calcularwright(){
                                                          try{
                                                            var a = parseFloat(document.getElementById("Wright").value) || 0,
                                                                b = parseFloat(document.getElementById("Wrightx").value)|| 0;
                                                            
                                                            document.getElementById("Wrightx2").value = a * 2;
        
                                                            document.getElementById("Wrighttotal").value = document.getElementById("Wrightx2").value * b;
                                                            // se imprime el total de cada window
                                                            document.getElementById("windowstotal").value = parseFloat(document.getElementById("Wfronttotal").value) + parseFloat(document.getElementById("Wrighttotal").value) + parseFloat(document.getElementById("Wbacktotal").value) + parseFloat(document.getElementById("Wlefttotal").value) ;
                                                            // se imprime el total de WINDOW en general
                                                            document.getElementById("Winprice").value = parseFloat(document.getElementById("Wfronttotal").value) + parseFloat(document.getElementById("Wrighttotal").value) + parseFloat(document.getElementById("Wbacktotal").value) + parseFloat(document.getElementById("Wlefttotal").value) ;
                                                            
                                                            
                                                          }  catch (e) {}
                                                        }
                                                    </script>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Back:</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" step="0.001" oninput="calcularwback()" name="Wback" id="Wback" required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">x 2 =</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ; background-color: #b2bdc8;" aria-label="" aria-describedby="" step="0.001" name="Wbackx2" id="Wbackx2" required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">x $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" step="0.001" oninput="calcularwback()" name="Wbackx" id="Wbackx" required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">=</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ; background-color: #b2bdc8;" aria-label="" aria-describedby="" step="0.001" name="Wbacktotal" id="Wbacktotal" required>
                                                    </div> 
                                                    <script>
                                                        function calcularwback(){
                                                          try{
                                                            var a = parseFloat(document.getElementById("Wback").value) || 0,
                                                                b = parseFloat(document.getElementById("Wbackx").value)|| 0;
                                                            
                                                            document.getElementById("Wbackx2").value = a * 2;
        
                                                            document.getElementById("Wbacktotal").value = document.getElementById("Wbackx2").value * b;
                                                            // se imprime el total de cada window
                                                            document.getElementById("windowstotal").value = parseFloat(document.getElementById("Wfronttotal").value) + parseFloat(document.getElementById("Wrighttotal").value) + parseFloat(document.getElementById("Wbacktotal").value) + parseFloat(document.getElementById("Wlefttotal").value) ;
                                                            // se imprime el total de WINDOW en general
                                                            document.getElementById("Winprice").value = parseFloat(document.getElementById("Wfronttotal").value) + parseFloat(document.getElementById("Wrighttotal").value) + parseFloat(document.getElementById("Wbacktotal").value) + parseFloat(document.getElementById("Wlefttotal").value) ;
                                                            
                                                           
                                                          }  catch (e) {}
                                                        }
                                                    </script>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Left:</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" step="0.001" oninput="calcularwleft()" name="Wleft" id="Wleft" required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">x 2 =</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ; background-color: #b2bdc8;" aria-label="" aria-describedby="" step="0.001" name="Wleftx2" id="Wleftx2" required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">x $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" step="0.001" oninput="calcularwleft()" name="Wleftx" id="Wleftx" required>
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">=</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ; background-color: #b2bdc8;"  aria-label="" aria-describedby="" step="0.001" name="Wlefttotal" id="Wlefttotal" required>
                                                    </div> 
                                                    <script>
                                                        function calcularwleft(){
                                                          try{
                                                            var a = parseFloat(document.getElementById("Wleft").value) || 0,
                                                                b = parseFloat(document.getElementById("Wleftx").value)|| 0;
                                                            
                                                            document.getElementById("Wleftx2").value = a * 2;
        
                                                            document.getElementById("Wlefttotal").value = document.getElementById("Wleftx2").value * b;
                                                            // se imprime el total de cada window
                                                            document.getElementById("windowstotal").value = parseFloat(document.getElementById("Wfronttotal").value) + parseFloat(document.getElementById("Wrighttotal").value) + parseFloat(document.getElementById("Wbacktotal").value) + parseFloat(document.getElementById("Wlefttotal").value) ;
                                                            // se imprime el total de WINDOW en general
                                                            document.getElementById("Winprice").value = parseFloat(document.getElementById("Wfronttotal").value) + parseFloat(document.getElementById("Wrighttotal").value) + parseFloat(document.getElementById("Wbacktotal").value) + parseFloat(document.getElementById("Wlefttotal").value) ;
                                                            
                                                          }  catch (e) {}
                                                        }
                                                    </script>
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Total =</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ; background-color: #b2bdc8;" aria-label="" aria-describedby="" step="0.001"  name="windowstotal" id="windowstotal" required>
                                                    </div>
                                            </div>
                                            
                                            <div class="col-xxl-3 col-md-4">
                                           
                                               
                                                <div class="border mt-3 border-dashed"></div>
                                                Office Use
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Scale:</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Scale" id="Scale">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Lead Tech:</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="Ltech" id="Ltech" maxlength="8">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Hrs of labor:</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ; background-color: #b2bdc8;" aria-label="" aria-describedby="" step="0.001" name="Hrslabor" id="Hrslabor" required>
                                                    
                                                   
                                                    </div> 
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Techs:</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="tech" id="tech"  maxlength="22">
                                                    </div> 
                                                CRM /In house <input class="form-check-input" type="checkbox" name="crminhouse" id="crminhouse" value="x">&nbsp;&nbsp;&nbsp;&nbsp; Sub-contractor<input class="form-check-input" type="checkbox" name="subcont" id="subcont" value="x">
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Sub-contactor name</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="subname" id="subname"  maxlength="10">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Pay tech: $</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="paytech" id="paytech">
                                                    
                                                   
                                                    </div> 
                                                    <br>
                                                    <div class="input-group input-group-sm">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">CRM Rep</span>
                                                    <input type="text" class="form-control" style="color: #1c7bdb ;" aria-label="" aria-describedby="" name="CRMrep" id="CRMrep"  maxlength="9">
                                                    
                                                    
                                                   
                                                    </div> 
                                            </div>
                                            
                                            <div class="col-xxl-3 col-md-4">
                                            Extra Notes: 
                                            <textarea class="form-control" id="" rows="2" cols="49"  maxlength="98" name="Extranotes" id="Extranotes" style="color: #1c7bdb ;" ></textarea>

                                            </div>
                                            <div class="hstack gap-2 justify-content-center">
                                            <div>
                                                
                                                <canvas style="border:1px solid black" id="canvas" name="imagen"></canvas>
                                               
                                            </div>
                                            </div>
                                            <!-- creamos el form para el envio -->
                                            
                                            <div class="hstack gap-2 justify-content-center">
                                                <button  class="btn btn-light" type='button' onclick='LimpiarTrazado()'><i class="  ri-refresh-line align-middle"></i></button>
                                                
                                                
                                                
                                            </div>
                                                               
                                                                     <br>
                                            
                                        </div>
                                        <!--end row-->
                            
                                    </div>
                                            


                                    <div class="d-none code-view">

                                        </div>
                                

                                        <br>
                                        <div class="col-lg ">
                                         <div class="hstack gap-2 justify-content-end">
                                               <button  type="submit" class="btn btn-success" id="btnEnviar">Generate</button>
                                                       
                                            </div>
                                                    <!--end col-->
                 
                                </div>
                                <!--end col-->
                                    </div><!-- end card-body -->
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                </div><!-- end card -->
                            </div><!--end col--> 
                    </form>
                    <div class="card-body"> 
                                        <div id="customerList">
                                            <div class="row g-4 mb-3" method="post">
                                              <!-- data select-->
                                                <div class="col-auto">
                                                    <label for="num_registros" class="col-form-label">show: </label>
                                                </div>
                                                <div class="col-auto">
                                                    <select name="num_registros" id="num_registros" class="form-select">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                </div>
                                                
                                            <!-- end data select-->  
                                                <div class="col-sm">
                                                    <div class="d-flex justify-content-sm-end">
                                                        <div class="search-box ms-2">
                                                            <input type="text" name="camposervicios" id="camposervicios" class="form-control search" placeholder="Search...">
                                                            <i class="ri-search-line search-icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="table-responsive table-card mt-3 mb-1">
                                                <table class="table align-middle table-nowrap" id="customerTable">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th scope="col" style="width: 50px;">

                                                            </th>
                                                            <th class="sort" data-sort="id">ID</th>
                                                            <th class="sort" data-sort="id">Date</th>
                                                            <th class="sort" data-sort="add">Service</th>
                                                            <th class="sort" data-sort="date">Company</th>
                                                            <th class="sort" data-sort="assishour">contact</th>
                                                            <th class="sort" data-sort="assishour">Control</th>
                                                            
                                                            
                                                             </tr>
                                                    </thead>
                                                    <tbody class="list " id="contentservices">
                                                       
                                                        
                                                    </tbody>
                                                </table>
                                            
                                            <script>
                                            let paginaActual = 1   
                                            getData(paginaActual)
                                            
                                            document.getElementById("camposervicios").addEventListener("keyup", function() {
                                                getData(1)
                                            }, false)
                                            document.getElementById("num_registros").addEventListener("change", function() {
                                                getData(paginaActual)
                                            }, false)
                                            
                                            

                                                    function getData(pagina){
                                                        let input = document.getElementById("camposervicios").value
                                                        let num_registros = document.getElementById("num_registros").value
                                                        let contentservices = document.getElementById("contentservices")

                                                        if (pagina != null) {
                                                            paginaActual = pagina
                                                        }

                                                        let url = "tablefunctions/loadservices.php";
                                                        let formaData = new FormData()
                                                        formaData.append('camposervicios', input)
                                                        formaData.append('registros', num_registros)
                                                        formaData.append('pagina', paginaActual)

                                                        fetch(url,{
                                                            method: "POST",
                                                            body: formaData
                                                        }).then(response => response.json())
                                                        .then(data => {
                                                            contentservices.innerHTML = data.data
                                                            document.getElementById("lbl-total").innerHTML = 'Showing  ' + data.totalFiltro +
                                                                ' of ' + data.totalRegistros + ' records'
                                                            document.getElementById("nav-paginacion").innerHTML = data.paginacion
                                                        }).catch(err => console.log(err))
                                                    }
                                                </script>

                                                <div class="noresult" style="display: none">
                                                    <div class="text-center">
                                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                            colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                                        </lord-icon>
                                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                                        <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                                            orders for you search.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                    <label id="lbl-total"></label>
                                                </div>
                                            <div class="d-flex justify-content-end">
                                            <div class="row">
                                                
                                                <div class="col-6" id="nav-paginacion"></div>
                                            </div>
                                            </div>
                                        </div>
                                    </div><!-- end card --> 
                  
                      
                                           
                     
                    </div>
                    <!-- container-fluid -->
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
        <script src="script.js"></script>
        <script src="btnimage.js"></script>
      
        <!-- prismjs plugin -->
        <script src="assets/libs/prismjs/prism.js"></script>
   
        <script src="assets/libs/list.pagination.js/list.pagination.min.js"></script>

       
  
        <!-- listjs init -->
     

        <!-- App js -->
        <script  src="assets/js/app.js"></script>

    </body>

</html>
