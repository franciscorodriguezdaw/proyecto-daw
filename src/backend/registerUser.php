<?php
include "functions.php";
include "cors.php";
cors();

$data = file_get_contents("php://input");
$user = json_decode($data);

if (createUser(
    $user->username,
    $user->name,
    $user->surname,
    $user->password,
    $user->picture,
    $user->observations
)) {
    echo json_encode(getUserByCredentials($user->username, $user->password));
} else {
    echo "ERROR: no se pudo insertar al usuario";
}
