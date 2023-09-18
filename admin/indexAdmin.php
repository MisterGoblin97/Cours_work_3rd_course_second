<?php
require_once "../vendor/connect.php";

$stmtServices = $pdo->query("select * from services");
$stmtMasters = $pdo->query("select * from masters");

$services= $stmtServices->fetchAll();
$masters= $stmtMasters->fetchAll();


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админ панель</title>
    <link rel="stylesheet" href="../assets/css/styleAdmin.css">
</head>
<body>

        <h1>Админ панель</h1>

        
        <button class="add"  onclick="location.href='../IndexMain.php'">На главную</button> <!-- Кнопка перехода на глвную страницу-->
            <div class="line"></div>
            <h2>Добавленные услуги</h2>
            <button class="add" onclick="location.href='services/add.php'">Добавить</button> <!-- Кнопка добавления -->
            
        <div class="gallery">
            <?php foreach ($services as $service) : ?>
            <div class="admin-img-wrapper">
                <img src="http://Muldashova/<?= $service['picture'] ?>" />
                <p> Название: <?php echo $service['name'] ?></p>
                <button class="delete" onclick="if(confirm('Вы действительно хотите удалить эту услугу?')) location.href='services/remove.php?id=<?= $service['id'] ?>'">Удалить</button> <!-- Кнопка удаления -->
                <button class="edit" onclick="location.href='services/edit.php?id=<?= $service['id'] ?>'">Изменить</button> <!-- Кнопка редактирования -->
    	    </div>
            <?php endforeach; ?>
        </div>
            <div class="line"></div>
        <h2>Добавленные мастера</h2>
        <button class="add" onclick="location.href='masters/add.php'">Добавить</button> <!-- Кнопка добавления -->
        <div class="gallery">
            <?php foreach ($masters as $master) : ?>
            <div class="admin-img-wrapper">
                <img src="http://Muldashova/<?= $master['picture'] ?>" />
                <p> Имя: <?php echo $master['name'] ?></p>
                <button class="delete" onclick="if(confirm('Вы действительно хотите удалить этого мастера?')) location.href='masters/remove.php?id=<?= $master['id'] ?>'">Удалить</button> <!-- Кнопка удаления -->
                <button class="edit" onclick="location.href='masters/edit.php?id=<?= $master['id'] ?>'">Изменить</button> <!-- Кнопка редактирования -->
    	    </div>
            <?php endforeach; ?>
        </div>

</body>
</html>