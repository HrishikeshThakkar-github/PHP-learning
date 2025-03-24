<?php
// Database configuration
$host = "localhost";
$dbname = "pdo_demo";
$username = "root";
$password = "Simform@123";

// PDO options
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Enable exceptions for errors
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Fetch results as associative arrays
    PDO::ATTR_EMULATE_PREPARES   => false,                 // Use real prepared statements
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"    // Ensure UTF-8 encoding
];

try {
    // Create a PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password, $options);
    echo "✅ Database connected successfully! <br>";
} catch (PDOException $e) {
    die("❌ Connection failed: " . $e->getMessage());
}

// Function to create the users table if it doesn't exist
function createTable($pdo) {
    $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(100) UNIQUE NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    $pdo->exec($sql);
    echo "✅ Table 'users' is ready! <br>";
}

// Function to insert a user
function insertUser($pdo, $name, $email) {
    $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'email' => $email]);

    echo "✅ User '$name' inserted successfully! <br>";
}

// Function to fetch all users
function fetchAllUsers($pdo) {
    $sql = "SELECT * FROM users";
    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll();
    
    echo "📋 All Users: <br>";
    foreach ($users as $user) {
        echo "ID: {$user['id']}, Name: {$user['name']}, Email: {$user['email']} <br>";
    }
}

// Function to fetch a single user by email
function fetchUserByEmail($pdo, $email) {
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user) {
        echo "👤 Found User by email: ID: {$user['id']}, Name: {$user['name']}, Email: {$user['email']} <br>";
    } else {
        echo "❌ No user found with email: $email <br>";
    }
}

// Function to update user information
function updateUser($pdo, $email, $newName) {
    $sql = "UPDATE users SET name = :name WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $newName, 'email' => $email]);

    echo "✅ User with email '$email' updated to '$newName'! <br>";
}

// Function to delete a user
function deleteUser($pdo, $email) {
    $sql = "DELETE FROM users WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email' => $email]);

    echo "🗑️ User with email '$email' deleted! <br>";
}

// Function to demonstrate transactions
function transactionExample($pdo) {
    try {
        $pdo->beginTransaction();

        $stmt1 = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
        $stmt1->execute(['name' => 'Alice', 'email' => 'alice@example.com']);

        $stmt2 = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
        $stmt2->execute(['name' => 'Bob', 'email' => 'bob@example.com']);

        $pdo->commit();
        echo "✅ Transaction committed successfully! <br>";
    } catch (Exception $e) {
        $pdo->rollBack();
        echo "❌ Transaction failed: " . $e->getMessage() . "<br>";
    }
}

// Create table
createTable($pdo);

// Insert sample users
insertUser($pdo, "John Doe", "john@example.com");
insertUser($pdo, "Jane Doe", "jane@example.com");

// Fetch all users
fetchAllUsers($pdo);

// Fetch a user by email
fetchUserByEmail($pdo, "john@example.com");

// Update a user
updateUser($pdo, "john@example.com", "John Smith");

// Delete a user
deleteUser($pdo, "jane@example.com");

// Demonstrate transactions
transactionExample($pdo);

echo "the final table is:";

// Fetch all users
fetchAllUsers($pdo);

// Close the connection
$pdo = null;
echo "✅ Connection closed.";
?>
