<?php
$name = 'sitkonaing';

var_dump($name);  // print out something
print($name);
print_r($name);
echo $name;

// echo $_SERVER;

echo "<pre>";
// var_dump($_SERVER);

// print_r($_SERVER);


$num1 = 10;
$num2 = 20;
echo $num1 + $num2;

// --------------------------------------------------------------

// array

$array = ['one', 'two', 'three'];

echo "<pre>";
var_dump($array);

// Associated Array

$assoArray = [
    'name' => 'kyky',
    'role' => 'developer'
];


echo "<pre>";
var_dump($assoArray);
echo " .<br> ";
var_dump($assoArray['name']);

// ---------------------------------------------------------------
// define("MINSIZE", 70);

// echo MINSIZE;
// echo "<pre>";
// echo constant("MINSIZE"); // same thing as the previous line

// -------------------------------------------------


$fruits = "mango1";

if ($fruits == "mango") {
    echo 'this is mango';
} else {
    echo "this is other fruits";
}

echo "<pre>";

$result = $fruits == "mango" ? "this is mango" : "this is other fruits"; // if-else short form .
echo $result;
