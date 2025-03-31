<?php

$makefoo = true;

/* We can't call foo() from here 
   since it doesn't exist yet,
   but we can call bar() */

bar();

if ($makefoo) {
  function foo()
  {
    echo "I don't exist until program execution reaches me.\n";
  }
}

/* Now we can safely call foo()
   since $makefoo evaluated to true */

foo();

function bar() 
{
  echo "I exist immediately upon program start.\n";
}



?>

<?php
function foo2() 
{
  function bar2() 
  {
    echo "I don't exist until foo() is called.\n";
  }
}

/* We can't call bar() yet
   since it doesn't exist. */

foo2();

/* Now we can call bar(),
   foo()'s processing has
   made it accessible. */

bar2();



// note:All functions and classes in PHP have the global scope - they can be called outside a function even if they were defined inside and vice versa.

// PHP does not support function overloading, nor is it possible to undefine or redefine previously-declared functions.

function recursion($a)
{
    if ($a < 20) {
        echo "a = $a\n";
        recursion($a + 1);
    }
}


function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
  }
  
  setHeight(350);
  setHeight(); // will use the default value of 50
  setHeight(135);
  setHeight(80);

  function sum($x, $y) {
    $z = $x + $y;
    return $z;
  }
  
  echo "5 + 10 = " . sum(5, 10) . "<br>";
  echo "7 + 13 = " . sum(7, 13) . "<br>";
  echo "2 + 4 = " . sum(2, 4),"\n";




  //In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.

  //When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:

  function add_five(&$value) {
    $value += 5;
    echo $value,"\n";
  }
  
  $num = 2;
  add_five($num);
  echo $num,"\n";



    //By using the ... operator in front of the function parameter, the function accepts an unknown number of arguments. This is also called a variadic function.
    //The variadic function argument becomes an array.

    function sumMyNumbers(...$x) {
        $n = 0;
        $len = count($x);
        for($i = 0; $i < $len; $i++) {
          $n += $x[$i];
        }
        return $n;
      }
      
      $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
      echo $a,"\n";


      //You can only have one argument with variable length, and it has to be the last argument.
      function myFamily($lastname, ...$firstname) {
        $txt = "";
        $len = count($firstname);
        for($i = 0; $i < $len; $i++) {
          $txt = $txt."Hi, $firstname[$i] $lastname \n";
        }
        return $txt;
      }
      
      $a = myFamily("Doe", "Jane", "John", "Joey");
      echo $a,"\n";


/*
      // declare(strict_types=1); // strict requirement in the first line

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is enabled and "5 days" is not an integer, an error will be thrown

To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function.

In the following example we specify the return type for the function:


function addNumbers(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers(1.2, 5.2);

*/





?>