<?php

class User {
    const ROLE_ADMIN = "admin";
    const ROLE_USER = "user";
}

// Accessing a constant
echo User::ROLE_ADMIN; // Output: admin


class User {
    const TYPE = "Regular";

    public function getType() {
        return self::TYPE; // Accessing constant inside the class
    }
}

$user = new User();
echo $user->getType(); // Output: Regular


class ParentClass {
    const VALUE = "Parent";
    
    public function showValue() {
        return static::VALUE; // Uses child class's constant if available
    }
}

class ChildClass extends ParentClass {
    const VALUE = "Child";
}

$child = new ChildClass();
echo $child->showValue(); // Output: Child




// self:: always refers to the class where it is written.
// static:: refers to the called class (supports method overriding).


class ParentClass {
    const ROLE = "Admin";
}

class ChildClass extends ParentClass {
    public function getRole() {
        return parent::ROLE;
    }
}

$child = new ChildClass();
echo $child->getRole(); // Output: Admin
