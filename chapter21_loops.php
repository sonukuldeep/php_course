<?php

// for loop
for ($i = 0; $i < 10; $i++) {
    echo "counter value $i<br/>";
}

//  while loop
$i = 0;
while ($i < 10) {
    echo $i . '<br/>';
    $i++;
}

// do while
$i = 0;
do {
    echo $i;
    $i++;
} while ($i < 10);

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
            <p>
                <!-- <ul>
                <?php for ($i = 0; $i < 10; $i++) {
                    echo "<li>counter value $i</li>";
                } ?>

                <?php for ($i = 0; $i < 10; $i++) : ?>
                    <li><?= $i + 1 ?> sheep</li>
                <?php endfor; ?>
            </ul> -->

                <!-- <ul>
                <?php $i = 0;
                while ($i < 10) : ?>
                    <li> counter is <?= $i ?></li>
                <?php $i++;
                endwhile ?>
            </ul> -->

            <ul>
                <?php $i = 0;
                do { ?>

                    <li><?= $i ?>
                    </li>
                <?php $i++;
                } while ($i < 10) ?>
            </ul>
            </p>
        </div>
    </div>
</body>

</html>