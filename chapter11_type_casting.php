<?php
$num1 = 10;
$num2 = "20";
$isTrue = true;
$name = null;

// implecit conversion
$result = $num1 + $num2;
$result = $num1 + $isTrue; // returns 11
$result = $num1 + $name; // 10 


// explicit conversion
$result = (string) $num1;
$result = (int) $num2;
$result = (bool) $num1; // return true

var_dump($result);
