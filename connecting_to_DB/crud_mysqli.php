<?php
$servername = "localhost";
$username = "root";
$password = "Simform@123";
$dbname = "test_db";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 1️⃣ Create Database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully!<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select the database
$conn->select_db($dbname);

// 2️⃣ Create Table
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully!<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// 3️⃣ Insert Data
$sql = "INSERT INTO users (name, email) VALUES ('John Doe', 'john@example.com')";
if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully!<br>";
} else {
    echo "Error inserting record: " . $conn->error . "<br>";
}

// 4️⃣ Update Data
$sql = "UPDATE users SET email='john.doe@example.com' WHERE name='John Doe'";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully!<br>";
} else {
    
    echo "Error updating record: " . $conn->error . "<br>";

}

// 5️⃣ Delete Data
$sql = "DELETE FROM users WHERE name='John Doe'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully!<br>";
} else {
    echo "Error deleting record: " . $conn->error . "<br>";
}

// Close connection
$conn->close();
?>
