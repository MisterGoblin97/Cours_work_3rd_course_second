<?php
require_once "../../vendor/connect.php";

if ( !empty($_POST['name']) ) {
    $apppath = dirname(dirname(__FILE__));
    $filepath = '../uploads/' . time() . basename($_FILES['file']['name']);
    $uploadfile = $apppath . '/' . $filepath;

    move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
    $stmt = $pdo->prepare("insert into masters(name, workExp, description, picture) values(?,?,?,?)");
    $stmt->execute([
       $_POST['name'],
       $_POST['workExp'],
       $_POST['description'],
       $filepath
    ]);

    header("Location: ../indexAdmin.php");
 }


?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавление мастера</title>
    <link rel="stylesheet" href="../../assets/css/admin.css">   
</head>
<body>
    <form action="add.php" method="post" enctype="multipart/form-data">
        <input required name="name" type="text" placeholder="ФИО">
        <input required name="workExp" type="number" placeholder="Опыт работы">
        <input required name="description" type="text" placeholder="Описание">
        <input required name="file" type="file">
        <input type="submit" value="Создать" class="button">
    </form>
</body>
</html>