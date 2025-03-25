<?php

echo "error";

if($_SERVER["REQUEST_METHOD"]=== "POST"){
    $username=htmlspecialchars($_POST['name']);
    $pwd=$_POST['pwd'];
    $email=$_POST['email'];

    try{

        require_once 'db.inc.php';
        echo "debug";
        require_once 'signup_model.inc.php';
        require_once 'signup_controller.inc.php';


        $errors=[];
        if(is_input_empty($username,$pwd,$email)){
            $errors["empty_input"]="fill in the field!";
        }
        if(is_email_invalid($email)){
            $errors["empty_input"]="invalid email!";
        }
        if(is_username_taken($pdo, $username)){
            $errors["empty_input"]="username already taken";
        }
        if(is_email_registerd( $pdo, $email)){
            $errors["empty_input"]="email already registerd";
        }
        
        require_once 'config_session.inc.php';
        //this will start the session

        if($errors){
            $_SESSION["error_signup"]=$errors;
            header("location: ../index.php");
        }
    }catch(
        PDOException $e
    ){echo $e->getMessage();}




    echo $username; 
    echo $pwd;
    echo $email;

}else{

    echo "error";    
    //header("location: index.php");
    die();

}



