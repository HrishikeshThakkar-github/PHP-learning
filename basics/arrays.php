<?php 
//indexed arrays

$cars= array("merc","bimmer","rolls");
var_dump($cars);
echo $cars[1],"\n";
$cars[2]="tesla";
var_dump($cars);

foreach($cars as $car){
    echo "$car \n";
}

array_push($cars,"rolls");
var_dump($cars);
$cars[5] = "Volvo";
$cars[7] = "BMW";
$cars[14] = "Toyota";
array_push($cars,"rolls");  //the index will be 15
var_dump($cars);



//associative arrays

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);
echo $car["model"];
$car["year"] = 2024;
var_dump($car);


foreach ($car as $x => $y) {
  echo "$x: $y \n";
}

//another syntax
$cars = ["Volvo", "BMW", "Toyota"];
var_dump($car);


$myArr = [];
$myArr[0] = 100;
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";

var_dump($myArr);



function myFunction() {
    echo "I come from a function!";
}
  
$myArr = array("Volvo", 15, "myFunction"); //we can also use myfunction() instead of storing it in a string
$myArr[2]();


?>