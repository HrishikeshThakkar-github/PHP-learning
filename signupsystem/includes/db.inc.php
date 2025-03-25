
<?php

$dsn ="mysql:host=localhost;dbname=signup_sys;charset=utf8mb4";
$username = "root";
$password = "Simform@123";


try{
    $pdo=new PDO($dsn,$username,$password);
    $pdo->setAttribute(pdo::ATTR_ERRMODE,pdo::ERRMODE_EXCEPTION);
    //echo "connected";
}catch(PDOException $e){echo $e->getMessage();}

?> 