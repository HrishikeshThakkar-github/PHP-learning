<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = htmlspecialchars($_POST['username']);
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {

        require_once 'db.inc.php';
        require_once 'models/signup_model.inc.php';
        require_once 'controllers/signup_controller.inc.php';


        $errors = [];
        if (is_input_empty($username, $email, $password)) {
            $errors["empty_input"] = "fill in the field!";
        }
        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "invalid email!";
        }
        if (is_username_taken($pdo, $username)) {
            $errors["username_taken"] = "username already taken";
        }
        if (is_email_registerd($pdo, $email)) {
            $errors["email_taken"] = "email already registerd";
        }

        require_once 'config_session.inc.php';
        //this will start the session

        if ($errors) {
            $_SESSION["error_signup"] = $errors;

            //storing the data on sessionand frontend if an error occurs 
            $signup_data = [
                'username' => $username,
                'email' => $email
            ];
            $_SESSION['signup_data'] = $signup_data;

            header("Location: ../signup.php");
            die();
        }

        create_user($pdo, $username, $email, $password);
        header("Location: ../login.php?signup=success");
        $pdo = null;
        $stmt = null;
        die();
    } catch (
        PDOException $e
    ) {
        echo $e->getMessage();
    }
} else {

    header("Location: ../signup.php");
    exit();
}
