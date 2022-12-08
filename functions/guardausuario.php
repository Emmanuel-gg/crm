<?php

session_start();
require '../conexion.php';

$nombre = $mysqli->real_escape_string($_POST['nombre']);
$usuario = $mysqli->real_escape_string($_POST['usuario']);
$password = $mysqli->real_escape_string(sha1($_POST['password']));
$tipo_usuario = $mysqli->real_escape_string($_POST['tipo_usuario']);


$sql = "INSERT INTO users (nombre, usuario, password, tipo_usuario) 
VALUES ('$nombre', '$usuario', '$password', '$tipo_usuario') ";
if($mysqli->query($sql)){
    $id = $mysqli->insert_id;

    $_SESSION['msg'] = "Saved image";

    if($_FILES['photoperfil']['error'] == UPLOAD_ERR_OK){
        $permitidos = array("image/jpg", "image/jpeg");
        if(in_array($_FILES['photoperfil']['type'], $permitidos)){

            $dir = "../assets/images/profilepictures";

            $info_img = pathinfo($_FILES['photoperfil']['name']);
            $info_img['extension'];

            $photoperfil = $dir .'/'.$id.'.jpg';

            if(!file_exists($dir)){
                mkdir($dir, 0777);
            }

            if(!move_uploaded_file($_FILES['photoperfil']['tmp_name'], $photoperfil)){
                $_SESSION['msg'] .= "<br>Error saving ";
            }
        } else {
            $_SESSION['msg'] .= "Image format not allowed ";
        }
    }
} else{
    $_SESSION['msg'] = "Error saving ";
}

header('Location: ../users.php');