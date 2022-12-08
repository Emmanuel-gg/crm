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
// Consulta para saber si el usuario ya inicio el dia
$sql = "SELECT * FROM tasks_users_action WHERE user_id = $id AND type = 'trabajo' AND DATE(start) = CURDATE() ORDER BY id DESC LIMIT 1";
$res = $mysqli->query($sql);
$comenzoTrabajo = $res->num_rows > 0;
$task = $res->fetch_assoc();
$terminoTrabajo = isset($task['finish']);

// Consulta para saber si esta en su receso de comida
$sql = "SELECT * FROM tasks_users_action WHERE user_id = $id AND type = 'comida' AND DATE(start) = CURDATE() ORDER BY id DESC LIMIT 1";
$res = $mysqli->query($sql);
$comenzoComida = $res->num_rows > 0;
$task = $res->fetch_assoc();
$terminoComida = isset($task['finish']);

// Consulta para saber si el usuario comprando algo en la tienda
$sql = "SELECT * FROM tasks_users_action WHERE user_id = $id AND type = 'tienda' AND DATE(start) = CURDATE() ORDER BY id DESC LIMIT 1";
$res = $mysqli->query($sql);
$comenzoTienda = $res->num_rows > 0;
$task = $res->fetch_assoc();
$terminoTienda = isset($task['finish']);

// Consulta para saber si el usuario esta llenando el tanque de gasolina
$sql = "SELECT * FROM tasks_users_action WHERE user_id = $id AND type = 'gasolina' AND DATE(start) = CURDATE() ORDER BY id DESC LIMIT 1";
$res = $mysqli->query($sql);
$comenzoGasolina = $res->num_rows > 0;
$task = $res->fetch_assoc();
$terminoGasolina = isset($task['finish']);
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
       

            <header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex"> 
                <!-- LOGO -->
               



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
                                <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Main assistant</span>
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
                                    <h4 class="mb-sm-0">services</h4>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    

                                    <div class="card-body">
                                        <div id="customerList">
                                            <div class="d-flex gap-2">
                                            <?php if ($tipo_usuario == 2) {  ?>
                                                <div class="col-sm-auto">
                                                    <div>
                                                        <?php 
                                                        //Ocultar botones si ya termino su dia de trabajo
                                                        if(!$terminoTrabajo){ 
                                                        ?>
                                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="start-trabajo_btn" data-bs-target="#startdaymodal" <?php if($comenzoTrabajo) { echo 'style="display:none"'; }?>>Start day</button>
                                                            <button type="button" class="btn btn-warning delete-btn" data-bs-toggle="modal" id="finish-trabajo_btn" data-bs-target="#enddaymodal" <?php if(!$comenzoTrabajo) { echo 'style="display:none"'; }?>>End day</button>
                                                        <?php } ?>
                                                        
                                                    </div>
                                                </div>                                      
                                            <?php }  ?>
                                                <div class="col-sm-auto">
                                                    <div>
                                                        <!-- Id para el funcionamiento del boton de inicio y fin del receso de comida -->
                                                        <button type="button" class="btn btn-info add-btn" data-bs-toggle="modal" id="start-comida_btn"  data-bs-target="#lunchmodal" <?php if((($terminoTrabajo || !$comenzoTrabajo) && $tipo_usuario == 2) || ($comenzoComida && !$terminoComida)) { echo 'style="display:none"'; }?>><i class=" bx bx-bowl-hot "></i></button>
                                                        <button type="button" class="btn btn-warning add-btn" data-bs-toggle="modal" id="finish-comida_btn"  data-bs-target="#endlunchmodal"  <?php if((($terminoTrabajo || !$comenzoTrabajo) && $tipo_usuario == 2) ||  (!$comenzoComida) || ($comenzoComida && $terminoComida)) { echo 'style="display:none"'; }?>><i class=" bx bx-bowl-hot "></i></button>
                                                    </div>
                                                </div>
                                                <?php if ($tipo_usuario == 2 || $tipo_usuario == 3) {  ?>
                                                <div class="col-sm-auto">
                                                    <div>
                                                        <!-- Id para el funcionamiento del boton de inicio y fin de la ida a la tienda -->
                                                        <button type="button" class="btn btn-primary add-btn" data-bs-toggle="modal" id="start-tienda_btn" data-bs-target="#shopmodal" <?php if($terminoTrabajo || !$comenzoTrabajo || ($comenzoTienda && !$terminoTienda)) { echo 'style="display:none"'; }?>><i class="  ri-shopping-basket-2-line "></i></button>
                                                        <button type="button" class="btn btn-warning add-btn" data-bs-toggle="modal" id="finish-tienda_btn" data-bs-target="#endshopmodal" <?php if($terminoTrabajo || !$comenzoTrabajo || (!$comenzoTienda) || ($comenzoTienda && $terminoTienda)) { echo 'style="display:none"'; }?>><i class="  ri-shopping-basket-2-line "></i></button>
                                                    </div>
                                                </div>
                                                <?php }  ?>
                                                <?php if ($tipo_usuario == 2) {  ?>
                                                <div class="col-sm-auto">
                                                    <div>
                                                        <!-- Id para el funcionamiento del boton de inicio y fin del receso de la ida a la estación de servicio -->
                                                        <button type="button" class="btn btn-dark add-btn" data-bs-toggle="modal" id="start-gasolina_btn" data-bs-target="#gasmodal" <?php if($terminoTrabajo || !$comenzoTrabajo || ($comenzoGasolina && !$terminoGasolina)) { echo 'style="display:none"'; }?>><i class="   ri-gas-station-line "></i></button>
                                                        <button type="button" class="btn btn-warning add-btn" data-bs-toggle="modal" id="finish-gasolina_btn" data-bs-target="#endgasmodal" <?php if($terminoTrabajo || !$comenzoTrabajo || (!$comenzoGasolina) || ($comenzoGasolina && $terminoGasolina)) { echo 'style="display:none"'; }?>><i class="   ri-gas-station-line "></i></button>
                                                    </div>
                                                </div>
                                                <?php }  ?>
                                                
                                            </div>
                                            
                                            <br>
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
                                                            <th class="sort" data-sort="add">Date</th>
                                                            <th class="sort" data-sort="date">Address</th>
                                                            <th class="sort" data-sort="assishour">Functions</th>
                                                            
                                                            
                                                            </tr>
                                                    </thead>
                                                    <tbody class="list" id="contentservicestask">
                                                        
                                                        
                                                    </tbody>
                                                </table>
                                                <script>
                                            var paginaActual = 1   
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
                                                        let contentservicestask = document.getElementById("contentservicestask")

                                                        if (pagina != null) {
                                                            paginaActual = pagina
                                                        }

                                                        let url = "tablefunctions/loadservicesmain.php";
                                                        let formaData = new FormData()
                                                        formaData.append('camposervicios', input)
                                                        formaData.append('registros', num_registros)
                                                        formaData.append('pagina', paginaActual)

                                                        fetch(url,{
                                                            method: "POST",
                                                            body: formaData
                                                        }).then(response => response.json())
                                                        .then(data => {
                                                            contentservicestask.innerHTML = data.data
                                                            document.getElementById("lbl-total").innerHTML = 'Showing  ' + data.totalFiltro +
                                                                ' of ' + data.totalRegistros + ' records'
                                                            document.getElementById("nav-paginacion").innerHTML = data.paginacion

                                                            // Agregar evento click a los botones de cada servicio despues de cargar la tabla

                                                            document.querySelectorAll('[id*=start-ruta-], [id*=finish-ruta-], [id*=start-limpieza-], [id*=finish-limpieza-]').forEach((element) => {
                                                                element.addEventListener('click', function (e) {
                                                                    const id = element.id.split('_')[0].split('-')[2];
                                                                    service_id = id;
                                                                });
                                                                
                                                            });
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
                                <!-- end col -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->


                        <!-- Modal ROUTES -->
                        <div class="modal fade zoomIn" id="routemodal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mt-2 text-center">
                                            <lord-icon src="https://cdn.lordicon.com/zzcjjxew.json" trigger="loop"
                                                colors="primary:#08a88a,secondary:#121331" style="width:100px;height:100px"></lord-icon>
                                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                <h4>Start Route</h4>
                                                <p class="text-muted mx-4 mb-0">Do you want to start a route?</p>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-lg-12">
                                            <br>
                                                        <div class="hstack gap-2 justify-content-end">
                                                                            <button type="button" class="btn btn-light" id="start-ruta_cerrar-modal" data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-success" id="start-ruta">Start Route</button>
                                                                        </div>
                                                                    </div><!--end col-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end modal -->

                        <!-- Modal END ROUTES -->
                        <div class="modal fade zoomIn" id="endroutemodal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mt-2 text-center">
                                            <lord-icon src="https://cdn.lordicon.com/zzcjjxew.json" trigger="loop"
                                                colors="primary:#08a88a,secondary:#121331" style="width:100px;height:100px"></lord-icon>
                                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                <h4>Start Route</h4>
                                                <p class="text-muted mx-4 mb-0">Do you want to end a route?</p>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-lg-12">
                                            <br>
                                                        <div class="hstack gap-2 justify-content-end">
                                                                            <button type="button" class="btn btn-light" id="finish-ruta_cerrar-modal" data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-success" id="finish-ruta">End Route</button>
                                                                        </div>
                                                                    </div><!--end col-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end modal -->
                        
                        
                        
                        <!-- Modal ser start -->
                        <div class="modal fade" id="startsismodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center p-5">
                                                                <lord-icon
                                                                    src="https://cdn.lordicon.com/kbtmbyzy.json"
                                                                    trigger="loop"
                                                                    colors="primary:#121331,secondary:#08a88a"
                                                                    style="width:120px;height:120px">
                                                                </lord-icon>
                                                                
                                                                <div class="mt-4">
                                                                    <h3 class="mb-3">Do you want to start the service?</h3>
                                                                    <div class="hstack gap-2 justify-content-center">
                                                                        <a href="javascript:void(0);" id="start-limpieza_cerrar-modal" class="btn btn-link link-secondary fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                                                                        <a href="javascript:void(0);" id="start-limpieza" class="btn btn-success">Start</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        <!--end modal -->
                        
                        <!-- Modal ser end -->
                        <div class="modal fade" id="endsismodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center p-5">
                                                                <lord-icon
                                                                    src="https://cdn.lordicon.com/lupuorrc.json"
                                                                    trigger="loop"
                                                                    colors="primary:#121331,secondary:#08a88a"
                                                                    style="width:120px;height:120px">
                                                                </lord-icon>
                                                                
                                                                <div class="mt-4">
                                                                    <h3 class="mb-3">You've made it!</h3>
                                                                    <p class="text-muted mb-4"> Are you sure you want to finish the service?</p>
                                                                    <p class="text-muted mb-4"> is a signature required?</p>
                                                                    <div style="border:1px solid black ">
                                                                    
                                                                    <div class="hstack gap-2 justify-content-center">
                                                                        <a href="javascript:void(0);" id="finish-limpieza_cerrar-modal" class="btn btn-link link-secondary fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                                                                        <a href="javascript:void(0);" id="finish-limpieza" class="btn btn-success">Completed</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                            </div>
                        <!--end modal -->
                        <!-- Modal start day -->
                        <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="" id="startdaymodal" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center p-5">
                                                                <lord-icon src="https://cdn.lordicon.com/ssdupzsv.json"
                                                                    trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:120px;height:120px">
                                                                </lord-icon>
                                                                <div class="mt-4">
                                                                    <h3 class="mb-3">You are about to start a new day!</h3>
                                                                    <div class="hstack gap-2 justify-content-center">
                                                                        <button type="button" class="btn btn-light" id="start-trabajo_cerrar-modal" data-bs-dismiss="modal">Close</button>
                                                                        <a href="javascript:void(0);" id="start-trabajo" class="btn btn-success">Start</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                        <!-- Modal end day -->
                        <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="" id="enddaymodal" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center p-5">
                                                                <lord-icon src="https://cdn.lordicon.com/rcopausw.json"
                                                                    trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:120px;height:120px">
                                                                </lord-icon>
                                                                <div class="mt-4">
                                                                    <h3 class="mb-3">You are about to finish your day ? </h3>
                                                                    <p class="text-muted mb-4"> see you tomorrow.</p>
                                                                    <div class="hstack gap-2 justify-content-center">
                                                                        <button type="button" class="btn btn-light" id="finish-trabajo_cerrar-modal" data-bs-dismiss="modal">Close</button>
                                                                        <a href="javascript:void(0);" id="finish-trabajo" class="btn btn-success">finish day</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                        <!-- Modal start lunch -->
                        <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="" id="lunchmodal" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center p-5">
                                                                <lord-icon src="https://cdn.lordicon.com/xbyoroeu.json"
                                                                    trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:120px;height:120px">
                                                                </lord-icon>
                                                                <div class="mt-4">
                                                                    <h3 class="mb-3">enjoy your meal!</h3>
                                                                    <p class="text-muted mb-4"> remember that you have 30 min only.</p>
                                                                    <div class="hstack gap-2 justify-content-center">
                                                                        <button type="button" class="btn btn-light" id="start-comida_cerrar-modal" data-bs-dismiss="modal">Close</button>
                                                                        <a href="javascript:void(0);" id="start-comida" class="btn btn-success">Start</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                                <!-- Modal finish lunch -->
                        <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="" id="endlunchmodal" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center p-5">
                                                                <lord-icon src="https://cdn.lordicon.com/xbyoroeu.json"
                                                                    trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:120px;height:120px">
                                                                </lord-icon>
                                                                <div class="mt-4">
                                                                    <h3 class="mb-3">Do you want to go on with your day?</h3>
                                                                    <div class="hstack gap-2 justify-content-center">
                                                                        <button type="button" class="btn btn-light" id="finish-comida_cerrar-modal" data-bs-dismiss="modal">Close</button>
                                                                        <a href="javascript:void(0);" id="finish-comida" class="btn btn-success">Continue</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                        <!-- Modal shop -->
                        <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="" id="shopmodal" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center p-5">
                                                                <lord-icon src="https://cdn.lordicon.com/gmzxduhd.json"
                                                                    trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:120px;height:120px">
                                                                </lord-icon>
                                                                <div class="mt-4">
                                                                    <h3 class="mb-3">Shop/CRM</h3>
                                                                    <p class="text-muted mb-4"> Do you want to start a route?</p>
                                                                    <div class="hstack gap-2 justify-content-center">
                                                                        <button type="button" class="btn btn-light" id="start-tienda_cerrar-modal" data-bs-dismiss="modal">Close</button>
                                                                        <a href="javascript:void(0);" id="start-tienda" class="btn btn-success">Start</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                                <!-- Modal End shop -->
                                                <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="" id="endshopmodal" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center p-5">
                                                                <lord-icon src="https://cdn.lordicon.com/gmzxduhd.json"
                                                                    trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:120px;height:120px">
                                                                </lord-icon>
                                                                <div class="mt-4">
                                                                    <h3 class="mb-3">Shop/CRM</h3>
                                                                    <p class="text-muted mb-4"> Did you finish shopping??</p>
                                                                    <div class="hstack gap-2 justify-content-center">
                                                                        <button type="button" class="btn btn-light" id="finish-tienda_cerrar-modal" data-bs-dismiss="modal">Close</button>
                                                                        <a href="javascript:void(0);" id="finish-tienda" class="btn btn-success">Finish</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                        <!-- Modal gas -->
                        <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="" id="gasmodal" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center p-5">

                                                                <div class="mt-4">
                                                                    <h3 class="mb-3">Gas station</h3>
                                                                    <p class="text-muted mb-4"> Do you want to start a route?</p>
                                                                    <div class="hstack gap-2 justify-content-center">
                                                                        <button type="button" class="btn btn-light" id="start-gasolina_cerrar-modal" data-bs-dismiss="modal">Close</button>
                                                                        <a href="javascript:void(0);" id="start-gasolina" class="btn btn-success">Start</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->

                                                <!-- Modal end gas -->
                                                <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="" id="endgasmodal" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center p-5">

                                                                <div class="mt-4">
                                                                    <h3 class="mb-3">Gas station</h3>
                                                                    <p class="text-muted mb-4"> End of your route?</p>
                                                                    <div class="hstack gap-2 justify-content-center">
                                                                        <button type="button" class="btn btn-light" id="finish-gasolina_cerrar-modal" data-bs-dismiss="modal">Close</button>
                                                                        <a href="javascript:void(0);" id="finish-gasolina" class="btn btn-success">Finish</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                        <!-- Modal data -->
                        <div class="modal fade" id="dataserv" tabindex="-1" aria-labelledby="varyingcontentModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title fw-bold" id="varyingcontentModalLabel">Database</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                
                                                                
                                                        
                                                            </div>
                                                            <div class="modal-footer">
                                                                
                                                                <button type="file" class="btn btn-primary ">upload file</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        <!--end modal -->

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
        <!-- prismjs plugin -->
        <script src="assets/libs/prismjs/prism.js"></script>
        <script src="assets/libs/list.js/list.min.js"></script>
        <script src="assets/libs/list.pagination.js/list.pagination.min.js"></script>

        <!-- listjs init -->
        <script src="assets/js/pages/listjs.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

        <!-- Main Services js, Script de funcionamiento personalizado de esta pagina -->
        <script src="main_services.js"></script>
    </body>

</html>