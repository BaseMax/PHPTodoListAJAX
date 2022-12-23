<?php

require_once "vendor/autoload.php";
require_once "bootstrap/constants.php";
require_once "config/config.php";
require_once "libs/helper.php";

defined("CHECK") or die("permission denied");

try {
    $connection = new PDO(
        "mysql:host=$db_config->host;dbname=$db_config->db;charset=$db_config->charset",
        $db_config->user,
        $db_config->password
    );
} catch (PDOException $e) {
    killer("Connection Failed :" . $e->getMessage());
}

require_once "libs/lib-tasks.php";
