<?php

session_start();
require 'conexion.php';

$dir = "assets/images/profilepictures/";

if(!isset($_SESSION['id'])){
header("Location: login.php");
}

$id = $_SESSION['id'];
$nombreperfil = $_SESSION['nombre'];
$tipo_usuario = $_SESSION['tipo_usuario'];

if ($tipo_usuario == 1) {

    $where = "";

} else if ($tipo_usuario == 2) {
    $where = "WHERE id=$id";
}

$sql = "SELECT * FROM users $Where";
$resultado = $mysqli->query($sql);






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
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="17">
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
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"><?php echo $nombreperfil; ?></span>
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
                                    <h4 class="card-title mb-0 flex-grow-1">User Registration</h4>
                                </div><!-- end card header -->
                                
                                <?php if(isset($_SESSION['msg'])) { ?>
                                <!-- Warning Alert -->
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?= $_SESSION['msg']; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <?php 
                                unset($_SESSION['msg']);
                                } ?>
                                

                            <form enctype="multipart/form-data"  action="functions/guardausuario.php" method="post">
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
   
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Name</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control form-control-icon"
                                                            id="iconrightInput" placeholder="" name="nombre" id="nombre" required>
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
                                                            id="iconrightInput" placeholder="" name="usuario" id="usuario" required>
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
                                                            id="" value="" name="password" id="password" required>
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
                                                            id="iconrightInput" placeholder="example 1,2,3" name="tipo_usuario" id="tipo_usuario" maxlength="1" required>
                                                        <i class="ri-user-star-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <!-- Default File Input Example -->
                                            <div class="col-xxl-3 col-md-6">
                                                <label for="formFile" class="form-label">Photo</label>
                                                <input class="form-control" type="file" name="photoperfil" id="photoperfil" accept="image/jpeg">
                                            </div>
                                           
                                         
                               
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <br>
                                    <div class="col-lg-12 ">
                                         <div class="hstack gap-2 justify-content-end">
                                               <button type="submit" class="btn btn-primary" >add</button>
                                                            
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
                    <div class="card-body"> 
                                        <div id="customerList">
                                        <form action="" method="post">
                                            <div class="row g-4 mb-3">
                                                <div class="col-sm">
                                                    <div class="d-flex justify-content-sm-end">
                                                        <div class="search-box ms-2">
                                                            <input type="text"  name="campo" id="campo" class="form-control search" placeholder="Search...">
                                                            <i class="ri-search-line search-icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                            <div class="table-responsive table-card mt-3 mb-1">
                                                <table class="table align-middle table-nowrap" id="customerTable">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th scope="col" style="width: 50px;">

                                                            </th>
                                                            <th class="sort" data-sort="name">Name</th>
                                                            <th class="sort" data-sort="user">User</th>
                                                            <th class="sort" data-sort="pass">Password</th>
                                                            <th class="sort" data-sort="level">Level</th>
                                                            <th class="sort" data-sort="level">Edit</th>
                                                            
                                                            
                                                            </tr>
                                                    </thead>
                                                    <tbody class="list " id="content">
                                                        

                                                    </tbody>
                                                </table>

                                                <script>
                                            getData()
                                            
                                            document.getElementById("campo").addEventListener("keyup", getData)
                                            

                                                    function getData(){
                                                        let input = document.getElementById("campo").value
                                                        let content = document.getElementById("content")
                                                        let url = "tablefunctions/load.php";
                                                        let formaData = new FormData()
                                                        formaData.append('campo', input)

                                                        fetch(url,{
                                                            method: "POST",
                                                            body: formaData
                                                        }).then(response => response.json())
                                                        .then(data => {
                                                            content.innerHTML = data
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
                                            
                                            <div class="d-flex justify-content-end">
                                                <div class="pagination-wrap hstack gap-2">
                                                    <a class="page-item pagination-prev disabled" href="#">
                                                        Previous
                                                    </a>
                                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                                    <a class="page-item pagination-next" href="#">
                                                        Next
                                                    </a>
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
