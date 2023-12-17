<?php
$firstName = "kuldeep";
$lastName = "kumar";

$fullName = $firstName . " " . $lastName;
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
            <p><?= 'Hello, my name is ' . $fullName ?></p>
            <p><?= "Hello, my name is $fullName." ?></p>
            <p><?= 'Hello, my name is \'John\'' ?></p>
            <p><?= "Hello, my name is 'John'" ?></p>
        </div>
    </div>
</body>

</html>