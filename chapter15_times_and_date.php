<?php
$output = null;

// dates
$output = date("Y");
$output = date("m");
$output = date("Y - m - d");

// time
date_default_timezone_set("Asia/Kolkata");
$output = date("h:i:sa");

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