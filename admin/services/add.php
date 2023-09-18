<?php
require_once "../../vendor/connect.php";

if ( !empty($_POST['name']) ) {
    $apppath = dirname(dirname(__FILE__));
    $filepath = '../uploads/' . time() . basename($_FILES['file']['name']);
    $uploadfile = $apppath . '/' . $filepath;

    move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
    $stmt = $pdo->prepare("insert into services(name, cost, description, duration, picture) values(?,?,?,?,?)");
    $stmt->execute([
       $_POST['name'],
       $_POST['cost'],
       $_POST['description'],
       $_POST['duration'],
       $filepath
    ]);

    header("Location: ../indexAdmin.php");
 }


?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавление услуги</title>
    <link rel="stylesheet" href="../../assets/css/admin.css">   
</head>
<body>
    <form action="add.php" method="post" enctype="multipart/form-data">
        <input required name="name" type="text" placeholder="Название">
        <input required name="cost" type="number" placeholder="Цена">
        <input required name="description" type="text" placeholder="Описание">
        <input required name="duration" type="number" placeholder="Продолжительность">
        <input required name="file" type="file">
        <input type="submit" value="Создать" class="button">
    </form>
</body>
</html>