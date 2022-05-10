<?php

include "functions.php";
// include "cors.php";

// cors();

$data = json_decode(file_get_contents("php://input"));

var_dump($data);

// $request = $data->request;

// if ($request == 1) {
//     $username = $data->username;
//     $password = $data->password;

//     $user = getUserByCredentials($username, $password);

//     if ($user) {
//         $response[] = array('status' => 1);
//     } else {
//         $response[] = array('status' => 0);
//     }
//     login($data->username, $data->password);
//     echo json_encode($response);

//     exit;
// }
