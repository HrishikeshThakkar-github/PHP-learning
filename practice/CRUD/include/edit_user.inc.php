<?php
require_once 'db.con.inc.php'; // Ensure database connection

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    error_log("Form submitted to edit_user.php"); // Debugging log

    if (!isset($_POST['update_user'])) {
        error_log("Submit button 'update_user' not set.");
        echo "Invalid request.";
        exit();
    }

    $id = $_POST['id'] ?? null;
    $name = htmlspecialchars($_POST['name']);
    $email = $_POST['email'];
    $age = $_POST['age'];

    // Ensure all fields are filled
    if (!$id || empty($name) || empty($email) || empty($age)) {
        error_log("Missing fields: ID=$id, Name=$name, Email=$email, Age=$age");
        echo "Missing required fields.";
        exit();
    }

    try {
        error_log("Updating user ID: $id");

        $query = "UPDATE user SET name = :name, email = :email, age = :age WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->execute(['name' => $name, 'email' => $email, 'age' => $age, 'id' => $id]);

        // Redirect after successful update
        header("Location: ../index.php?message=updated_successfully");
        exit();
    } catch (PDOException $e) {
        error_log("Update error: " . $e->getMessage());
        echo "Error updating user.";
        exit();
    }
} else {
    error_log("Invalid request: Not a POST request.");
    echo "Invalid request.";
    exit();
}
