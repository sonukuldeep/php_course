<?php

// for loop
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo "counter value  $i - $j ";
    }
    echo "<br/>";
}
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
            <?php for ($i = 1; $i < 5; $i++) : ?>
                <ul class="grid grid-rows-5 grid-rows-[1fr]">
                    <?php for ($j = 1; $j < 5; $j++) : ?>
                        <li>
                            <?= "$i - $j" ?>
                        </li>
                    <?php endfor ?>
                </ul>
            <?php endfor ?>
        </div>
    </div>
</body>

</html>