<?php
require_once "../../vendor/connect.php";

if (isset($_GET['id'])) {
    $stmt = $pdo->prepare('select * from services where id = ?');
    $stmt->execute([$_GET['id']]);
    $service = $stmt->fetch();

    if ($service) {
        $stmt = $pdo->prepare('delete from services where id = ?');
        $stmt->execute([$_GET['id']]);

        unlink(dirname(dirname(__FILE__)) . '/' . $service['picture']);
    }
}

header('Location: ../indexAdmin.php');
?>