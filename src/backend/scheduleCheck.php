<?php
include "functions.php";
include "cors.php";
cors();

$data = file_get_contents("php://input");
$json = json_decode($data);
date_default_timezone_set('Atlantic/Canary');
$date = date('Y-m-d H:i:s');


switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        echo json_encode(getCheckInOut());
        break;
    case 'POST':

        //check-in
        if ($json->check == "in") {
            //si tiene check-in y out asignados
            if (scheduleExists($json->id)) {
                updateCheckIn($json->id, $date);
            } else {
                insertCheckIn($json->id, $date);
            }
        }
        
        //check-out
        if ($json->check == "out") {
            //si tiene check-in y out asignados
            if (scheduleExists($json->id)) {
                updateCheckOut($json->id, $date);
            } else {
                insertCheckOut($json->id, $date);
            }
        }

        break;
}
