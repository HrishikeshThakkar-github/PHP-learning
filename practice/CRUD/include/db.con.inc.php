<?php

$dsn="mysql:host=localhost;dbname=crud;charset=utf8mb4";
$username="root";
$password="Simform@123";

try{
    $pdo=new PDO($dsn,$username,$password);

}catch(PDOException $e){
    echo $e->getMessage();
}
