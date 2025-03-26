<?php


require_once  'includes/config_session.inc.php';
require_once 'includes/views/signup_view.inc.php';


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

            <?php
                signup_data();
            ?>
            <br><br>
            <button type="submit" name="signupbtn">Sign Up</button>
        </form>
        <?php

        check_signup_errors();
        ?>
    </div>



</body>

</html>