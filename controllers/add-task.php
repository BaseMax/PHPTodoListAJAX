<?php

// require_once $_SERVER["DOCUMENT_ROOT"] . "/PHPTodoListWithAjax" . "/bootstrap/constants.php";
// require_once $_SERVER["DOCUMENT_ROOT"] . "/PHPTodoListWithAjax" . "/libs/helper.php";
// require_once $_SERVER["DOCUMENT_ROOT"] . "/PHPTodoListWithAjax" . "/libs/lib-tasks.php";

require_once $_SERVER["DOCUMENT_ROOT"] . "/PHPTodoListWithAjax" . "/bootstrap/init.php";

if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')) {
    // not ajax
    killer("permission denied");
}
if (
    $_SERVER["REQUEST_METHOD"] == "POST" &&
    isset($_POST["title"]) &&
    isset($_POST["description"]) &&
    !empty($_POST["title"]) &&
    !empty($_POST["description"])
) {
    $title = $_POST["title"];
    $description = $_POST["description"];
    addTask($title, $description);
    $allTasks = getAllTasks();
    echo $allTasks;
    return json_encode($allTasks);
}
