<?php

include "connection.php";

// createUser("franlever", "Fran2", "Rodriguez2", "ANHAAAAAA");
// echo login("franlever", "ANHAAAAAA");
// showUsers();


// mostrar todos los usuarios en una tabla
function showUsers()
{
    $pdo = Connection::getInstance();
    $sql = "SELECT * FROM user";
    $stmt = $pdo->query($sql);
    while ($row = $stmt->fetch()) {
        $image = base64_encode($row['picture']);

?>
        <table>
            <tr>
                <td>
                    <h1><?php echo $row["name"] . " " . $row["surname"] ?></h1>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="data:image/png;base64,<?php echo $image ?>">
                </td>
            </tr>
        </table>
<?php
    }
}

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
    $pdo = Connection::getInstance();

    $sql = "SELECT * FROM `user`";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(1, $id);

    $stmt->execute();

    $row = $stmt->fetch();
    return $row;
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
