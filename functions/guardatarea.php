<?php

session_start();
require '../conexion.php';

//Modificado para manejar varios usuarios
$users_id = explode(',',$mysqli->real_escape_string($_POST['users_id']));
$service_id = $mysqli->real_escape_string($_POST['service_id']);

//Borrar los anteriores
$sqldelete = "DELETE FROM tasks WHERE service_id = $service_id";
$mysqli->query($sqldelete);


foreach($users_id as $user_id){
    

        $sql = "INSERT INTO tasks ( user_id, service_id ) 
        VALUES ( '$user_id', '$service_id') ";
        if($mysqli->query($sql)){
            $id = $mysqli->insert_id;
        }
        
}


header('Location: ../main.php');