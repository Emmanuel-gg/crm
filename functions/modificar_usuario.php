<?php
session_start();
ob_start();

require '../conexion.php';
if ($_POST["id"] == 'modificar_usuario'){
    
$id = $mysqli->real_escape_string($_GET['id']);
$nombre = $mysqli->real_escape_string($_POST['nombre']);
$usuario = $mysqli->real_escape_string($_POST['usuario']);
$password = $mysqli->real_escape_string(sha1($_POST['password']));
$tipo_usuario = $mysqli->real_escape_string($_POST['tipo_usuario']);


$sql = "UPDATE users SET nombre ='$nombre', usuario='$usuario', password='$password', tipo_usuario='$tipo_usuario' WHERE id=$id  ";

if($mysqli->query($sql)){
  
} 

header('Location: ../users.php');
}