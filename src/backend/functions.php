<?php

include "connection.php";

// createUser("franlever", "Fran", "Rodriguez", "AsR-8w4T$_QB");
// echo login("franlever", "AsR-8w4T$_QB");
// getUsers();

//ultimo valor -> id de empleado -> tiene que existir en la BD
//addJobById(17, 150, 1739, 3);


//crear empleado
function createUser($username, $name, $surname, $password, $picture, $observations)
{
    $pdo = Connection::getInstance();

    $sql = "INSERT INTO user (`username`, `name`, `surname`, `password`, `picture`, `observations`) VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(1, $username);
    $stmt->bindParam(2, $name);
    $stmt->bindParam(3, $surname);
    $stmt->bindParam(4, $password);
    $stmt->bindParam(5, $picture);
    $stmt->bindParam(6, $observations);

    return $stmt->execute();
}

//editar empleado
function editUser($id, $username, $name, $surname, $password, $picture, $observations)
{
    $pdo = Connection::getInstance();

    $sql = "UPDATE `user` SET `username`=?,`name`=?,`surname`=?,`password`=?,`picture`=?,`observations`=? WHERE `id`=?";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(1, $username);
    $stmt->bindParam(2, $name);
    $stmt->bindParam(3, $surname);
    $stmt->bindParam(4, $password);
    $stmt->bindParam(5, $picture);
    $stmt->bindParam(6, $observations);
    $stmt->bindParam(7, $id);

    return $stmt->execute();
}

//eliminar
function deleteUserById($id)
{
    $pdo = Connection::getInstance();
    $sql = "SELECT * FROM `job` WHERE `employee_ID` = $id";
    $stmt = $pdo->query($sql);
    
    if ($stmt->rowCount() > 0) {
        $sql = "DELETE FROM `job` WHERE `employee_ID` = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }

    $sql2 = "DELETE FROM `user` WHERE `id`=?";
    $stmt2 = $pdo->prepare($sql2);
    $stmt2->bindParam(1, $id);

    return $stmt2->execute();
}

//obtener empleado por nombre de usuario y contraseña
function getUserByCredentials($username, $password)
{
    $pdo = Connection::getInstance();

    $sql = "SELECT * FROM `user` WHERE `username` = ? AND `password` = ?";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(1, $username);
    $stmt->bindParam(2, $password);

    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

//obtener empleado por id
function getUserById($id)
{
    $pdo = Connection::getInstance();

    $sql = "SELECT * FROM `user` WHERE `id` = ?";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(1, $id);

    $stmt->execute();

    $row = $stmt->fetch();
    return $row;
}

//obtener usuarios
function getUsers()
{
    $users = [];

    $pdo = Connection::getInstance();

    $sql = "SELECT `user`.`id`, `user`.`username`, `user`.`name`, `user`.`surname`, `user`.`password`, `user`.`picture`,
    `user`.`observations`, `job`.`job`, `job`.`salary`, `job`.`salary_type`, `job`.`pot`  FROM `user` LEFT JOIN `job` ON `user`.`id` = `job`.`employee_ID`;";

    $stmt = $pdo->prepare($sql);

    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $users[] = $row;
    }

    return $users;
}

//obtener trabajo por id de empleado
function getUserJobById($id)
{
    $pdo = Connection::getInstance();

    $sql = "SELECT `id`, `job`, `pot`, `salary`, `salary_type`, `employee_ID` FROM `job` WHERE `employee_ID` = ?";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(1, $id);

    return $stmt->execute();
}

function addJobById($job, $pot, $salary, $salary_type, $employee_ID)
{
    $pdo = Connection::getInstance();

    $sql = "INSERT INTO `job`(`job`,  `pot`, `salary`, `salary_type`, `employee_ID`) VALUES (?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(1, $job);
    $stmt->bindParam(2, $pot);
    $stmt->bindParam(3, $salary);
    $stmt->bindParam(4, $salary_type);
    $stmt->bindParam(5, $employee_ID);

    return $stmt->execute();
}


function updateCheckIn($id, $check_in_time)
{
    $pdo = Connection::getInstance();

    $sql = "INSERT INTO `schedule`(`employee_ID`,`check_in_time`) VALUES (?, ?)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(1, $id);
    $stmt->bindParam(2, $check_in_time);

    return $stmt->execute();
}

function updateCheckOut($id, $departure_time)
{
    $pdo = Connection::getInstance();

    $sql = "INSERT INTO `schedule`(`employee_ID`,`departure_time`) VALUES (?, ?)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(1, $id);
    $stmt->bindParam(2, $departure_time);

    return $stmt->execute();
}

function addPot($id, $pot)
{
    $pdo = Connection::getInstance();

    $sql = "INSERT INTO `job`(`employee_ID`,`pot`) VALUES (?, ?)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(1, $id);
    $stmt->bindParam(2, $pot);

    return $stmt->execute();
}

function login($username, $password)
{
    session_start();
    $pdo = Connection::getInstance();
    $sql = "SELECT * FROM user";
    $stmt = $pdo->query($sql);
    while ($row = $stmt->fetch()) {
        if ($username == $row["username"] && $password == $row["password"]) {
            session_start();
            $_SESSION[$row["username"]] = $row["username"];
            return true;
        }
    }
    return false;
}

function logout()
{
    session_destroy();
}
