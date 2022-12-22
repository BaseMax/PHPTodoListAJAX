<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = checker($_POST["title"]);
    $description = checker($_POST["description"]);
    addTask($title, $description);
}
