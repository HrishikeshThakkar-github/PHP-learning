<?php
require 'db.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        // Fetch user from the database
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            echo "✅ Login successful! Welcome, " . $user['name'];
            echo "<a href='home.html'>GO to home page</a>";
        } else {
            echo "❌ Invalid email or password.";
        }
    } catch (PDOException $e) {
        echo "❌ Login failed: " . $e->getMessage();
    }
}
?>
