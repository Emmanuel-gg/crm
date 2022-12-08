<?php

$mysqli = new mysqli("localhost", "root", "", "db_cleaning");

if ($mysqli->connect_error){
    die("Error de conexion" . $mysqli->connect_error);
}

date_default_timezone_set('America/Denver');
$dateservice = date('m/d/Y g:i:s a');

?>
