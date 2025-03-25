<?php


require_once  'includes/config_session.inc.php';
require_once 'includes/views/signup_view.inc.php';

// echo "h";
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

    <div class="signup-container">

        <h2>Sign up</h2>

        <form action="includes/signup.inc.php" method="POST">
            <input type="text" placeholder="Username" name="username">

            <input type="text" placeholder="Email" name="email">

            <input type="password" placeholder="Password" name="password">
            <br><br>
            <button type="submit" name="signupbtn">Sign Up</button>
        </form>
        <?php

        check_signup_errors();
        ?>
    </div>



</body>

</html>