<?php
include "functions.php";
include "cors.php";
cors();

function Main()
{
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri = explode('/', $uri);
    $userId = null;
    if (isset($uri[3])) {
        $userId = (int) $uri[3];
    }

    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
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
                    'salary' => $user['salary'],
                    'salary_type' => $user['salary_type'],
                    'job' => $user['job'],
                    'pot' => $user['pot'],
                );
                $array["users"][] = $item;
            }
            echo json_encode($array);
            break;
        case 'POST':
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
            break;
        case 'PUT':
            echo "culo";
            break;
        case 'DELETE':

            if (deleteUserById(intval($userId))) {
                echo "Eliminado correctamente";
            } else {
                echo "ERROR: no se pudo eliminar al usuario";
            }

            break;
    }
}

Main();
