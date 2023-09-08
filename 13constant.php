<!-- /* To create a constant, use the define() function.

Syntax
define(name, value, case-insensitive)
Parameters:

name: Specifies the name of the constant
value: Specifies the value of the constant
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false */ -->

<?php
define("GREETING"," welcome to w3school.com!"); //case insensitive
echo GREETING;
?>

<?php
define("GREET"," welcome to w3school.com!",true); //case sensitive
echo GREET;
?>