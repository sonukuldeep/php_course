<?php
$output = null;

$ids = [10, 50, 100, 20, 11, 12, 13, 40];
$users = ["Johnny", "Jack", "Jill"];

// count
$output = count($ids);

// sort
sort($ids);
sort($users);

// rsort
rsort($ids);
rsort($users);

// array_push
array_push($ids, 55); // $ids[] = 70;
array_push($users, "Sunny");

// array_pop
array_pop($ids);
array_pop($users);

// array_shift
array_shift($ids);

// array_unshift
array_unshift($users, "Peter");

// array_slice
$slice = array_slice($ids, 1, 2);
var_dump($slice);

// array_splice
array_splice($ids, 2, 1, 1000);

// array sum
$output = "Sum of ids " .  array_sum($ids);

// array search
$output = 'Index of user Jack ' . array_search("Jack", $users);

// in array
$output = 'Does Johnny exist: ' . in_array("Johnny", $users);

// explode
$text = "tomorrow is Saturday and it not a holiday";
$output2 = explode(" ", $text);
var_dump($output2);

// implode
$output = implode(", ", $users);
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
            <!-- output -->
            <p class="text-xl"><?= $output ?></p>
            <h2 class="text-xl font-semibold my-4">IDs Array</h2>
            <p>
            <pre><?= print_r($ids); ?></pre>
            </p>
            <h2 class="text-xl font-semibold my-4">Users Array</h2>
            <p>
            <pre><?= print_r($users); ?></pre>
            </p>
        </div>
    </div>
</body>

</html>