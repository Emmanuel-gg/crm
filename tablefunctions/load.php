<?php

 require '../conexion.php';

$columns = ['nombre','usuario','password','tipo_usuario','id'];
$table = "users";

$campo = isset($_POST['campo']) ? $mysqli->real_escape_string($_POST['campo']) : null;

$where = '';

if($campo != null){
    $where = "WHERE (";

    $cont = count ($columns);
    for($i = 0; $i < $cont; $i++ ){
        $where .= $columns[$i] . " LIKE '%". $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}


$sql = "SELECT " . implode(", ", $columns) . "
FROM $table
$where ";
$resultado = $mysqli->query($sql);
$num_rows = $resultado->num_rows;


$html = '';

if($num_rows > 0){
while($row = $resultado->fetch_assoc()){
    $html .= '<tr>';
    $html .= '<td>&nbsp;</td>';
    $html .= '<td>'.$row['nombre'].'</td>';
    $html .= '<td>'.$row['usuario'].'</td>';
    $html .= '<td>'.$row['password'].'</td>';
    $html .= '<td>'.$row['tipo_usuario'].'</td>';
    $html .= '<td>
    <a href="modi_user.php?id= '.$row['id'].'" class="btn btn-soft-danger waves-effect waves-light" ><i class=" ri-edit-box-line  "></i></a>

             </td>' ;
    $html .= '</tr>';
}
} else{
    $html .= '<tr>';
    $html .= '<td colspan="6">Sorry! No Result Found</td>';
    $html .= '</tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);






?>