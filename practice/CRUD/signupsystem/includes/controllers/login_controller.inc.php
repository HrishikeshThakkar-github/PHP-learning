<?php


function is_input_empty( $username, $email){
    if(empty($username) || empty($email)){
        return true;
    }else{
        return false;
    }

}


//for this function the written type is of type array or boolean so we can write it as array|bool
function is_username_wrong( $result){
    if(!$result){
        return true;
    }else{
        return false;
    }
 
}

function is_password_wrong( $password , $hashed ){
    if(!password_verify($password , $hashed)){
        return true;
    }else{
        return false;
    }
 
}

function isAdmin(string $role)
{
    if ($role === "admin") {
        return true;
    } else {
        return false;
    }
}