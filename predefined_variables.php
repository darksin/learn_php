<?php
// PHP Forms GET and POST $_SESSION

// Start the session
session_start();

$_SESSION['color'] = "red";
$_SESSION['name'] = "John";

// Script Name
echo $_SERVER['SCRIPT_NAME']; //Outputs "/predefined_variables.php"

// Host Name
echo $_SERVER['HTTP_HOST']; //Outputs "localhost"

// $_COOKIE
$value = "John";
setcookie("user", $value, time() + (86400 * 30), '/'); 

if(isset($_COOKIE['user'])) {
  echo "Value is: ". $_COOKIE['user'];
}
//Outputs "Value is: John"

?>