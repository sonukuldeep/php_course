<?php
require "chapter72_connect_to_pdo.php";

$isDeleteRequest = $_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['_method'] ?? '' === 'delete');

if ($isDeleteRequest) {
    $id = $_POST['id'];

    $sql = 'DELETE FROM posts WHERE id = :id';

    $stmt = $pdo->prepare($sql);

    $params = ['id' => $id];

    $stmt->execute($params);

    header('location: index.php');
    exit;
}
