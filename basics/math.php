<?php

// 1. abs() - Absolute value: returns the non-negative value of a number.
$value = -15;
echo "abs($value) = " . abs($value) . "\n";  // Outputs: 15

// 2. ceil() - Rounds a number up to the next highest integer.
$num = 4.3;
echo "ceil($num) = " . ceil($num) . "\n";  // Outputs: 5

// 3. floor() - Rounds a number down to the nearest integer.
$num = 4.7;
echo "floor($num) = " . floor($num) . "\n";  // Outputs: 4

// 4. round() - Rounds a number to the nearest integer.
$num1 = 4.5;
$num2 = 4.4;
echo "round($num1) = " . round($num1) . "\n";  // Outputs: 5
echo "round($num2) = " . round($num2) . "\n";  // Outputs: 4

// 5. min() and max() - Find the smallest and largest values in an array.
$values = [5, 2, 8, 1, 9];
echo "min(5,2,8,1,9) = " . min($values) . "\n";  // Outputs: 1
echo "max(5,2,8,1,9) = " . max($values) . "\n";  // Outputs: 9

// 6. pow() - Exponentiation: calculates the power of a number.
$base = 2;
$exponent = 3;
echo "pow($base, $exponent) = " . pow($base, $exponent) . "\n";  // Outputs: 8

// 7. sqrt() - Square root: returns the square root of a number.
$value = 16;
echo "sqrt($value) = " . sqrt($value) . "\n";  // Outputs: 4

// 8. rand() - Generates a random number. (mt_rand() is a faster alternative in many cases)
$randomNumber = rand(1, 100);
echo "rand(1, 100) = " . $randomNumber . "\n";

// 9. pi() - Returns the value of PI.
echo "pi() = " . pi() . "\n";

// 10. fmod() - Floating-point modulus: returns the remainder of the division of two floats.
echo "fmod(10.5, 3) = " . fmod(10.5, 3) . "\n";
//similar to a modulus operator but can return float value
?>
