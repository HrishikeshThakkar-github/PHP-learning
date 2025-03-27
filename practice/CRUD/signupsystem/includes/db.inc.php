
<?php

$dsn = "mysql:host=localhost;dbname=crud;charset=utf8mb4";
$db_user = "root";  
$db_pass = "Simform@123";  

try {
    $pdo = new PDO($dsn, $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}


//display startup error
//error reporting
//display errpr to printout errors

//ini_set('display_startup_errors', 1);ini_set('display_errors', 1);error_reporting(-1);
?> 