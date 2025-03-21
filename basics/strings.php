<?php
echo strlen("Hello world!"), "\n";
echo str_word_count("he llo th is a wor d count"),"\n";
echo strpos("hello world","world"),"\n";
echo strtoupper("hello"),"\n";
echo strtolower("HELLO"),"\n";
echo str_replace("world","replace world","hello world"),"\n";
echo strrev(" hello world "),"\n";
echo trim(" hello world "),"\n";
//echo explode(" ","hello world");

$x="string 1";
$y= "string2";

$z1= "$x $y";
echo $z1,"\n";
$z2=$x." ".$y;
echo $z2,"\n";


$x = "Hello World!";
echo substr($x, 6, 5);

$x = "Hello World!";
echo substr($x, 6);

$x = "Hello World!";
echo substr($x, -5, 3);
?> 