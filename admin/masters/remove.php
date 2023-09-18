<?php
require_once "../../vendor/connect.php";

if (isset($_GET['id'])) {
    $stmt = $pdo->prepare('select * from masters where id = ?');
    $stmt->execute([$_GET['id']]);
    $master = $stmt->fetch();

    if ($master) {
        $stmt = $pdo->prepare('delete from masters where id = ?');
        $stmt->execute([$_GET['id']]);

        unlink(dirname(dirname(__FILE__)) . '/' . $master['picture']);
    }
}

header('Location: ../indexAdmin.php');
?>