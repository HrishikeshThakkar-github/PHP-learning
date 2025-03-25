<?php

function check_signup_errors(){
    if(isset($_SESSION['errors_signup'])){
        $errors = $_SESSION['errors_signup'];

        echo "<br>";
        foreach($errors as $error){
            echo '<p class="errors_signup">'.$error."</p>";
        }
    }
}