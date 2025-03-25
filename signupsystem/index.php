<?php


require_once  'include/config_session.inc.php';
require_once 'include/signup_view.inc.php';

echo "h";
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
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <!-- <a href="#">Forgot Password?</a> -->
            <br><br>
            <!-- <div class="remember-me">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember Me</label>
            </div> -->
            <button type = "submit" name = "signinbtn" >Sign In</button>
        </form>
        
        <!-- <a href="signup.html">New User? Sign Up</a> -->
    </div>


    <div class = "signup-container">

        <h2>Sign up</h2>

        <form action = "include/signup.inc.php" method = "Post">

            <!-- <div class="profileouter">
                <input type="file" id="profilepic" name="profilepic" style="display: none;">
    
                <label for="profilepic" class="profile">
                    <i class="fa-solid fa-user"></i>
                    <span class="tooltip">Select profile picture</span>
                </label>

            </div> -->

            <input type = "text" placeholder = "Username" name = "name" >

            <input type = "email" placeholder = "Email" name = "email" >

            <input type = "password" placeholder = "Password" name = "pwd" >
            <!-- <input type="password" placeholder="Confirm password" name="cnfrmpwd">
            <input type="text" placeholder="Contact number: 92345*****" name="cntnum"> -->
            <!-- <input type="date">
            <div class="Terms-me">
                <input type="checkbox" name="acceptterms">
                <label for="Terms">Accept Terms&conditions</label>
            </div> -->
            <br><br>

            <button type = "submit" name = "signupbtn">Sign Up</button>
        </form>
    </div>


    <?php
    
    check_signup_errors();
    ?>
</body>

</html>

