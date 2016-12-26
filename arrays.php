<?php
// Numerica array
// You can have integers, strings, and other data types together in one array.

$names = array("David", "Amy", "John");
echo $names[1]; // Outputs "Amy"

// Associative Arrays

$people = array("David"=>"27", "Amy"=>"21", "John"=>"42");
echo $people['Amy']; // Outputs 21"

// Multi-Dimensional Arrays

$dim = array(
   'online'=>array('David', 'Amy'),
   'offline'=>array('John', 'Rob', 'Jack'),
   'away'=>array('Arthur', 'Daniel')
);
echo $dim['online'][0]; //Outputs "David"
echo $dim['away'][1]; //Outputs "Daniel"

?>