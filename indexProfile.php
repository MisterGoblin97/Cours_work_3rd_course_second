<?php
session_start();


require_once "vendor/connect.php";

if (!$_SESSION['user']) {
    header('Location: indexRegister.php');
}
 ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $_SESSION['user']['name'] ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bellota+Text&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/Footer.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/Header.css'>
    <link rel="stylesheet" href="assets/css/styleProfile.css">
</head>

<body>
    <!-- Шапка -->
    <div id="header_wrapper">
        <a href="indexMain.php">
            <div class="header_logo">
                <img src="assets/img/logo2.png">
            </div>
        </a>

        <a href="indexMassage.php" class="link-services" >услуги</a>
        <a href="indexMasters.php" class="link-services" >мастер</a>
        <a href="indexAbout.php" class="link-services" >О нас</a>
        <a href="indexContact.php" class="link-services" >контакты</a>
        <a href="indexProfile.php" class="link-services" ><b>Профиль</b></a>
    </div>

    <!-- Профиль -->
    <div class="card-profile">
        <div class="profile_img">
            <img src="<?= $_SESSION['user']['avatar'] ?>" width="70%" alt="">
        </div>
        <div class="profile_info">
            <h1>Ваши данные: </h1>
            <div class='line'></div>
            <h2 >ФИО: <?= $_SESSION['user']['name'] ?></h2>
            <h2 >Email: <?= $_SESSION['user']['email'] ?></h2>
            <h2>Номер телефона: <?= $_SESSION['user']['phoneNumber'] ?></h2>

            <div class=button_group>
                <div class="button">
                    <a href="vendor/logout.php" class="logout">Выход</a>
                    <?php 
                        if($_SESSION['user'] && $_SESSION['user']['id'] == 3) {
                            echo "<button class='admin_panel' onclick=\"location.href='admin/indexAdmin.php'\">Админ панель</button>";
                        }
                        
                    ?>
                </div>
            </div>

        </div>

    </div>

    <div class="user_services">
    <h1>Ваши услуги: </h1>
    <div class='line'></div>
    <?php
    // Формируем SQL-запрос для выборки записей из базы данных
    $sql = "SELECT s.name AS services_name, m.name AS master_name, sr.date, s.cost
    FROM serviceRequest AS sr
    JOIN services AS s ON sr.serviceID = s.id
    JOIN masters AS m ON sr.masterID = m.id
    JOIN users AS u ON sr.userID = u.id
    WHERE u.id = " . $_SESSION['user']['id']. " AND u.id != 3";

    // Выполняем запрос
    $result = mysqli_query($connect, $sql);

    // Проверяем наличие результатов
    if(mysqli_num_rows($result) > 0) : ?>
        <table>
            <tr>
                <th><h2>Ваша услуга</h2></th>
                <th><h2>Ваш мастер</h2></th>
                <th><h2>Дата</h2></th>
                <th><h2>Цена</h2></th>
            </tr>

    <!-- выполняем цикл пока  -->
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $row['services_name'] ?></td>
                    <td class='td_border-left'><?= $row['master_name'] ?></td>
                    <td class='td_border-left'><?= $row['date'] ?></td>
                    <td class='td_border-left'><?= $row['cost'] ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php endif; ?>
</div>
</body></html>


