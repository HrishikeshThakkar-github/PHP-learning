<?php


function signup_data(){
    if(isset($_SESSION['signup_data']['username']) && !isset($_SESSION['error_signup']['username_taken'])){
        echo '<input type="text" name="username" placeholder="username" value = "'.$_SESSION['signup_data']['username'].'" >';
    }else{
        echo '<input type="text" name="username" placeholder="username">';
    }

    echo '<input type="password" name="password" placeholder="Password" required>';

    if(isset($_SESSION['signup_data']['email']) && !isset($_SESSION['error_signup']['email_taken']) && !isset($_SESSION['error_signup']['invalid_email'])){
        echo '<input type="text" name="email" placeholder="email" value = "'.$_SESSION['signup_data']['email'].'" >';
    }else{
        echo '<input type="text" name="email" placeholder="email">';
    }

}

function check_signup_errors(){
    if(isset($_SESSION['error_signup'])){
        $errors = $_SESSION['error_signup'];

        echo "<br>";
        foreach($errors as $error){
            echo '<p class="errors_signup">' . $error . "</p>";
        }

        unset($_SESSION['error_signup']);
    }else{
        if(isset($_GET['signup']) && $_GET['signup'] == 'success'){
            echo '<br>';
            echo '<p class="success_signup">Signup successful</p>';
    }
    }
}
