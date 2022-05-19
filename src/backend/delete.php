<?php
include "functions.php";
include "cors.php";
cors();


$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );

// the user id is, of course, optional and must be a number:
$userId = null;
if (isset($uri[2])) {
    $userId = (int) $uri[2];
}

if(deleteUserById(intval($userId))){
    echo "Eliminado correctamente";
} else{
    echo "ERROR: no se puedo eliminar al usuario";
}
