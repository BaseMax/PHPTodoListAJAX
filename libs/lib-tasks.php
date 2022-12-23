<?php defined("CHECK") or killer("permission denied");

function getCurrentUserId()
{
}

function getAllTasks()
{
    $userId = getCurrentUserId();
    global $connection;
    $query = "SELECT * FROM tasks WHERE user_id = ?";
    $stmt = $connection->prepare($query);
    $stmt->execute([1]);
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

function deleteTask($taskId)
{
    global $connection;
    $query = "DELETE FROM tasks WHERE id = ?";
    $stmt = $connection->prepare($query);
    if ($stmt->execute([$taskId])) {
        return ["status" => true];
    } else {
        return ["status" => false];
    }
}


function completeTask($taskId)
{
    $now = date("Y-m-d H:i:s", time());
    global $connection;
    $query = "UPDATE tasks SET status = 1, updated_at = ? WHERE id = ?";
    $stmt = $connection->prepare($query);
    if ($stmt->execute([$now, $taskId])) {
        return ["status" => true];
    } else {
        return ["status" => false];
    }
}
