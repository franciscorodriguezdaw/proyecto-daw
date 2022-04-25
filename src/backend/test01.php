<?php

include "functions.php";

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS, post, get');
header("Access-Control-Max-Age", "3600");
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
header("Access-Control-Allow-Credentials", "true");

$data = json_decode(file_get_contents("php://input"));

$request = $data->request;

if ($request == 1) {
    $username = $data->username;
    $password = $data->password;

    $user = getUserByCredentials($username, $password);

    if ($user) {
        $response[] = array('status' => 1);
        session_start();
        $_SESSION["username"] = $data->username;
        $_SESSION["password"] = $data->password;
    } else {
        $response[] = array('status' => 0);
    }
    echo json_encode($response);

    exit;
}
