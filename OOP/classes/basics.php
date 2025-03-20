<?php
readonly class Car {
    public string $brand; // Must have a type

    public function __construct(string $brand) {
        $this->brand = $brand; // Allowed: Setting property in the constructor
    }
}

$car = new Car("Toyota");
echo $car->brand; // Output: Toyota

$car->brand = "Honda"; // ❌ Fatal Error: Cannot modify readonly property Car::$brand

// note:
// Properties must have a type (no untyped properties).
// No static properties are allowed.
// No dynamic properties (you cannot create new properties at runtime).
// Child classes must also be readonly.


class Car2 {}
$className = Car2::class; //The ::class constant in PHP returns the fully qualified class name (FQCN) as a string
$car = new $className(); // Equivalent to: new Car()
var_dump($car instanceof Car2); // Output: bool(true)


class SimpleClass {
    public string $var;
}

$instance = new SimpleClass(); // Creates a new object in memory

$assigned   =  $instance;  // Creates a new variable pointing to the same object
//Points to the same object, but is not linked to $instance itself. So when $instance is set to null, $assigned still holds the original object.
$reference  =& $instance;  // Creates a reference to $instance
//True reference to $instance. When $instance is set to null, $reference also becomes null.


$instance->var = '$assigned will have this value'; 

$instance = null; // $instance and $reference become null

var_dump($instance);  // NULL
var_dump($reference); // NULL
var_dump($assigned);  // Still holds the object



//-------------------methods to create object-----------------------------------

class Test
{
    public static function getNew()
    {
        return new static();
    }
}

class Child extends Test {}

$obj1 = new Test(); // By the class name
$obj2 = new $obj1(); // Through the variable containing an object
var_dump($obj1 !== $obj2);

$obj3 = Test::getNew(); // By the class method
var_dump($obj3 instanceof Test);

$obj4 = Child::getNew(); // Through a child class method
var_dump($obj4 instanceof Child);

class Foo
{
    public $bar = 'property';
    
    public function bar() {
        return 'method';
    }
}

$obj = new Foo();
echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL;

//OUTPUT
//property
//method


//Calling an anonymous function stored in a property
class Foo
{
    public $bar;
    
    public function __construct() {
        $this->bar = function() {
            return 42;
        };
    }
}

$obj = new Foo();

echo ($obj->bar)();

class SimpleClass
{
    function displayVar()
    {
        echo "Parent class\n";
    }
}

class ExtendClass extends SimpleClass
{
    // Redefine the parent method
    function displayVar()
    {
        echo "Extending class\n";
        parent::displayVar();
    }
}

$extended = new ExtendClass();
$extended->displayVar();

//OUTPUT
//Extending class
//Parent class

/*

Simple Explanation of Signature Compatibility Rules in PHP
When a child class overrides a method from a parent class, the method must follow certain rules to remain compatible. If these rules are not followed, PHP will throw an error.

Key Rules for Method Overriding
✅ Parameter Types Must Match or Be More Flexible

A child class cannot make parameters more strict than the parent.
It can allow more flexible (wider) types.
✅ New Parameters Must Be Optional

A child class can add new parameters, but they must have default values.
✅ Visibility Can Only Be Relaxed

A method cannot be made more restrictive (e.g., from public to protected).
It can be made more open (e.g., from protected to public).
🚫 Private Methods and Constructors Are Exempt

These do not follow the signature rules, so PHP won't throw an error if their signatures don't match.

*/




//The class keyword is also used for class name resolution. To obtain the fully qualified name of a class ClassName use ClassName::class. This is particularly useful with namespaced classes.


/*

What is the Nullsafe Operator (?->) in PHP?
In PHP 8.0, the nullsafe operator (?->) was introduced to safely access properties and methods of an object without causing errors if the object is null.



$result = $repository?->getUser(5)?->name;

$repository?->getUser(5)	If $repository is null, it returns null. Otherwise, it calls getUser(5).
$repository?->getUser(5)?->name	If getUser(5) is null, it returns null. Otherwise, it gets $user->name.
*/


class Test {
    public readonly string $prop;
 
    public function __construct(string $prop) {
        // Legal initialization.
        $this->prop = $prop;
    }
 }
 
 $test = new Test("foobar");
 // Legal read.
 var_dump($test->prop); // string(6) "foobar"
 
 // Illegal reassignment. It does not matter that the assigned value is the same.
 $test->prop = "foobar";
 // Error: Cannot modify readonly property Test::$prop


//In PHP 8.1, readonly properties were introduced. These properties can only be set once and cannot be changed after that. However, cloning (clone) allows modifying readonly properties inside the __clone() method before the new object is created.

//TODO:

//how cloning actually works:
//If a class has a __clone() method, it is executed right after cloning. You can use it to modify or reset properties in the new object.
class User {
    public string $name;

    public function __clone() {
        $this->name = "Cloned User"; // Reset name for cloned object
    }
}

$user1 = new User();
$user1->name = "Original User";

$user2 = clone $user1; // Triggers __clone()

echo $user1->name; // Output: Original User
echo $user2->name; // Output: Cloned User (because __clone() changed it)


 class Test1 {
    public readonly ?string $prop;

    public function __clone() {
        $this->prop = null;
    }

    public function setProp(string $prop): void {
        $this->prop = $prop;
    }
}

$test1 = new Test1;
$test1->setProp('foobar');

$test2 = clone $test1;
var_dump($test2->prop); // NULL