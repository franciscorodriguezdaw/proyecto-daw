<?php
include "functions.php";
include "cors.php";
cors();

if (createUser(
    $_POST["username"],
    $_POST["name"],
    $_POST["surname"],
    $_POST["password"],
    $_POST["picture"],
    $_POST["observations"]
)) {
    echo json_encode(getUserByCredentials($_POST["username"], $_POST["password"]));
} else {
    echo "ERROR: no se pudo insertar al usuario";
}