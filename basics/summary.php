<?php


use Basics\transaction;
include "user.php";


$transactions=[
    new transaction("abc","200","withdrawal"),
    new transaction("def","100","deposit"),
    new transaction("abc","200","deposit"),
    new transaction("def","50","withdrawal")
];

//var_dump($transactions); exit;

$users = [];

foreach ($transactions as $transaction) {
    if (!isset($users[$transaction->user])) {
        $users[$transaction->user] = new User($transaction->user);
    }
    $users[$transaction->user]->add_transaction($transaction);
}

////////////////


foreach ($users as $user) {
    var_dump($user->get_transactions());
  
}

