<?php defined("CHECK") or killer("permission denied");


function checkUser($email, $password)
{
    global $connection;
    $query = "";
}


function isLogedIn($cookie)
{
    if (
        isset($cookie["email"]) &&
        isset($cookie["password"]) &&
        !empty($cookie["email"]) &&
        !empty($cookie["password"])
    ) {
        $email = $cookie["email"];
        $password = $cookie["password"];
    }
}
