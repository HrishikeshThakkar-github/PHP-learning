<?php 
// the built in types are :

// null
// bool
// int
// float (floating-point number)
// string
// array
// object
// callable
// resource

$a_bool=true;
$a_str  = "foo";  // a string
$a_str2 = 'foo';  // a string
$an_int = 12;     // an int

// If this is an integer, increment it by four
if (is_int($an_int)) {
    $an_int += 4;
}
var_dump($an_int);  //will give the outpu of type as well as the value

echo get_debug_type($a_bool), "\n";
echo get_debug_type($a_str), "\n";

// If $a_bool is a string, print it out
if (is_string($a_bool)) {
    echo "String: $a_bool", "\n";
}


//null
$var_null = NULL;  
var_dump($var_null);
echo is_null($var_null) , "\n";

//boolean

//boolean is false in the case wherin the integer is 0, floats is 0.0,empty string / array, unit type null

//integer
/* 
decimal     : [1-9][0-9]*(_[0-9]+)*
            | 0

hexadecimal : 0[xX][0-9a-fA-F]+(_[0-9a-fA-F]+)*

octal       : 0[oO]?[0-7]+(_[0-7]+)*

binary      : 0[bB][01]+(_[01]+)*

integer     : decimal
            | hexadecimal
            | octal
            | binary
*/


//nan

$var_result=sqrt(-1);
var_dump($var_result);

//string






//variable scope
/* 
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

function myTest2() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
  }
  myTest2();
  
  // using x outside the function will generate an error
  echo "<p>Variable x outside function is: $x</p>";

*/
$x=5 ;
$y=10;
function mytest(){
    global $x,$y;
    $y=$x + $y;
}

mytest();
echo $y , "\n";


//variable variable

$a = "hello";  // $a holds the string "hello"
$$a = "world"; // Now a variable named $hello is created with value "world"

echo "$a {$$a}", "\n"; // Output: hello world
echo "$a $hello", "\n"; // Output: hello world (same as above)

//Numbers
echo PHP_INT_MAX;
echo PHP_INT_MAX;
echo PHP_INT_SIZE;
ECHO "\n";
ECHO "\n";
var_dump( is_int($a));



$foo = 1 + "10.5";  
echo "\n",$foo;
var_dump($foo);             // $foo is float (11.5)
$foo = 1 + "-1.3e3";              // $foo is float (-1299)
echo "\n",$foo;
var_dump($foo);
$foo = 1 + "10 Small Pigs";       // $foo is integer (11) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
echo "\n",$foo;
var_dump($foo);
$foo = 4 + "10.2 Little Piggies"; // $foo is float (14.2) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
echo "\n",$foo;
var_dump($foo);
$foo = "10.0 pigs " + 1;          // $foo is float (11) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
echo "\n",$foo;
var_dump($foo);
$foo = "10.0 pigs " + "10.0 pigs ";
echo "\n",$foo;
var_dump($foo);        // $foo is float (20) 

echo "\n";

//casting

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean  for boolean the output is "1" or "0"
$e = NULL;    // NULL  for null the output we get is empty string

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String  
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;  // this will be 0
$e = (int) $e;  //  this will be 0
$f = (int) $f;
$g = (int) $g;

$y = 1 + (int)"kabir 10.1" ;
var_dump($y);  
$x = 1 + (int)"10.1 kabir" ;
var_dump($x);  
$z = 1 + (int)"10.1 ka 10.1 bir" ;
var_dump($z);  
echo $y," ",$x," ",$z
?>