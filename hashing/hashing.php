<?php

$username="hrishi";
$ran_key=bin2hex(random_bytes(16));
$password="Abc@123";

$store=$username.$ran_key.$password;

$hash=hash("sha256",$store);

echo $hash;

//now for creating hashed password

$password="abc";
$options=[
    'cost'=>10
];
$hashed=password_hash($password,PASSWORD_BCRYPT,$options);

//tthe third parameter tells how much cost is the hashing taking  the general range is 10 or 12

//now to confirm pasword

$pwdlogin="abc";
if(password_verify($pwdlogin,$hashed)){echo "password is confirmed";}
?>