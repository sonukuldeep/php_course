<?php
$output = null;

$num1 = 10;
$num2 = 20;

// Basic math
$output = "$num1 + $num2 = " . $num1 + $num2;
$output = "$num1 - $num2 = " . $num1 - $num2;
$output = "$num1 * $num2 = " . $num1 * $num2;
$output = "$num1 / $num2 = " . $num1 / $num2;
$output = "$num1 % $num2 = " . $num1 % $num2;

// Assignment operators
$num3 = 10;

$num3 += 10;
$num3 -= 10;
$num3 *= 2;
$num3 /= 2;
$num3 %= 2;

$output = $num3;

// Built in php function

// random numbers
$output = rand();
$output = getrandmax();
$output = rand(1, 10); // both 1 & 10 included

// round
$output = round(3.14);
$output = round(3.14, 1);

// ceil
$output = ceil(3.14); // outputs 4

// floot
$output = floor(3.14); // outputs 3

// square root
$output = sqrt(2024);

// pi
$output = pi();

// absolute
$output = abs(-20);

// max
$output = max(1, 2, 3, 4, 5); // outputs 5
$output = max([1, 10, 20, 50, 30]); // works on array too

// min
$output = min(1, 2, 3, 4, 5); // outputs 5
$output = min([1, 10, 20, 50, 30]); // works on array too

// number formatter
$output = number_format(1000.120031, 2); // outputs 1,000.12
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php echo "Learn PHP From Scratch" ?></title>
</head>

<body class="bg-gray-100">
    <!-- this is header section -->
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?php echo "Learn PHP From Scratch" ?></h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4"><?= "Welcome To The Course" ?></h2>
            <p class="text-xl"><?= $output ?></p>
        </div>
    </div>
</body>

</html>