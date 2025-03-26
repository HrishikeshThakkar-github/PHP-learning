<?php

require_once 'db.con.inc.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = $_POST['email'];
    $age = $_POST['age'];

    // Check for empty fields
    if (empty($name) || empty($email) || empty($age)) {
        header("Location: ../index.php?message=fill in the values");
        exit(); // Stop script execution after redirection
    }

    try {
        $query = "INSERT INTO user(name, email, age) VALUES (:name, :email, :age);";
        $stmt = $pdo->prepare($query);
        $stmt->execute(['name' => $name, 'email' => $email, 'age' => $age]);

        // Redirect after successful insertion
        header("Location: ../index.php?message=success");
        exit();
    } catch (PDOException $e) {
        // Redirect with error message if insertion fails
        header("Location: ../index.php?message=error");
        exit();
    }
}

?>
