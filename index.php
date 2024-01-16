<?php

//  database creds
$host = 'localhost';
$port = 3306;
$dbName = 'blog';
$username = 'sonu';
$password = 'sonu';

$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";
try {
    // create pdo instance
    $pdo = new PDO($dsn, $username, $password);

    // set pdo to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 'Database connected...';
} catch (PDOException $e) {
    echo 'connection failed' . $e->getMessage();
}
