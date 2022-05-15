<?php
include "functions.php";
include "cors.php";

cors();

$received_data = json_decode(file_get_contents("php://input"));

// $file = file_put_contents("elpepe.txt", $received_data);

if(deleteUserById($received_data->id)){
    echo "Eliminado correctamente";
} else{
    echo "ERROR 404 xd";
}
