<?php
session_start();
require 'conexion.php';
date_default_timezone_set('America/Denver');

$consulta = "SELECT  * FROM services WHERE id='{$_GET["id"]}'"; 
$resultado = $mysqli->query($consulta);
$id = $_GET['id'];
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
                            
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Database - CRM | Images</h4>

                                   
                                </div>
                                
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="col-xl-12">
                            
                            <div class="">
                                
                                <div class="card-body">
                                
                                <div id="content_archivos">
                                <center>
                                                            <form method="post" action="upload.php" enctype="multipart/form-data" >
                                                          
                                                                <input type="file" name="imagenes[]"  multiple>
                                                                <input type="hidden" id="id_service" name="id_service" value="<?php echo $id; ?>">
                                                                             
                                                                <input type="submit" class="btn btn-soft-primary waves-effect waves-light" name="subir" value="save">
                                                            </form>
                                                            </center>
                                                                       
                                                        <?php
                                                       
                                                       
                                                        $consulta = "SELECT  * FROM images WHERE id_service = '{$_GET["id"]}' "; 
                                                        $sql = $mysqli->query($consulta);
                                                        
                                                        foreach ($sql as $value) {
                                                        ?>
                                                   
                                                        
                                                        
                                                        <div style="float: left;  margin: 3px;">
                                                        <img class="img-fluid" alt="." src="<?php echo $value['url']; ?>" width="500">       
                                                        </div>
                                                        
                                                        <?php }?>
                                                       
                                                          


                                </div>
                            </div>
                    </div>
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

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