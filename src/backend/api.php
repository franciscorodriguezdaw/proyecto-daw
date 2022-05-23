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
                    'picture' => $user['picture'],
                    'salary' => $user['salary'],
                    'salary_type' => $user['salary_type'],
                    'observations' => $user['observations'],
                    'job' => $user['job'],
                    'pot' => $user['pot'],
                );
                $array["users"][] = $item;
            }
            echo json_encode($array);
            break;
        case 'POST':
            $data = file_get_contents("php://input");
            $user = json_decode($data);

            // var_dump($user);

            echo <<<EOF
            //     $user->job,
            //     $user->salary,
            //     $user->salary_type,
            EOF;

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
            break;
        case 'PUT':
            $data = file_get_contents("php://input");
            $user = json_decode($data);

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
