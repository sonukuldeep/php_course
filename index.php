<?php
$output = null;
$fruit = [
    ["banana", "apple"],
    ["grapes", "vine"],
    ["pamagranade", "cucumber"],
];

$fruit[] = ["orange", "pea"];

$users = [
    ['name' => 'mike', 'email' => 'mike@gmail.com', 'password' => 123456],
    ['name' => 'john', 'email' => 'john@gmail.com', 'password' => 123456],
    ['name' => 'sofie', 'email' => 'sofie@gmail.com', 'password' => 123456],
];

$users[] = ['name' => 'peter', 'email' => 'peter@gmail.com', 'password' => 123456];

$output = $users[3]['name'];

array_pop($users);

array_push($users, ['name' => 'spongebob', 'email' => 'squarepants@gmail.com', 'password' => 123456]);

unset($users[2]);

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
            <h2 class="text-lg font-semibold my-4"><?= "Output: $output" ?></h2>
            <p>
            <pre><?= print_r($users) ?></pre>
            <pre><?= print_r($fruit) ?></pre>
            </p>
        </div>
    </div>
</body>

</html>