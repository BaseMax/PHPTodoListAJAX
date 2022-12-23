<?php

if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/PHPTodoListWithAjax" . "/vendor/autoload.php")) {
    require_once $_SERVER["DOCUMENT_ROOT"] . "/PHPTodoListWithAjax" . "/vendor/autoload.php";
}
require_once $_SERVER["DOCUMENT_ROOT"] . "/PHPTodoListWithAjax" . "/bootstrap/constants.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/PHPTodoListWithAjax" . "/config/config.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/PHPTodoListWithAjax" . "/libs/helper.php";


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

require_once $_SERVER["DOCUMENT_ROOT"] . "/PHPTodoListWithAjax" . "/libs/auth.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/PHPTodoListWithAjax" . "/libs/lib-tasks.php";
