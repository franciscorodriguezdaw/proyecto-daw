<?php
include "functions.php";
include "cors.php";
cors();

var_dump($_POST);


if (createUser(
    $_POST["username"],
    $_POST["name"],
    $_POST["surname"],
    $_POST["password"],
    $_POST["picture"],
    $_POST["observations"]
)) {
    $pot = rand(10, 500) / 10;

    $userFetched = getUserByCredentials($_POST["username"], $_POST["password"]);

    var_dump($userFetched);
    
    addJobById($_POST["job"], $pot, $_POST["salary"], $_POST["salary_type"], $userFetched["id"]);
} else {
    echo "ERROR: no se pudo insertar al usuario";
}
