<?php
include "functions.php";
include "cors.php";

cors();

$users = getUsers();

$array["users"] = [];

foreach ($users as $key => $user) {
    $item = array(
        'username' => $user['username'],
        'password' => $user['password']
    );
    $array["users"][] = $item;
}

echo json_encode($array);