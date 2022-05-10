<?php

include "connection.php";

// createUser("franlever", "Fran", "Rodriguez", "AsR-8w4T$_QB");
// echo login("franlever", "ANHAAAAAA");
// showUsers();


//crear
function createUser($username, $name, $surname, $password, $picture = null)
{
    $pdo = Connection::getInstance();

    $sql = "INSERT INTO user (`username`, `name`, `surname`, `password`, `picture`) VALUES (?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(1, $username);
    $stmt->bindParam(2, $name);
    $stmt->bindParam(3, $surname);
    $stmt->bindParam(4, $password);
    $stmt->bindParam(5, $picture);

    return $stmt->execute();
}

//editar
function editUser($id, $username, $name, $surname, $password, $picture = null)
{
    $pdo = Connection::getInstance();

    $sql = "UPDATE `user` SET `username`=?,`name`=?,`surname`=?,`password`=?,`picture`=? WHERE `id`=?";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(1, $username);
    $stmt->bindParam(2, $name);
    $stmt->bindParam(3, $surname);
    $stmt->bindParam(4, $password);
    $stmt->bindParam(5, $picture);
    $stmt->bindParam(6, $id);

    return $stmt->execute();
}

//eliminar
function deleteUserById($id)
{
    $pdo = Connection::getInstance();

    $sql = "DELETE FROM `user` WHERE `id`=?";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(1, $id);

    return $stmt->execute();
}

function getUserByCredentials($username, $password)
{
    $pdo = Connection::getInstance();

    $sql = "SELECT * FROM `user` WHERE `username` = ? AND `password` = ?";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(1, $username);
    $stmt->bindParam(2, $password);

    $stmt->execute();

    $row = $stmt->fetch();

    return $row;
}

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

function getUsers()
{
    $users = [];

    $pdo = Connection::getInstance();

    $sql = "SELECT * FROM `user`";

    $stmt = $pdo->prepare($sql);

    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $users[] = $row;
    }

    return $users;
}

function getUserJobById($id)
{
    $pdo = Connection::getInstance();

    $sql = "SELECT `id`, `pot`, `salary`, `employee_ID` FROM `job` WHERE `employee_ID` = ?";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(1, $id);

    return $stmt->execute();
}


function login($username, $password)
{
    $logged = false;
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
