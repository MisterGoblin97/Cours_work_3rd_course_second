<?php
    $connect = mysqli_connect('localhost:3306', 'root', 'root', 'spa');

    if (!$connect) {
        die('Error connect to DataBase');
    }

    $pdo = new PDO('mysql:host=localhost;dbname=spa;charset=utf8', 'root', 'root', [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ]);

?>