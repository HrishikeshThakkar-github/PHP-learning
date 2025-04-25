<?php

class Person {
    private $properties = [];

    public function __set($name, $value) {
        $this->properties[$name] = $value;
    }

    public function __get($name) {
        return isset($this->properties[$name]) ? $this->properties[$name] : null;
    }
}

$person = new Person();
$person->age=25;
$person->gender=28;
echo $person->age;
echo $person->gender;

?>