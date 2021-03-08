<?php
session_start();
include 'assets/includes/auto-loader.inc.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new User();
    $user->userSignIn($username, $password);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
          integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" rel="stylesheet">
    <script src="assets/js/app.js" defer></script>
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Registration Form</title>
</head>
<body>
<div class="container">
    <div class="container__header">
        <h2>Sign in</h2>
    </div>
    <form class="form" id="form" method="post">
        <div class="form-control">
            <label>Username</label>
            <input id="username" type="text" name="username">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error Message</small>
        </div>

        <div class="form-control">
            <label>Password</label>
            <input id="password" type="password" name="password">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error Message</small>
        </div>

        <button class="btn" id="btn" name="submit" type="submit">Login</button>

        <p>You don't have an account? - <a href="register.php"> Register</a>!</p>
    </form>

    <?php
        if (isset($_SESSION['message'])) {
            echo '<p class="error">'. $_SESSION['message'] .'</p>';
        }
        unset($_SESSION['message']);

        if (isset($_SESSION['message_success'])) {
            echo '<p class="success">'. $_SESSION['message_success'] .'</p>';
        }
        unset($_SESSION['message_success']);
    ?>
</div>
</body>
</html>
