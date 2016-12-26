<?php
// If else

$x = 10;
$y = 20;
if ($x >= $y) {
   echo $x;
} else {
   echo $y;
} // Outputs "20"

// Elseif

$age = 21;

if ($age<=13) {
   echo "Child.";
} elseif ($age>13 && $age<19) {
   echo "Teenager";
} else {
   echo "Adult";
} //Outputs "Adult"

// While Loop

$i = 1;
while ($i < 7) {
  echo "The value is $i <br />";
  $i++;
}

// Do while loop

$j = 5;
do {
   echo "The number is " . $j . "<br/>";
   $j++;
} while($j <= 7);

// For loop

for ($a = 0; $a < 6; $a++) {
   echo "Value of a : ". $a . "<br />";
}

// Foreach loop

$names = array("John", "David", "Amy");
foreach ($names as $name) {
   echo $name.'<br />';
}

// Switch statement

$today = 'Tue';

switch ($today) {
  case "Mon":
    echo "Today is Monday.";
    break;
  case "Tue":
    echo "Today is Tuesday.";
    break;
  case "Wed":
    echo "Today is Wednesday.";
    break;
  case "Thu":
    echo "Today is Thursday.";
    break;
  case "Fri":
     echo "Today is Friday.";
     break;
  case "Sat":
     echo "Today is Saturday.";
     break;
  case "Sun":
     echo "Today is Sunday.";
     break;
  default:
     echo "Invalid day.";
}

// Break statement

// Continue statement

// Include and Require


?>