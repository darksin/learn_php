<?php

$name = 'John';
$age = 25;
echo $name;

define("MSG", " Hi SoloLearners!", true); //true -> case-inensitive
echo msg;

// Data Types
// String

$string1 = 'String 1';
$string2 = "String 2";

echo $string1 . $string2;

// Integer

$int1 = 42;
$int2 = -42;

echo $int1;
echo $int2;

// Float

$float = 42.168;

// Boolean

$booltrue = true;
$boolfalse = false;

// PHP automatically converts each variable to the correct data type, according to its value. This is why the variable $str is treated as a number in the addition.

$str = "10";
$int = 20;
$sum = $str + $int;
echo ($sum);

// Variable scope

$name = 'David';
function getName() {
    global $name;
    echo $name;
}
getName();

// Variable variables

$a = 'hello';
$hello = "Hi!";
echo $$a; // $$a is a variable that is using the value of another variable, $a, as its name. The value of $a is equal to "hello". The resulting variable is $hello, which holds the value "Hi!".

?>