<?php

$name = "kuldeep";
$lastName = "kumar";
$age = 33;
$rating = 4.5;
$senior = true;
$friends = ["Jonny", 20, 176.5];

// string
var_dump($name);
echo "<br/>";

// string- just a different output format
echo getType($lastName);
echo "<br/>";

// integer
var_dump($age);
echo "<br/>";

// float
var_dump($rating);
echo "<br/>";

// boolean
var_dump($senior);
echo "<br/>";

// array
var_dump($friends);
echo "<br/>";

// Object
$person = new stdClass();
var_dump($person);
echo "<br/>";

// Null
$car = null;
var_dump($car);
echo "<br/>";

// Resourse
$file = fopen('README.md', 'r');
var_dump($file);
echo "<br/>";
