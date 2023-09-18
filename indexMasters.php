<?php
require_once "vendor/connect.php";

$stmt = $pdo->query("select * from masters");
$masters = $stmt->fetchAll();
?>
<html>
	<head>
		<title>О нас</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="preconnect" href="https://fonts.googleapis.com">
    	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    	<link href="https://fonts.googleapis.com/css2?family=Bellota+Text&display=swap" rel="stylesheet">
    	<link rel='stylesheet' type='text/css' media='screen' href='assets/css/styleMasters.css'>
    	<link rel='stylesheet' type='text/css' media='screen' href='assets/css/Footer.css'>
    	<link rel='stylesheet' type='text/css' media='screen' href='assets/css/Header.css'>
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
        <a href="indexMasters.php" class="link-services" >мастерa</a>
        <a href="indexAbout.php" class="link-services" >О нас</a>
        <a href="indexContact.php" class="link-services" >контакты</a>
        <a href="indexProfile.php" class="link-services" ><b>Профиль</b></a>
    </div>
        <div class="name_main">
            <h1>Наши мастера</h1>
            <div class="line"></div>
        </div>

        <?php foreach ($masters as $master): ?>
        <div class="card-master">
            <div class="master_img">
             <img src='<?php echo $master['picture']?>' width="100%">
            </div>
            <div class="master_info">
                    <h2><?php echo $master['name']?></h2>
                    <p><?php echo $master['description']?></p>

                        <p><b>Стаж: </b><?php echo $master['workExp']?> лет </p>

            </div>
        </div>
        <?php endforeach; ?>

        </div>



<!-- Подвал сайта -->
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