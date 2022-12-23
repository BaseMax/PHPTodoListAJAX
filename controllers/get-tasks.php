<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/PHPTodoListWithAjax" . "/bootstrap/init.php";

if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')) {
    // not ajax
    killer("permission denied");
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $allTasks = getAllTasks();
    echo json_encode($allTasks);
}
