<?php
session_start();
ob_start();

require 'conexion.php';

if(isset($_POST['subir'])){
    
    foreach ($_FILES['imagenes']['tmp_name']as $key => $value) {
        
        $random = rand(999999,999999999999);
        $ruta = "data-images/".$random.".jpg";
        

        if(file_exists($_FILES['imagenes']['tmp_name'][$key])){
            if(move_uploaded_file($_FILES['imagenes']['tmp_name'][$key],  $ruta )){
               

              
                
                
                $id_service = $mysqli->real_escape_string($_POST['id_service']);

                $sql = $mysqli->query("INSERT INTO images (url,id_service) VALUES ('".$ruta."','".$id_service."')");
                
                
                
            }
        }
    }

}

header('Location: main.php');
?>