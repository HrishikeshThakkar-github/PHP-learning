<?php
namespace MyNamespace;
//(no $ sign before the constant name).

//define(name, value);


// case-sensitive constant name
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

const MYCAR = "Volvo";
echo MYCAR;
/*
const vs. define()

const cannot be created inside another block scope, like inside a function or inside an if statement.
define can be created inside another block scope.
*/

//magic constants
// __LINE__ - Current line number of the file
echo "This is line number: " . __LINE__ . "\n";

// __FILE__ - Full path and filename of the file
echo "This file is located at: " . __FILE__ . "\n";

// __DIR__ - Directory of the file
echo "This file is inside the directory: " . __DIR__ . "\n";

// __FUNCTION__ - Function name
function testFunction() {
    echo "This function is called: " . __FUNCTION__ . "\n";
}
testFunction();

// __CLASS__ - Class name
class MyClass {
    public function showClassName() {
        echo "This class is called: " . __CLASS__ . "\n";
    }
}
$obj = new MyClass();
$obj->showClassName();

// __METHOD__ - Class method name
class AnotherClass {
    public function myMethod() {
        echo "This method is called: " . __METHOD__ . "\n";
    }
}
$obj2 = new AnotherClass();
$obj2->myMethod();

// __NAMESPACE__ - Current namespace name

echo "This namespace is: " . __NAMESPACE__ . "\n";

// __TRAIT__ - Trait name
trait MyTrait {
    public function showTraitName() {
        echo "This trait is called: " . __TRAIT__ . "\n";
    }
}
class UsingTrait {
    use MyTrait;
}
$obj3 = new UsingTrait();
$obj3->showTraitName();


?> 
