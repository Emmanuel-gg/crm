<?php
 session_start();
 require '../conexion.php';




$columns = ['id','dateneed','address'];

$table = "services s";

/* La clave principal de la tabla. */
$id = 'id';

$user_id = $_SESSION['id'];
$type_user = $_SESSION['tipo_usuario'];

$camposervicios = isset($_POST['camposervicios']) ? $mysqli->real_escape_string($_POST['camposervicios']) : null;

$where  = '';

if($camposervicios != null){
    $where = "(";

    $cont = count ($columns);
    for($i = 0; $i < $cont; $i++ ){
        $where .= $columns[$i] . " LIKE '%". $camposervicios . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}
// Adicional para que solo muestre los servicios que le corresponden al usuario
$whereObligatorio = "";
if($_SESSION['tipo_usuario'] == 2 || $_SESSION['tipo_usuario'] == 3){
    if($where != ''){
        $where .= " AND ";
    }else{
        $where = " WHERE ";
    }
    $where .= " (SELECT COUNT(id) FROM tasks t WHERE t.user_id = " . $_SESSION['id'] . " AND t.service_id = s.id) > 0";
    $whereObligatorio .= " (SELECT COUNT(id) FROM tasks t WHERE t.user_id = " . $_SESSION['id'] . " AND t.service_id = s.id) > 0";
}

/* Limit */
$limit = isset($_POST['registros']) ? $mysqli->real_escape_string($_POST['registros']) : 10;
$pagina = isset($_POST['pagina']) ? $mysqli->real_escape_string($_POST['pagina']) : 0;

if (!$pagina) {
    $inicio = 0;
    $pagina = 1;
} else {
    $inicio = ($pagina - 1) * $limit;
}

$sLimit = "LIMIT $inicio , $limit";


$sql = "SELECT  SQL_CALC_FOUND_ROWS " . implode(", ", $columns) .  "
FROM $table
$where
ORDER BY id DESC
$sLimit";
$resultado = $mysqli->query($sql);
$num_rows = $resultado->num_rows;



/* Consulta para total de registro filtrados */
$sqlFiltro = "SELECT FOUND_ROWS()";
$resFiltro = $mysqli->query($sqlFiltro);
$row_filtro = $resFiltro->fetch_array();
$totalFiltro = $row_filtro[0];

/* Consulta para total de registro filtrados */
$sqlTotal = "SELECT count($id) FROM $table where $whereObligatorio";
$resTotal = $mysqli->query($sqlTotal);
$row_total = $resTotal->fetch_array();
$totalRegistros = $row_total[0];

/* Mostrado resultados */
$output = [];
$output['totalRegistros'] = $totalRegistros;
$output['totalFiltro'] = $totalFiltro;
$output['data'] = '';
$output['paginacion'] = '';




if($num_rows > 0){
    // Saber si el usuario comenzo o termino de trabajar
    $sql = "SELECT * FROM tasks_users_action WHERE user_id = $user_id AND type = 'trabajo' AND DATE(start) = CURDATE() ORDER BY id DESC LIMIT 1";
    $res = $mysqli->query($sql);
    $comenzoTrabajo = $res->num_rows > 0;
    $task = $res->fetch_assoc();
    $terminoTrabajo = isset($task['finish']);
while($row = $resultado->fetch_assoc()){
    
   // Saber si el usuario comenzo o termino una ruta 
   $sql = "SELECT * FROM tasks_users_action WHERE user_id = $user_id AND type = 'ruta' AND service_id = ".$row['id']." ORDER BY id DESC LIMIT 1";
   $res = $mysqli->query($sql);
   $comenzoRuta = $res->num_rows > 0;
   $task = $res->fetch_assoc();
   $terminoRuta = isset($task['finish']);

   // Saber si el usuario comenzo o termino una limpieza
   $sql = "SELECT * FROM tasks_users_action WHERE user_id = $user_id AND type = 'limpieza' AND service_id = ".$row['id']." ORDER BY id DESC LIMIT 1";
   $res = $mysqli->query($sql);
   $comenzoLimpieza = $res->num_rows > 0;
   $task = $res->fetch_assoc();
   $terminoLimpieza = isset($task['finish']);


   $output['data'] .= '<tr>';
   $output['data'] .= '<td>&nbsp;</td>';
   $output['data'] .= '<td>'.$row['id'].'</td>';
   $output['data'] .= '<td>'.date('m/d/Y g:i:s a ',strtotime($row['dateneed'])).'</td>';
   $output['data'] .= '<td>'.$row['address'].'</td>';
   $output['data'] .= '<td>

 
   <a type="button" class="btn  btn-soft-dark edit-item-btn" href="servicetaskpdf.php?id= '.$row['id'].'" target="_blank"><i class="  ri-file-text-line"></i></a>

   <a type="button" class="btn btn-soft-warning waves-effect waves-light carpeta"  href="data.php?id='.$row['id'].'"'. ((!$comenzoLimpieza || $terminoLimpieza) ? 'style="display:none"' : '') .' ><i class="ri-folder-open-line"></i></a>
   <button class="btn  btn-success remove-item-btn" data-bs-toggle="modal" id="start-ruta-'.$row['id'].'_btn" data-bs-target="#routemodal" '. (((($terminoTrabajo || !$comenzoTrabajo)) || ($comenzoRuta)) ? 'style="display:none"' : '') .'>Start Route</button>
   <button class="btn  btn-warning remove-item-btn" data-bs-toggle="modal" id="finish-ruta-'.$row['id'].'_btn" data-bs-target="#endroutemodal" '. (((($terminoTrabajo || !$comenzoTrabajo)) || !$comenzoRuta || $terminoRuta) ? 'style="display:none"' : '') .'>End Route</button>
   <div class="alert alert-warning terminoLimpieza" style="'. ($terminoLimpieza ? 'display: inline-block !important;' : 'display: none !important;') .'">Finished service</div>

   <button class="btn  btn-success remove-item-btn" data-bs-toggle="modal" id="start-limpieza-'.$row['id'].'_btn" data-bs-target="#startsismodal" '. (((($terminoTrabajo || !$comenzoTrabajo) && $type_user == 2) || $comenzoLimpieza || (!$terminoRuta && $type_user == 2) ) ? 'style="display:none"' : '') .'>Start Service</button>
   <button class="btn  btn-warning remove-item-btn" data-bs-toggle="modal" id="finish-limpieza-'.$row['id'].'_btn" data-bs-target="#endsismodal" '. (((($terminoTrabajo || !$comenzoTrabajo) && $type_user == 2) || !$comenzoLimpieza || $terminoLimpieza) ? 'style="display:none"' : '') .'>End Service</button>
   
   <a type="button" class="btn btn-soft-info waves-effect waves-light firma"   href="request.php?id='.$row['id'].'"'. ((!$comenzoLimpieza || $terminoLimpieza) ? 'style="display:none"' : '') .'><i class="mdi mdi-draw-pen"></i></a>
 
    
    
                </p>' ;
   $output['data'] .= '</tr>';
}

} else{
   $output['data'] .= '<tr>';
   $output['data'] .= '<td colspan="4">Sorry! No Result Found</td>';
   $output['data'] .= '</tr>';
}

if ($output['totalRegistros'] > 0) {
    $totalPaginas = ceil($output['totalRegistros'] / $limit);

    $output['paginacion'] .= '<nav>';
    $output['paginacion'] .= '<ul class="pagination">';

    $numeroInicio = 1;

    if(($pagina - 4) > 1){
        $numeroInicio = $pagina - 4;
    }

    $numeroFin = $numeroInicio + 9;

    if($numeroFin > $totalPaginas){
        $numeroFin = $totalPaginas;
    }

    for ($i = $numeroInicio; $i <= $numeroFin; $i++) {
        if ($pagina == $i) {
            $output['paginacion'] .= '<li class="page-item active"><a class="page-link" href="#">' . $i . '</a></li>';
        } else {
            $output['paginacion'] .= '<li class="page-item"><a class="page-link" href="#" onclick="getData(' . $i . ')">' . $i . '</a></li>';
        }
    }

    $output['paginacion'] .= '</ul>';
    $output['paginacion'] .= '</nav>';
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);






?>
