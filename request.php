<?php
session_start();
require 'conexion.php';
date_default_timezone_set('America/Denver');

$consulta = "SELECT  * FROM services WHERE id='{$_GET["id"]}'"; 
$resultado = $mysqli->query($consulta);
$id = $_GET['id'];
$dato = $resultado->fetch_array();
?>
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
     
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                            <div class="hstack gap-2 justify-content-end">
                                               <a href="main_services.php"
                                                   class="btn btn-soft-primary waves-effect waves-light"><i class=" ri-reply-line"></i></a>
                                                            
                                            </div>
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Database - CRM | signature</h4>

                                   
                                </div>
                                
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="col-xl-12">
                            
                            <div class="card">
                                
                                <div class="card-body">
                                
                                <div id="content_archivos">
                        
                                <center>
                                <!-- Rounded Ribbon -->
<div class="card ribbon-box border shadow-none mb-lg-0">
    <div class="card-body">
        <div class="ribbon ribbon-primary round-shape"><?php echo $dato['contact']; ?></div>
        <h5 class="fs-14 text-end"><strong>ADDRESS :</strong> <?php echo $dato['address']; ?>  <?php echo $dato['city']; ?>  <?php echo $dato['zip']; ?></h5>
        <div class="ribbon-content mt-4 ">
            <p class="mb-0"><strong>SERVICE :</strong> <?php echo $dato['service']; ?> </p>
        </div>
    </div>
</div>
                                                            </center>
                                                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">                           
                                                            <form enctype="multipart/form-data"  action="functions/modificar_firma.php?id=<?php echo $dato['id']; ?>" method="post" id="formeditservicio"> 
                                                            <input type="hidden" name="id" value="modificar_firma">
                                                            <br>
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
                                                   <button  type="submit" class="btn btn-success" >Generate</button>
                                                           
                                                </div>
                                                        <!--end col-->
                                                          

                                                            </form>
                                </div>
                            </div>
                    </div>
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                </div>
                </div>
                </div>
                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Velzon.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->




                      



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


        <script src="script.js"></script>
        <script src="btnimageUPD.js"></script>