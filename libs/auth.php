<?php defined("CHECK") or killer("permission denied");


function checkUser($email, $password)
{
    global $connection;
    $query = "SELECT * FROM users WHERE email = ? and password = ?";
    $stmt = $connection->prepare($query);
    $stmt->execute([$email, $password]);

    $user = $stmt->fetchAll();
    return $user;
}

function emailToUsername($email)
{
    $result = explode("@", $email);
    return $result[0];
}

function isLogedIn($SESSION)
{
    if (
        isset($SESSION["email"]) &&
        isset($SESSION["password"]) &&
        !empty($SESSION["email"]) &&
        !empty($SESSION["password"])
    ) {
        $email = $SESSION["email"];
        $password = $SESSION["password"];
        $user = checkUser($email, $password);
        // var_dump($user);
        if ($user) {
            return true;
        }
        return false;
    }
}

function logIn($email, $password)
{
    $username = emailToUsername($email);
    $user = checkUser($email, $password);
    if (!$user) {
        $user = register($email, $password, $username);
    }
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    return $user;
}

function register($email, $password, $username)
{
    global $connection;
    $query = "INSERT INTO users (user_name, email, password) VALUES (?,?,?)";
    $stmt = $connection->prepare($query);
    if ($stmt->execute([$username, $email, $password])) {
        return checkUser($email, $password);
    }
}

function getUserId($SESSION)
{
    $user = checkUser($SESSION["email"], $SESSION["password"]);
    if ($user) {
        // var_dump($user);
        return $user[0]["id"];
    }
}
