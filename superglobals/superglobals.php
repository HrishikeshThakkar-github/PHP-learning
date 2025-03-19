<?php
//$GLOBALS
function test()
{
    $foo = "local variable";

    echo '$foo in global scope: ' . $GLOBALS["foo"] . "\n";
    echo '$foo in current scope: ' . $foo . "\n";
}

$foo = "Example content";
test();


echo $_SERVER['PHP_SELF'];
//echo $_SERVER['SERVER_NAME'];
echo php_uname(); // Provides OS and Host information
/*
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "User IP Address: " . $_SERVER['REMOTE_ADDR'] . "<br>";
echo "User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo "Script Path: " . $_SERVER['SCRIPT_FILENAME'] . "<br>";
*/



?>