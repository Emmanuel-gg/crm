<?php
session_start();
require 'conexion.php';
date_default_timezone_set('America/Denver');

$consulta = "SELECT  * FROM services WHERE id='{$_GET["id"]}'"; 
$resultado = $mysqli->query($consulta);
$id = $_GET['id'];

// Obtener los usuarios de tipo 2 y 3
$users = [];
$sqluserselect = "SELECT id, nombre FROM users WHERE tipo_usuario IN (2,3)";
$usersselect = $mysqli->query($sqluserselect);
while($user = $usersselect->fetch_assoc()){ 
    $users[] = $user;
}

$users_id = [];
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
                                               <a href="main.php"
                                                   class="btn btn-soft-primary waves-effect waves-light"><i class=" ri-reply-line"></i></a>
                                                            
                                            </div>
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">CRM | SEND SERVICE</h4>

                                   
                                </div>
                                
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="col-xl-12">
                            
                            <div class="card">
                                <div class="card-body">
                                    <div id="usuarios_seleccionados" class="row">
                                    <?php
                                    // Obtener los usuarios asignados a el servicio actual
                                    $sqluserstask = "SELECT user_id FROM tasks WHERE service_id = $id";
                                    $userstask = $mysqli->query($sqluserstask);
                                    while($userTask = $userstask->fetch_assoc()){ 
                                        // Obtener el indice del usuario en el array de usuarios
                                        $userIndex = array_search($userTask["user_id"], array_column($users, 'id'));
                                        // Obtener el usuario
                                        $user = $users[$userIndex];
                                        //Agregar el id del usuario a un array
                                        $users_id[] = $userTask["user_id"];
                                    ?>
                                    <!-- Mostrar el usuario en una tarjeta -->
                                    <div class="col-sm-auto" id="<?php echo $user["id"]."_".$user["nombre"] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title
                                                "><?php echo $user["nombre"]?></h5>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>

                                </div> 
                                <div id="content_archivos">
                                <center>
                                                           
                                <form action="functions/guardatarea.php" method="post">
                                                                     <div class="col-xxl-12 col-md" >
                                                                        <div >
                                                                            <label for="" class="" >Send service to:</label>
                                                                            <input type="text" hidden name="users_id" id="users_id" value=<?php echo implode(',',$users_id)?>>
                                                                            <select name="user_id" id="user_id"  class="form-select form-select-sm mb-3" aria-label=".form-select-sm example"  >
                                                                                <option value="">Select user</option>
                                                                                <?php foreach($users as $row_nombre){   ?>
                                                                                    <option  value="<?php echo $row_nombre ["id"]; ?>"><?= $row_nombre ["nombre"] ?></option>
                                                                                    <?php } ?>

                                                                            </select>
                                                                         
                                                                            
                                                                            

                                                                        </div>
                                                                    </div>
                                                                    <!--end col hidden-->
                                                                    
                                                                    <input  name="service_id" type="hidden" id="service_id "value="<?php echo $id; ?>">
                                                                    
                                                                        
                                                                
                                                            </div>
                                                                    <br>
                                                                    <div class="hstack gap-2 justify-content-center">
                                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                        <button  type="submit" class="btn btn-success">Send</button>
                                                                    </div>
                                                                    </form>
                                                       
                                                        </center>   


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

                <!-- JAVASCRIPT -->
                <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>                                                                    
                <script src="tasks.js"></script>
