<?php

//Constants are values that do not change and are defined using const.
//They belong to the class itself (not instances).


class User {
    const ROLE = "Admin";
}

echo User::ROLE; // Output: Admin


//Static properties belong to the class itself, not an instance.
//Use self:: or ClassName:: to access them.

class Counter {
    public static int $count = 0;
}

echo Counter::$count; // Output: 0


//Static methods belong to the class, not an instance.
//They are called using :: without creating an object.

class Math {
    public static function square(int $num) {
        return $num * $num;
    }
}

echo Math::square(4); // Output: 16


//self:: refers to the class where it's written.
//static:: refers to the calling class (Late Static Binding).

class ParentClass {
    public static function who() {
        return "Parent";
    }
    public static function test() {
        return self::who(); // Calls ParentClass::who()
    }
}

class ChildClass extends ParentClass {
    public static function who() {
        return "Child";
    }
}

echo ChildClass::test(); // Output: Parent


class ParentClass {
    public static function who() {
        return "Parent";
    }
    public static function test() {
        return static::who(); // Calls ChildClass::who() if called from ChildClass
    }
}

class ChildClass extends ParentClass {
    public static function who() {
        return "Child";
    }
}

echo ChildClass::test(); // Output: Child


class Animal {
    public function speak() {
        return "Animal sound";
    }
}

class Dog extends Animal {
    public function speak() {
        return parent::speak() . " - Woof!"; // Calls Animal's speak()
    }
}

$dog = new Dog();
echo $dog->speak(); // Output: Animal sound - Woof!

//Returns the fully qualified class name (FQCN) as a string.

class MyClass {}

echo MyClass::class; // Output: MyClass


