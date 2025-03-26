<?php

//only interact with db

function get_username(object $pdo,string $username){
    $query="SELECT username from users WHERE username= :username ;";
    $stmt=$pdo->prepare($query);
    $stmt->execute(['username' => $username]);


    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function get_email(object $pdo,string $email){
    $query="SELECT username from users WHERE email= :email ;";
    $stmt=$pdo->prepare($query);
    $stmt->execute(['email' => $email]);


    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user($pdo, $username, $email, $password){
    $query='INSERT INTO users (username, email, password) VALUES (:username, :email, :password);';
    $stmt=$pdo->prepare($query);

    $options=[
        'cost'=>4
    ];
    $hashed=password_hash($password,PASSWORD_BCRYPT,$options);


    $stmt->execute(['username'=> $username,'email'=> $email,'password'=> $hashed]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;

}