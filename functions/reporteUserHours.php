<?php
session_start();
require '../conexion.php';

// Obtener datos de $_POST
$user_id = $_POST['user_id'];
$start_date = $_POST['start_date'];
$end_date = isset($_POST['end_date']) ? $_POST['end_date'] : date('Y-m-d');

// Obtener las horas de trabajo en el rango de fechas del usuario seleccionado
$sql = 
"SELECT 
t.*, s.service 
FROM tasks_users_action t 
LEFT JOIN services s ON s.id = t.service_id
WHERE t.user_id = $user_id AND DATE(t.start) BETWEEN '$start_date' AND '$end_date' ORDER BY t.finish DESC;";
$result = $mysqli->query($sql);

// Inicializar variables

// Contadores de horas
$hoursTrabajo = 0;
$hoursComida = 0;
$hoursGasolina = 0;
$hoursTienda = 0;
$hoursRuta = 0;
$hoursLimpieza = 0;

// Arreglo de acciones para la lista del reporte
$actions = [];

// Arreglo de tipos de actividades para traducir
$types = [];
$types['trabajo'] = 'Work';
$types['comida'] = 'Food';
$types['gasolina'] = 'Gas';
$types['tienda'] = 'Store';
$types['ruta'] = 'Route';
$types['limpieza'] = 'Service';

while($row = $result->fetch_assoc()){
    $action = [];
    // Si se les olvido terminar la actividad, se ignora
    if($row['finish'] === null){
        continue;
    }
    // Calcular las horas de la actividad

    // Se crea un objeto DateTime con la fecha de inicio y otra con la fecha de termino
    $start = new DateTime($row['start']);
    $finish = new DateTime($row['finish']);

    // Se calcula la diferencia entre las dos fechas
    $interval = $finish->diff($start);

    // Se calculan las horas y se redondean a 2 decimales
    $hours = $interval->format('%h') + round($interval->format('%i')/60, 2);
    
    $hoursDisplay = sprintf('%02d.%02d', (int) $hours, fmod($hours, 1) * 60);

    // Se agregan los datos a la accion
    $action["activity"] = isset($row['service']) ? $types[$row['type']] . " - " . $row["service"] : $types[$row['type']];
    $action["start"] = date('m-d-Y h:i:s', strtotime($row['start']));
    $action["hours"] = $hoursDisplay;
    $action["finish"] = date('m-d-Y h:i:s', strtotime($row['finish']));

    $actions[] = $action;

    //Dependiendo del tipo de actividad se suman las horas a su correspondiente contador
    if($row['type'] === 'trabajo'){
        $hoursTrabajo += $hours;
    }else if($row['type'] === 'comida'){
        $hoursComida += $hours;
    }else if($row['type'] === 'gasolina'){
        $hoursGasolina += $hours;
    }else if($row['type'] === 'tienda'){
        $hoursTienda += $hours;
    }else if($row['type'] === 'ruta'){
        $hoursRuta += $hours;
    }else if($row['type'] === 'limpieza'){
        $hoursLimpieza += $hours;
    }
}

$hoursComidaDisplay = sprintf('%02d.%02d', (int) $hoursComida, fmod($hoursComida, 1) * 60);
$hoursGasolinaDisplay = sprintf('%02d.%02d', (int) $hoursGasolina, fmod($hoursGasolina, 1) * 60);
$hoursTiendaDisplay = sprintf('%02d.%02d', (int) $hoursTienda, fmod($hoursTienda, 1) * 60);
$hoursRutaDisplay = sprintf('%02d.%02d', (int) $hoursRuta, fmod($hoursRuta, 1) * 60);
$hoursLimpiezaDisplay = sprintf('%02d.%02d', (int) $hoursLimpieza, fmod($hoursLimpieza, 1) * 60);
$hoursTrabajoDisplay = sprintf('%02d.%02d', (int) $hoursTrabajo, fmod($hoursTrabajo, 1) * 60);


// Se regresan los datos en formato JSON
echo json_encode([
    "actions" => $actions,
    "hoursComida" => $hoursComidaDisplay,
    "hoursGasolina" => $hoursGasolinaDisplay,
    "hoursTienda" => $hoursTiendaDisplay,
    "hoursRuta" => $hoursRutaDisplay,
    "hoursLimpieza" => $hoursLimpiezaDisplay,
    "hoursTrabajo" => $hoursTrabajoDisplay
]);
