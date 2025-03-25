<?php

function check_signup_errors(){
    if(isset($_SESSION['error_signup'])){
        $errors = $_SESSION['error_signup'];

        echo "<br>";
        foreach($errors as $error){
            echo '<p class="errors_signup">' . $error . "</p>";
        }

        unset($_SESSION['error_signup']);
    }
}