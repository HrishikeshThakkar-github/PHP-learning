<?php


$host = "localhost";
$dbname = "pdo_signup";
$username = "root";
$password = "Simform@123";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password, $options);
    echo "✅ Database connected successfully! <br>";
} catch (PDOException $e) {
    die("❌ Connection failed: " . $e->getMessage());
}


