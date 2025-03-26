<?php

function is_input_empty( $username, $email, $password){
    if(empty($username) || empty($password)  || empty($email)){
        return true;
    }else{
        return false;
    }

}

function is_email_invalid( $email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }else{
        return false;
    }
}

function is_username_taken( $pdo, $username){
    if (get_username($pdo,$username)) {
        return true;
    }else{
        return false;
    }
}

function is_email_registerd( $pdo, $email){
    if (get_email($pdo,$email)) {
        return true;
    }else{
        return false;
    }
}


function create_user($pdo, $username, $email, $password){
    set_user($pdo, $username, $email, $password);

}