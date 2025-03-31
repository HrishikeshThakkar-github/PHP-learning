<?php

$user = [
    "name" => "John",
    "email" => "john@example.com",
    "age" => 25
];

foreach ($user as $key => $value) {
    echo "$value";
}
$colors = ["Red", "Green", "Blue"];

foreach ($colors as $key=>$color) {
    echo $key. "=>". $color . "\n";
}

$students = [
    ["name" => "Alice", "score" => 90],
    ["name" => "Bob", "score" => 85],
    ["name" => "Charlie", "score" => 88]
];

foreach ($students as $student) {
    if ($student["name"] === "Alice") { // Filter only Alice
        foreach ($student as $key => $value) {
            echo "$key: $value, ";
        }
        echo "\n";
    }
}
