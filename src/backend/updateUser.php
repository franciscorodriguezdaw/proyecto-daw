<?php
include "functions.php";
include "cors.php";
cors();

$data = file_get_contents("php://input");
$user = json_decode($data);

var_dump($user);

if (editUser(
    $user->id,
    $user->username,
    $user->name,
    $user->surname,
    $user->password,
    $user->picture,
    $user->observations
)) {
    $pot = rand(10, 500) / 10;
    echo json_encode(getUserByCredentials($user->username, $user->password));
    updateJobById($user->job, $pot, $user->salary, $user->salary_type, $user->id);
} else {
    echo "ERROR: no se pudo editar al usuario";
}
