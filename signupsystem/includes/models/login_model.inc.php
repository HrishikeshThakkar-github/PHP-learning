<?php

function get_user(object $pdo,string $username){
    $query="SELECT * from users WHERE username= :username ;";
    $stmt=$pdo->prepare($query);
    $stmt->execute(['username' => $username]);


    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}