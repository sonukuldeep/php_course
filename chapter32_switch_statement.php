<?php
$dayOfWeek = date('l');
$message = null;
$color = null;
switch ($dayOfWeek) {
    case 'Monday':
        $message = 'Monday blues';
        $color = 'blue';
        break;
    case 'Tuesday':
        $message = 'Tuesday green';
        $color = 'green';
        break;
    case 'Wednesday':
        $message = 'Wednesday purple';
        $color = 'purple';
        break;
    case 'Thursday':
        $message = 'Thursday yellow';
        $color = 'yellow';
        break;
    case 'Friday':
        $message = 'Friday green';
        $color = 'green';
        break;
    case 'Saturday':
        $message = 'Saturday red';
        $color = 'red';
        break;
    case 'Sunday':
        $message = 'Sunday pink';
        $color = 'pink';
        break;
    default:
        $message = 'Default white';
        $color = 'white';
        break;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What Day Is It?</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: <?= $color ?>;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <h1><?= $message ?></h1>
</body>

</html>