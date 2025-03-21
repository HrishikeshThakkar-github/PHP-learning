<?php

//A Trait in PHP is a way to reuse code across multiple classes without using inheritance.
//It allows you to define methods once and use them in multiple classes, even if those classes are unrelated.

trait Logger {
    public function log(string $message) {
        echo "[LOG]: $message\n";
    }
}

class User {
    use Logger; // Injecting the trait into the class
}

class Order {
    use Logger; // Same trait can be used in multiple classes
}

$user = new User();
$user->log("User created!"); // Output: [LOG]: User created!

$order = new Order();
$order->log("Order placed!"); // Output: [LOG]: Order placed!


//🔹 The use keyword imports the Logger trait into a class.
//🔹 Both User and Order classes use the same method without needing inheritance.

trait Logger {
    public function log(string $message) {
        echo "[LOG]: $message\n";
    }
}

trait Timestamp {
    public function createdAt() {
        return date("Y-m-d H:i:s");
    }
}

class User {
    use Logger, Timestamp; // Using multiple traits
}

$user = new User();
$user->log("User registered."); // Output: [LOG]: User registered.
echo $user->createdAt(); // Output: Current timestamp


//If two Traits have a method with the same name, you must explicitly choose which method to use.

trait A {
    public function message() {
        echo "Message from Trait A\n";
    }
}

trait B {
    public function message() {
        echo "Message from Trait B\n";
    }
}

class Test {
    use A, B {
        A::message insteadof B; // Use A's message() method
        B::message as alternateMessage; // Rename B's message() method
    }
}

$obj = new Test();
$obj->message(); // Output: Message from Trait A
$obj->alternateMessage(); // Output: Message from Trait B


trait A {
    public function methodA() {
        echo "Method A\n";
    }
}

trait B {
    use A; // Using Trait A inside Trait B

    public function methodB() {
        echo "Method B\n";
    }
}

class Test {
    use B; // Test class gets both methodA() and methodB()
}

$obj = new Test();
$obj->methodA(); // Output: Method A
$obj->methodB(); // Output: Method B



//real-world-case:

    trait Logger {
        public function log(string $message) {
            echo "[LOG]: $message\n";
        }
    }
    
    trait Database {
        protected $connection;
    
        public function connect() {
            $this->connection = "Database connected!";
            echo $this->connection . "\n";
        }
    }
    
    class User {
        use Logger, Database;
    
        public function createUser() {
            $this->connect();
            $this->log("New user created.");
        }
    }
    
    $user = new User();
    $user->createUser();
    
    // Output:
    // Database connected!
    // [LOG]: New user created.
    