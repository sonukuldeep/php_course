<?php

$names = array(["Johhny", "Ruby", "David"]);
$numbers = [10, 11, 12, 13, 14, 15];
var_dump($names);

function inspect($values)
{
    echo '<pre>';
    var_dump($values);
    echo '</pre>';
}

$numbers[0] = 100;

unset($numbers[1]);

$numbers = array_values($numbers);

//inspect($names);
inspect($numbers);
