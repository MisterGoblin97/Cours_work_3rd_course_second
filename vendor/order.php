<?php
session_start();
require_once "connect.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

$stmt = $pdo->prepare("insert into serviceRequest(serviceID, masterID, userID, date) values(?,?,?,?)");
    $stmt->execute([
        $_POST['service'],
        $_POST['master'],
        $_SESSION['user']['id'],
        $_POST['date']        
    ]);
    header('Location: ../indexProfile.php');
?>