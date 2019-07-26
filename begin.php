<?php

/* UNDERSCORE AND CAMEL CASE EXAMPLE */
$myVarName = 1; //camel case
$myVar = 1; //camel case

$my_var = 4; //underscore

/* Types of data */
$my_integer = 10;
$my_string  = "my string content";
$my_float   = 5.5685;
$my_bool    = true;
$my_array   = [1,3,4,5];

//echo gettype($my_array);

//echo $my_integer+$my_float;

$my_string .= " (from end) ";

echo $my_string." end of string";

echo "<br>";
echo $my_string;