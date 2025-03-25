<?php

session_start();

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username=htmlspecialchars($_POST['username']);
    $email=$_POST['email'];
    $password=$_POST['password'];
    echo $username; 
    echo $password;
    echo $email;

    try{
        
        require_once 'db.inc.php';
        require_once 'models/signup_model.inc.php';
        //require_once '../includes/views/signup_view.inc.php';
        require_once 'controllers/signup_controller.inc.php';


        $errors=[];
        if(is_input_empty($username,$email,$password)){
            $errors["empty_input"]="fill in the field!";
        }
        if(is_email_invalid($email)){
            $errors["invalid_email"]="invalid email!";
        }
        if(is_username_taken($pdo, $username)){
            $errors["empty_username"]="username already taken";
        }
        if(is_email_registerd( $pdo, $email)){
            $errors["empty_email"]="email already registerd";
        }
        
        require_once 'config_session.inc.php';
        //this will start the session

        if($errors){
            $_SESSION["error_signup"]=$errors;
            header("Location: ../signup.php");
            die();
        }
    }catch(
        PDOException $e
    ){echo $e->getMessage();}





}else{
  
    header("Location: ../signup.php");
    exit();

}



