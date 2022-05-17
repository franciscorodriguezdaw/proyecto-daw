<?php
include "functions.php";
include "cors.php";

cors();

$received_data = json_decode(file_get_contents("php://input"));

if(deleteUserById($received_data->id)){
    echo "Eliminado correctamente";
} else{
    echo "ERROR: no se puedo eliminar al usuario";
}
