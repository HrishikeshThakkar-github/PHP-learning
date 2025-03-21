<?php


//Declaring class properties or methods as static makes them accessible without needing an instantiation of the class. These can also be accessed statically within an instantiated class object.

//Static properties are accessed using the Scope Resolution Operator (::) and cannot be accessed through the object operator (->).

class Foo
{
    public static $my_static = 'foo';

    public function staticValue() {
        return self::$my_static;
    }
}

class Bar extends Foo
{
    public function fooStatic() {
        return parent::$my_static;
    }
}


print Foo::$my_static . "\n";

$foo = new Foo();
print $foo->staticValue() . "\n";
print $foo->my_static . "\n";      // Undefined "Property" my_static 

print $foo::$my_static . "\n";
$classname = 'Foo';
print $classname::$my_static . "\n";

print Bar::$my_static . "\n";
$bar = new Bar();
print $bar->fooStatic() . "\n";

/*
6️⃣ Static Properties Cannot Be Accessed With ->
php
Copy
Edit
class Example {
    public static $value = "Static Value";
}

$instance = new Example();
echo $instance->value; // ❌ Fatal Error: Undefined property "value"
*/