<?php defined("CHECK") or die("permission denied");

function killer($error)
{
    echo "<div style='font-family: sans-serif; padding: 39px; font-size: 20px; background-color: #f09898; margin: 60px; border-radius: 20px; border: 2px red solid;'>$error</div>";
    die();
}


function checker($value)
{
    $value = htmlspecialchars($value);
    $value = stripslashes($value);
    $value = trim($value);
    return $value;
}
