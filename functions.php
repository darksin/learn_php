<?php

// User Defined Functions

function sayHello() {
  echo "Hello!";
}
sayHello(); //call the function -> Outputs "Hello!

// Funtion parameters

function multiplyByTwo($number) {
  $answer = $number * 2;
  echo $answer;
}
multiplyByTwo(3); //Outputs 6

function multiply($num1, $num2) {
  echo $num1 * $num2;
}
multiply(3, 6); //Outputs 18

// Default argument

function setCounter($num=10) {
   echo "Counter is ".$num;
}
setCounter(42);  //Counter is 42
setCounter();  //Counter is 10

// Return Statement

function mult($num1, $num2) {
  $res = $num1 * $num2;
  return $res;
}

echo mult(8, 3); // Outputs 24

?>