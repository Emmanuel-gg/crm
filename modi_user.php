<?php

session_start();
require 'conexion.php';

$sql = "SELECT * FROM users WHERE id='{$_GET["id"]}'";
$resultado = $mysqli->query($sql);
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
                                    <h4 class="mb-sm-0"></h4>
                                    <div class="col-lg ">
                                         <div class="hstack gap-2 justify-content-end">
                                               <a href="main.php"
                                                   class="btn btn-warning"><i class=" ri-reply-line"></i></a>
                                                            
                                            </div>
                                                    <!--end col-->
                 
                                </div>
                                <!--end col-->
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">User Edit</h4>
                                </div><!-- end card header -->
                               
                                

                            <form enctype="multipart/form-data"  action="functions/modificar_usuario.php?id=<?php echo $_GET['id']; ?>" method="post">
                            <input type="hidden" name="id" value="modificar_usuario">
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
   
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Name</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control form-control-icon"
                                                            id="iconrightInput" placeholder="" name="nombre" id="nombre" value="<?php echo $dato['nombre']; ?>" required>
                                                        <i class=" ri-user-3-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">User</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control form-control-icon"
                                                            id="iconrightInput" placeholder="" name="usuario" id="usuario" value="<?php echo $dato['usuario']; ?>" required>
                                                        <i class="ri-user-received-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Password</label>
                                                    <div class="form-icon right">
                                                        <input type="password" class="form-control form-control-icon"
                                                             name="password" id="password" value="<?php echo $dato['password']; ?>" required>
                                                        <i class=" ri-admin-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-xxl-1 col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Level</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control form-control-icon"
                                                            id="iconrightInput" placeholder="example 1,2,3" name="tipo_usuario" id="tipo_usuario" value="<?php echo $dato['tipo_usuario']; ?>" maxlength="1" required>
                                                        <i class="ri-user-star-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <!-- Default File Input Example -->
                                           
                                    </div>
                                    <br>
                                    <div class="col-lg-12 ">
                                         <div class="hstack gap-2 justify-content-center">
                                               <button type="submit" class="btn btn-warning" >Save Changes</button>
                                                            
                                            </div>
                                                    <!--end col-->
                 
                                </div>
                                <!--end col-->
                            </form>  
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                    

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
        <!-- prismjs plugin -->
        <script src="assets/libs/prismjs/prism.js"></script>
        <script src="assets/libs/list.js/list.min.js"></script>
        <script src="assets/libs/list.pagination.js/list.pagination.min.js"></script>


        <!-- listjs init -->
        <script src="assets/js/pages/listjs.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>

</html>