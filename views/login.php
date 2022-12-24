<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . "/PHPTodoListWithAjax" . "/bootstrap/init.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        isset($_POST["email"]) &&
        !empty($_POST["email"]) &&
        isset($_POST["password"]) &&
        !empty($_POST["password"])
    ) {
        $result =  logIn($_POST["email"], $_POST["password"]);
        header("location: ${$_SERVER['DOCUMENT_ROOT']}" . "/PHPTodoListWithAjax" . "/index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="POST">
        <h3>Login Here</h3>
        <label for="email">Email</label>
        <input type="email" placeholder="Email" id="email" name="email" />

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password" />

        <button>Log In</button>
    </form>
</body>

</html>