<?php

declare(strict_types=1);

function add(int $a, int $b): int
{
    return $a + $b;
}

function greet(string $name): void
{
    echo "hello $name <br/>";
}

function greetFullName(string $fName, string $lname): string
{
    return 'Hello Mr. ' . $fName . ' ' . $lname . '<br/>';
}

greet("kuldeep");

echo greetFullName(lname: 'kumar', fName: "kuldeep");

echo add(15, 5);
