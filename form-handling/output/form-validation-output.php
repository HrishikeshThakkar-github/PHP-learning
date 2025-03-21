<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

var_dump($_SERVER["REQUEST_METHOD"]); // Debugging
        // define variables and set to empty values
        $name = $email = $gender = $comment = $website = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            //$name = $_POST["name"];
            //this is not the proper way to take the data from the user as it might have other code that could inject db or any other things which is inappropriate
            $name=htmlspecialchars($_POST["name"]);
            $email = $_POST["email"];
            $website = $_POST["website"];
            $comment = $_POST["comment"];
            $gender = $_POST["gender"];

            if(empty($name) || empty($email) || empty($website) || empty($comment) || empty($gender)) {print_r('Error:one of the field is empty ');exit();}
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                print_r("Only letters and white space allowed");
                exit();
            }
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                print_r("incorrect url");
                exit();
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                print_r("incorrect email");
                exit();
            }
            echo "<h2>Your Input:</h2>";
            echo $name;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $website;
            echo "<br>";
            echo $comment;
            echo "<br>";
            echo $gender;


        }else{
            print_r('Error:the request_method is not valid');
                //header('location: ../form-validation.php');
        
        
        }

    ?>
</body>
</html>