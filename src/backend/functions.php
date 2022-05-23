<?php

include "connection.php";


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

    $sql = "SELECT `user`.`id`, `user`.`username`, `user`.`name`, `user`.`surname`, `user`.`password`, `user`.`picture`,
    `user`.`observations`, `job`.`job`, `job`.`salary`, `job`.`salary_type`, `job`.`pot`  FROM `user` LEFT JOIN `job` ON `user`.`id` = `job`.`employee_ID` WHERE `username` = ? AND `password` = ?";

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

//asignar trabajo por id de empleado
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

//actualizar trabajo por id de empleado
function updateJobById($job, $pot, $salary, $salary_type, $employee_ID)
{
    $pdo = Connection::getInstance();

    $sql = "UPDATE `job` SET `job`=?,`pot`=?,`salary`=?,`salary_type`=? WHERE `employee_ID`=?";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(1, $job);
    $stmt->bindParam(2, $pot);
    $stmt->bindParam(3, $salary);
    $stmt->bindParam(4, $salary_type);
    $stmt->bindParam(5, $employee_ID);

    return $stmt->execute();
}

//actualizar check-in
function insertCheckIn($id, $check_in_time)
{
    $pdo = Connection::getInstance();

    $sql = "INSERT INTO `schedule`(`employee_ID`,`check_in_time`) VALUES (?, ?)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(1, $id);
    $stmt->bindParam(2, $check_in_time);

    return $stmt->execute();
}

function updateCheckIn($id, $check_in_time)
{
    $pdo = Connection::getInstance();

    $sql = "UPDATE `schedule` SET `check_in_time` = ? WHERE `employee_ID` = ?";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(1, $check_in_time);
    $stmt->bindParam(2, $id);

    return $stmt->execute();
}

//actualizar check-out
function insertCheckOut($id, $departure_time)
{
    $pdo = Connection::getInstance();

    $sql = "INSERT INTO `schedule`(`employee_ID`,`departure_time`) VALUES (?, ?)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(1, $id);
    $stmt->bindParam(2, $departure_time);

    return $stmt->execute();
}

function updateCheckOut($id, $departure_time)
{
    $pdo = Connection::getInstance();

    $sql = "UPDATE `schedule` SET `departure_time` = ? WHERE `employee_ID` = ?";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(1, $departure_time);
    $stmt->bindParam(2, $id);

    return $stmt->execute();
}

function getCheckInOut()
{
    $pdo = Connection::getInstance();
    $checks = [];

    $sql = "SELECT * FROM schedule";
    $stmt = $pdo->query($sql);
    
    $stmt->execute();
    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $checks[] = $row;
    }
    
    return $checks;
}

function scheduleExists($id){
    
    $pdo = Connection::getInstance();

    $sql = "SELECT COUNT(*) FROM schedule WHERE employee_ID = '$id'";

    $stmt = $pdo->query($sql);

    return $stmt->fetchColumn() > 0;
}

// function login($username, $password)
// {
//     session_start();
//     $pdo = Connection::getInstance();
//     $sql = "SELECT * FROM user";
//     $stmt = $pdo->query($sql);
//     while ($row = $stmt->fetch()) {
//         if ($username == $row["username"] && $password == $row["password"]) {
//             session_start();
//             $_SESSION[$row["username"]] = $row["username"];
//             return true;
//         }
//     }
//     return false;
// }

// function logout()
// {
//     session_destroy();
// }
