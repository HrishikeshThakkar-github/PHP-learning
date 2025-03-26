<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];

    try {

        require_once 'db.inc.php';
        require_once 'models/login_model.inc.php';
        require_once 'views/login_view.inc.php';
        require_once 'controllers/login_controller.inc.php';


        $errors = [];
        if (is_input_empty($username, $password)) {
            $errors["empty_input"] = "fill in the field!";
        }

        $result = get_user($pdo , $username);

        if (is_username_wrong($result)) {
            $errors["incorrect_login"] = "Incorrect login info!";
        }

        if (!is_username_wrong($result) && is_password_wrong($password,$result['password'])) {
            $errors["incorrect_password"] = "Incorrect Password!";
        }

        require_once 'config_session.inc.php';
        //this will start the session

        if ($errors) {
            $_SESSION["error_login"] = $errors;

            header("Location: ../login.php");
            die();
        }


        //the session id is appended with user id so thus creating a unique session id per user and thus enhancing security

        $newSessionId= session_create_id();
        $sessionId= $newSessionId."_".$result["id"];
        session_id($sessionId);

        $_SESSION["user_id"]=$result["id"];
        $_SESSION["user_username"]=$result["username"];
        $_SESSION["last_regeneration"]=time();
        header("Location: ../../index.php");
        $pdo=null;
        die();

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
} else {
    header("Location: ../login.php");
    exit();
}
