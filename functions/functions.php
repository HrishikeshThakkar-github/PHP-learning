<?php
function foo() 
{
  function bar() 
  {
    echo "I don't exist until foo() is called.\n";
  }
}

/* We can't call bar() yet
   since it doesn't exist. */

foo();

/* Now we can call bar(),
   foo()'s processing has
   made it accessible. */

bar();


//All functions and classes in PHP have the global scope - they can be called outside a function even if they were defined inside and vice versa.
//but note that it can be called after its outer function has been intialized
//PHP does not support function overloading, nor is it possible to undefine or redefine previously-declared functions.


//passsing argument by refrence

// used when: To allow a function to modify its arguments, they must be passed by reference.
function add_more(&$str){
    $str .= "something extra added";
}
$str="hello world ";
add_more($str);
echo $str;


//Default parameter values :  default is used only when the parameter's argument is not passed

function makecoffee($type = "cappuccino")
{
    return "Making a cup of $type.\n";
}
echo makecoffee();
echo makecoffee(null);
echo makecoffee("espresso");

//using array as default value

function makecoffee($types = array("cappuccino"), $coffeeMaker = NULL)
{
    $device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
    return "Making a cup of ".join(", ", $types)." with $device.\n";
}
echo makecoffee();
echo makecoffee(array("cappuccino", "lavazza"), "teapot");


// The default value must be a constant expression, not (for example) a variable, a class member or a function call.
// 
// Note that any optional parameters should be specified after any required parameters, otherwise they cannot be omitted from calls. Consider the following example:

//using the ... operator in front of the function parameter, the function accepts an unknown number of arguments. This is also called a variadic function.

//The variadic function argument becomes an array.
    function sum(...$numbers) {
        $acc = 0;
        foreach ($numbers as $n) {
            $acc += $n;
        }
        return $acc;
    }
    
    echo sum(1, 2, 3, 4);



    //variable functions

    function foo() {
        echo "In foo()<br />\n";
    }
    
    function bar($arg = '')
    {
        echo "In bar(); argument was '$arg'.<br />\n";
    }
    
    // This is a wrapper function around echo
    function echoit($string)
    {
        echo $string;
    }
    
    $func = 'foo';
    $func();        // This calls foo()
    
    $func = 'bar';
    $func('test');  // This calls bar()
    
    $func = 'echoit';
    $func('test');  // This calls echoit()
?>