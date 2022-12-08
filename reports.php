<?php

session_start();
require 'conexion.php';
$dir = "assets/images/profilepictures/";
if(!isset($_SESSION['id'])){
header("Location: login.php");
}

$id = $_SESSION['id'];
$nombre = $_SESSION['nombre'];
$tipo_usuario = $_SESSION['tipo_usuario'];

//Obtener los usuarios de tipo 2 y 3
$sql = "SELECT id, nombre FROM users WHERE tipo_usuario = 2 OR tipo_usuario = 3";
$result = $mysqli->query($sql);
$users = array();
while($row = $result->fetch_assoc()){
    // Agregar a un array
    $users[] = $row;
}

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

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                    id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

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

                <div class="dropdown d-md-none topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                        id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="bx bx-search fs-22"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                        aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


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
                                <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">All users</span>
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
            <div class="app-menu navbar-menu">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <!-- Dark Logo-->
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="17">
                        </span>
                    </a>
                    <!-- Light Logo-->
                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="17">
                        </span>
                    </a>
                    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                        <i class="ri-record-circle-line"></i>
                    </button>
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
                                    <h4 class="mb-sm-0">Reports</h4>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- form reporte horas de un usuario -->
                                        <form id="reporte" method="POST">
                                            <div class="live-preview">
                                                <div class="row gy-4">
                                                    <div class="col-xxl-3 col-md-6">
                                                        <label for="user_id" class="form-label">User</label>
                                                        <select class="form-select" name="user_id" id="user_id" required>
                                                            <option value="" selected>Choose...</option>
                                                            <?php
                                                                foreach ($users as $user) {
                                                                    echo "<option value='".$user['id']."'>".$user['nombre']."</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-xxl-3 col-md-5">
                                                        <label for="start_date" class="form-label">From</label> 
                                                        <input type="date" style="color: #1c7bdb ;" class="form-control" data-provider="flatpickr" value="" data-date-format="m d, Y" data-enable-time name="start_date"  id="start_date"  required>
                                                    </div>
                                                    <div class="col-xxl-3 col-md-5">
                                                        <label for="end_date" class="form-label">Until</label> 
                                                        <input type="date" style="color: #1c7bdb ;" class="form-control" data-provider="flatpickr" value="" data-date-format="m d, Y" data-enable-time name="end_date"  id="end_date"  required>
                                                    </div>
                                                    <br>
                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-center">
                                                            <button type="submit" class="btn btn-warning" >Send</button>      
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3" id="colWorkedHours" style="display:none">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex text-center">
                                        <h4 class="card-title mb-0 flex-grow-1">
                                            Worked hours
                                        </h4>
                                    </div>
                                    
                                    <div class="card-body text-center">
                                        0
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3" id="colGasHours" style="display:none">
                                <div class="card" >
                                    <div class="card-header align-items-center d-flex text-center">
                                        <h4 class="card-title mb-0 flex-grow-1">
                                            Gas Station hours
                                        </h4>
                                    </div>
                                    
                                    <div class="card-body text-center">
                                        0
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3" id="colFoodHours" style="display:none">
                                <div class="card" >
                                    <div class="card-header align-items-center d-flex text-center">
                                        <h4 class="card-title mb-0 flex-grow-1">
                                            Food hours
                                        </h4>
                                    </div>
                                    
                                    <div class="card-body text-center">
                                        0
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3" id="colShopHours" style="display:none">
                                <div class="card" >
                                    <div class="card-header align-items-center d-flex text-center">
                                        <h4 class="card-title mb-0 flex-grow-1">
                                            Shopping hours
                                        </h4>
                                    </div>
                                    
                                    <div class="card-body text-center">
                                        0
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3" id="colCleanHours" style="display:none">
                                <div class="card" >
                                    <div class="card-header align-items-center d-flex text-center">
                                        <h4 class="card-title mb-0 flex-grow-1">
                                            Cleaning hours
                                        </h4>
                                    </div>
                                    
                                    <div class="card-body text-center">
                                        0
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3" id="colRouteHours" style="display:none">
                                <div class="card" >
                                    <div class="card-header align-items-center d-flex text-center">
                                        <h4 class="card-title mb-0 flex-grow-1">
                                            Hours in route
                                        </h4>
                                    </div>
                                    
                                    <div class="card-body text-center">
                                        0
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12" id="colTableActions" style="display:none">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Start</th>
                                                        <th>Finish</th>
                                                        <th>Hours</th>
                                                        <th>Activity</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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

        

        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->



        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="assets/js/plugins.js"></script>
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>

        <script>
            const url = window.location.href.split('/').slice(0, -1).join('/');
            const urlUserHours = url + '/functions/reporteUserHours.php';

            const endDateField = document.getElementById('end_date');
            endDateField.value = new Date().toISOString().slice(0, 10);

            // formulario reporte
            const formularioReporte = document.getElementById('reporte');

            formularioReporte.addEventListener('submit', (e) => {
                e.preventDefault();
                const formData = new FormData(formularioReporte);
                
                fetch(urlUserHours, {
                    method: 'POST',
                    body: formData
                })
                .then(res => res.json())
                .then(data => {
                    console.log(data);
                    if (!data.error) {
                        const workedHours = document.getElementById('colWorkedHours');
                        const gasHours = document.getElementById('colGasHours');
                        const foodHours = document.getElementById('colFoodHours');
                        const shopHours = document.getElementById('colShopHours');
                        const cleanHours = document.getElementById('colCleanHours');
                        const routeHours = document.getElementById('colRouteHours');
                        const tableActions = document.getElementById('colTableActions');
                        const tableActionsBody = tableActions.querySelector('tbody');
                        
                        tableActionsBody.innerHTML = '';

                        workedHours.style.display = 'block';
                        gasHours.style.display = 'block';
                        foodHours.style.display = 'block';
                        shopHours.style.display = 'block';
                        cleanHours.style.display = 'block';
                        routeHours.style.display = 'block';
                        tableActions.style.display = 'block';

                        // Solo dejar 2 decimales
                        workedHours.querySelector('.card-body').innerHTML = data.hoursTrabajo;
                        gasHours.querySelector('.card-body').innerHTML = data.hoursGasolina;
                        foodHours.querySelector('.card-body').innerHTML =data.hoursComida;
                        shopHours.querySelector('.card-body').innerHTML = data.hoursTienda;
                        cleanHours.querySelector('.card-body').innerHTML = data.hoursLimpieza;
                        routeHours.querySelector('.card-body').innerHTML = data.hoursRuta;
                        data.actions.forEach(action => {
                            const row = document.createElement('tr');
                            row.innerHTML = `
                                <td>${action.start}</td>
                                <td>${action.finish}</td>
                                <td>${action.hours}</td>
                                <td>${action.activity}</td>
                            `;
                            tableActionsBody.appendChild(row);
                        });


                    }
                });
            });
        </script>
    </body>

</html>