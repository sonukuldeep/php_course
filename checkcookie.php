<?php

$username =  ($_COOKIE['username']) ?? "Guest";

?>

<p>Welcome <?= $username ?></p>