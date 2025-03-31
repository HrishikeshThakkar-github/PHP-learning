<?php


require_once  'includes/config_session.inc.php';
require_once 'includes/views/login_view.inc.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="login-container">

        <h2>Login</h2>

        <form action="includes/login.inc.php" method="POST">

            <?php
            //signup_data();
            ?>
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <br><br>
            <button type="submit" name="loginbtn">Login</button>
        </form>
        <?php

        check_login_errors();

        ?>

        <a href="signup.php">New User? Sign Up</a>
    </div>



</body>

</html>