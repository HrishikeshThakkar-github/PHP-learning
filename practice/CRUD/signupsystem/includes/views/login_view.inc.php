<?php

function check_login_errors(){
    if(isset($_SESSION['error_login'])){
        $errors = $_SESSION['error_login'];

        echo "<br>";
        foreach($errors as $error){
            echo '<p class="errors_login">' . $error . "</p>";
        }

        unset($_SESSION['error_login']);
    }else{
        if(isset($_GET['login']) && $_GET['login'] == 'success'){
            echo '<br>';
            echo '<p class="success_login">login successful</p>';
    }
    }
}
