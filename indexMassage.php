<?php
require_once "vendor/connect.php";

$stmt = $pdo->query("select * from services");
$services = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bellota+Text&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/styleMassage.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/Footer.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/Header.css'>
<body>
<!-- Шапка -->
    <div id="header_wrapper">
        <a href="indexMain.php">
            <div class="header_logo">
                <img src="assets/img/logo2.png">
            </div>
        </a>

        <a href="indexMassage.php" class="link-services" >услуги</a>
        <a href="indexMasters.php" class="link-services" >мастерa</a>
        <a href="indexAbout.php" class="link-services" >О нас</a>
        <a href="indexContact.php" class="link-services" >контакты</a>
        <a href="indexProfile.php" class="link-services" ><b>Профиль</b></a>
    </div>
    <div class="con-logo">
        <div>
            <img src="assets/img/logo.png">
        </div>
    </div>
    <h1 style="text-align: center; font-size: 45px;">УСЛУГИ</h1>
    <div class="text">
        <p>Мы предлагаем Вашему вниманию несколько оздоровительных и расслабляющих услуг, среди которых каждый сможет выбрать тот вариант, который более всего отвечает потребностям и пожеланиям</p>
    </div>

    <div class="content-main">
        <?php foreach ($services as $service): ?>
        <div class="content-element">
            <img src='<?php echo $service['picture']?>'>
            <h2> <?php echo $service['name']?> </h2>
            <div class="content-element_text">
                <p> <?php echo $service['description']?></p>
                <h2> <?php echo $service['cost']?> рублей - <?php echo $service['duration']?> минут </h2>
            </div>
            <div class="con-btn">
                <a href="indexOrder.php" class="btn">Записаться</a>
            </div>
        </div>
        <?php endforeach; ?>
        </div>




    </div>

    <footer>
    <div class="footer-menu">
			<a href="indexMassage.php"><h1>Услуги</h1></a>
			<a href="indexMasters.php"><h1>Мастера</h1></a>
			<a href="indexAbout.php"><h1>О нас</h1></a>
            </div>
            <div class="footer-menu">
                <a href="indexContact.php"><h1>Контакты</h1></a>
				<a href="indexProfile.php"><h1>Профиль</h1></a> 
            </div>
        <div class="footer-menu">
        <a href="../indexMain.php"> <img src="assets/img/logo2.png"></a>

            <h2>+7 (499) 508-32-74</h2>
            <div style="display: flex; justify-content: space-around;">
                <a href="https://web.telegram.org/"><img src="assets/img/telegramLogo.png"></a>
                <a href="https:www.instagram.com/"><img src="assets/img/instLogo.png"></a>
                <a href="https://www.whatsapp.com/"><img src="assets/img/wtupLogo.png"></a>
            </div>
        </div>
        <div class="footer-menu">
            <h1 style="text-align: left;">г.Москва,<br> ул.Тимерязевская,<br> дом 9,<br>  строение 3,<br>  этаж 3</h1>
        </div>
    </footer>
</body>
</html>