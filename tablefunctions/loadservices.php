<?php
 require '../conexion.php';
$columns = ['id','dateservice','service','company','contact'];

$table = "services";

/* La clave principal de la tabla. */
$id = 'id';

$camposervicios = isset($_POST['camposervicios']) ? $mysqli->real_escape_string($_POST['camposervicios']) : null;

$where = '';

if($camposervicios != null){
    $where = "WHERE (";

    $cont = count ($columns);
    for($i = 0; $i < $cont; $i++ ){
        $where .= $columns[$i] . " LIKE '%". $camposervicios . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
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
$sqlTotal = "SELECT count($id) FROM $table ";
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
while($row = $resultado->fetch_assoc()){
   $output['data'] .= '<tr>';
   $output['data'] .= '<td>&nbsp;</td>';
   $output['data'] .= '<td>'.$row['id'].'</td>';
   $output['data'] .= '<td>'.date('m/d/Y g:i:s a ',strtotime($row['dateservice'])).'</td>';
   $output['data'] .= '<td>'.$row['service'].'</td>';
   $output['data'] .= '<td>'.$row['company'].'</td>';
   $output['data'] .= '<td>'.$row['contact'].'</td>';
   $output['data'] .= '<td>

    <a type="button" class="btn btn-soft-primary waves-effect waves-light" href="servicepdf.php?id= '.$row['id'].'" target="_blank"><i class=" ri-file-text-line"></i></a>
    <a href="modi_serv.php?id= '.$row['id'].'" class="btn btn-soft-danger waves-effect waves-light" ><i class=" ri-edit-box-line  "></i></a>
    <a type="button" class="btn btn-soft-warning waves-effect waves-light"   href="data.php?id= '.$row['id'].'"><i class="ri-folder-open-line"></i></a>
    <a type="button" class="btn btn-soft-success waves-effect waves-light" href="tasks.php?id= '.$row['id'].'"><i class="ri-arrow-go-forward-fill "></i></a>
    
    
                </td>' ;
   $output['data'] .= '</tr>';
}

} else{
   $output['data'] .= '<tr>';
   $output['data'] .= '<td colspan="6">Sorry! No Result Found</td>';
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
