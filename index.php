<?php
require_once "bootstrap/init.php";



// if ($_SERVER["REQUEST_METHOD"] == "GET") {
//     if (
//         isset($_GET["title"]) &&
//         isset($_GET["description"]) &&
//         !empty($_GET["title"]) &&
//         !empty($_GET["description"])
//     ) {
//         $title = checker($_GET["title"]);
//         $description = checker($_GET["description"]);
//         if (
//             !empty($title) &&
//             !empty($description)
//         ) {
//             addTask($title, $description);
//         }
//     } else if (isset($_GET["delete_task"]) && is_numeric($_GET["delete_task"])) {
//         $result = deleteTask($_GET["delete_task"]);
//         if (!$result["status"]) {
//             killer("ERROR");
//         }
//     }
// }


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (
        isset($_GET["delete_task"]) &&
        is_numeric($_GET["delete_task"])
    ) {
        $result = deleteTask($_GET["delete_task"]);
        if (!$result["status"]) {
            killer("ERROR");
        }
    }
    if (
        isset($_GET["finish_task"]) &&
        is_numeric($_GET["finish_task"])
    ) {
        $result = completeTask($_GET["finish_task"]);
        if (!$result["status"]) {
            killer("ERROR");
        }
    }
}
$allTasks = getAllTasks();

require_once "views/index.php";
