<?php
include "functions.php";
include "cors.php";

cors();

$received_data = json_decode(file_get_contents("php://input"));

if (createUser(
    $received_data->username,
    $received_data->name,
    $received_data->surname,
    $received_data->password,
    $received_data->picture = null,
    $received_data->observations = null
)) {
    echo "Insertado correctamente";
} else {
    echo "ERROR: no se pudo insertar al usuario";
}
