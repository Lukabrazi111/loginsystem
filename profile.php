<?php
session_start();
include 'assets/includes/auto-loader.inc.php';

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
            <label>ID</label>
            <?php
                echo '<p>'. $_SESSION['user']['id'] .'</p>';
            ?>
        </div>

        <div class="form-control">
            <label>Username</label>
            <?php
                echo '<p>'. $_SESSION['user']['username'] .'</p>';
            ?>
        </div>

        <div class="form-control">
            <label>Email</label>
            <?php
                echo '<p>'. $_SESSION['user']['email'] .'</p>';
            ?>
        </div>

        <p><a href="logout.php">Logout</a></p>
    </form>
</div>
</body>
</html>
