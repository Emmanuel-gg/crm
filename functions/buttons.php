<?php
// Archivo que maneja las acciones de los botones para iniciar y terminar actividades
session_start();

require '../conexion.php';

//Obtener el id del usuario de la sesión
$user_id = $_SESSION['id'];
// Obtener la acción a realizar
$action = $mysqli->real_escape_string($_POST['action']);
// Obtener el tipo de acción a realizar
$type = $mysqli->real_escape_string($_POST['type']);
// Obtener el id del servicio si es que existe
$service_id = isset($_POST['service_id']) ? $mysqli->real_escape_string($_POST['service_id']) : null;

// Si la acción es iniciar, se inserta un nuevo registro en la tabla tasks_users_action
if($action === 'start'){
    // Si el servicio existe, se inserta el id del servicio en la tabla
    if($service_id){
        $sql = "INSERT INTO tasks_users_action (user_id, type, service_id) VALUES ('$user_id', '$type', '$service_id') ";
    }else{
        $sql = "INSERT INTO tasks_users_action (user_id, type) VALUES ('$user_id', '$type') ";
    }
    

}else{
    // Si la acción es terminar, se actualiza el registro de la tabla tasks_users_action

    // Si el servicio existe, se busca el registro de la tabla tasks_users_action que tenga el id del servicio
    if($service_id){
        $sql = "SELECT * FROM tasks_users_action WHERE user_id = $user_id AND type = '$type' AND DATE(start) = CURDATE() AND service_id = $service_id ORDER BY id DESC LIMIT 1";
    }else{
        $sql = "SELECT * FROM tasks_users_action WHERE user_id = $user_id AND type = '$type' AND DATE(start) = CURDATE() ORDER BY id DESC LIMIT 1";
    }
    
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();
    // Obtener el id del registro para actualizar
    $id = $row['id'];
    $sql = "UPDATE tasks_users_action SET finish = NOW() WHERE id = $id";

}

if($mysqli->query($sql)){
    echo json_encode(array('error' => false, 'msg' => 'success'));
}else{
    echo json_encode(array('error' => true, 'msg' => 'error'));
}
