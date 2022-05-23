<?php
include "functions.php";
include "cors.php";
cors();

$data = file_get_contents("php://input");
$user = json_decode($data);

var_dump($user);

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

                $pot = rand(10, 500) / 10;

                $userFetched = getUserByCredentials($user->username, $user->password);

                var_dump($userFetched);
                addJobById($user->job, $pot, $user->salary, $user->salary_type, $userFetched["id"]);
            } else {
                echo "ERROR: no se pudo insertar al usuario";
            }


// <?php
// include "functions.php";
// include "cors.php";
// cors();

// var_dump(file_get_contents("php://input"));


// if (createUser(
//     $_POST["username"],
//     $_POST["name"],
//     $_POST["surname"],
//     $_POST["password"],
//     $_POST["picture"],
//     $_POST["observations"]
// )) {
//     $pot = rand(10, 500) / 10;

//     $userFetched = getUserByCredentials($_POST["username"], $_POST["password"]);

//     var_dump($userFetched);
    
//     addJobById($_POST["job"], $pot, $_POST["salary"], $_POST["salary_type"], $userFetched["id"]);
// } else {
//     echo "ERROR: no se pudo insertar al usuario";
// }
