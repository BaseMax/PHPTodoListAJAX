<?php

function getAllTasks()
{
    global $connection;
    $query = "SELECT * FROM tasks";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}

function addTask($title, $description)
{
    global $connection;
    $query = "INSERT INTO tasks (user_id, title, description) VALUES (1, ?, ?);";
    $stmt = $connection->prepare($query);
    if ($stmt->execute([
        $title,
        $description
    ])) {
        return ["status" => true];
    } else {
        return ["status" => false];
    }
}
