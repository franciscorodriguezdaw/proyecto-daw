<?php
include "functions.php";
include "cors.php";

cors();

$users = getUsers();

$array["users"] = [];

foreach ($users as $key => $user) {
    $item = array(
        'id' => $user['id'],
        'name' => $user['name'],
        'surname' => $user['surname'],
        'username' => $user['username'],
        'password' => $user['password'],
        'picture' => base64_encode($user['picture']),
    );
    $array["users"][] = $item;
}

echo json_encode($array);