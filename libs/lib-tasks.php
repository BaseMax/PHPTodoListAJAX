<?php defined("CHECK") or killer("permission denied");

function getAllTasks()
{
    $userId = getUserId();
    global $connection;
    $query = "SELECT * FROM tasks WHERE user_id = ?";
    $stmt = $connection->prepare($query);
    $stmt->execute([$userId]);
    return $stmt->fetchAll();
}

function addTask($title, $description)
{
    global $connection;
    $userId = getUserId();
    $query = "INSERT INTO tasks (user_id, title, description) VALUES ($userId, ?, ?);";
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
    $userId = getUserId();
    $query = "DELETE FROM tasks WHERE id = ? and user_id = $userId";
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
    $userId = getUserId();
    $query = "UPDATE tasks SET status = 1, updated_at = ? WHERE id = ? and user_id = $userId";
    $stmt = $connection->prepare($query);
    if ($stmt->execute([$now, $taskId])) {
        return ["status" => true];
    } else {
        return ["status" => false];
    }
}
