<?php
session_start();
require_once "vendor/connect.php";

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
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/StyleMain.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/Footer.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/Header.css'>

</head>
<body>
    <!-- Декаративный блок -->
     <div class="decor-div"></div>

    <!-- Шапка -->
    <div id="header_wrapper" style="background-color: fff0;">
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


    <div class="inform-div">
        <div class="inform-div_ceo">
            <h1>Mint</h1>
            <h2>Подарите себе новый<br> уровень отдыха и<br> комплексной заботы о<br> красоте и здоровье </h2>
            <div class="con-btn">
                <a href="indexMassage.php" class="btn">Записаться</a>
        </div>
        </div>
        <div class="inform-div_img">
                <img src="assets/img/bth_room.jpg" width="825px" height="675px" style="border-radius: 10px;">
            </div>
    </div>


    <div class="ceo">
      <h1>Mint</h1>
       <div><h3>Это прекрасное место, где Вы можете восполнить свой баланс сил и энергии, окунетесь в атмосферу комфорта, релакса и наслаждения, расслабитесь и отдохнете от городского шума и суеты.</h3></div>
    </div>

    <div class="con-char">
        <div class="con-char_first"></div>
        <div class="con-char_second">
            <div class="con-char_block">
                <div class="con-char_element">
                    <h1>Забота</h1>
                  <p>Составим индивидуальный план ухода и учтём ваши пожелания до, во время и после процедуры</p>
                </div>
            <div class="con-char_element">
                <h1>Опыт</h1>
              <p>Наши профессионалы с многолетним стажем совершенствуют свои навыки в России и за рубежом </p>
            </div>
            </div>
            <div class="con-char_block">
            <div class="con-char_element">
                <h1>Надежность</h1>
              <p>Партнёрство с международными инновационными брендами красоты и здоровья премиум-сегмента</p>
            </div>
            <div class="con-char_element">
                <h1>Универсальность</h1>
              <p>Эффективное и атравматичное решение любых медицинских и эстетических проблем в одном месте с гарантией результата</p>
            </div>
            </div>
        </div>
    </div>
    <br><br><h1 class="service_h1">Популярные услуги</h1>
    <div class="services">
        <div class="services_block">
           <a href="indexMassage.php"> <div class="services_element" style="background-image: url('assets/img/beauty-ss.jpg' );background-size:100%;"></div></a>
           <a href="indexMassage.php"> <div class="services_element" style="background-image: url('assets/img/massagehead.jpg ');background-size:100%; "></div></a>
           <a href="indexMassage.php"> <div class="services_element" style="background-image: url('assets/img/beauty-spa.jpg');background-size:100%; "></div></a>
        </div>
        
    </div>
    <div class="masters_con">
        <div></div>
        <div style="border-bottom: none;">
            <br><br><h1 class="service_h1">Наши мастера</h1>
        </div>
        <div></div>
    </div>

    <div class="masters">
       <a href="indexMasters.php"> <div class="masters_block"><div class="master-img" style="background-image: url('assets/img/master1.png' ); background-size:100%; "> </div></div></a>
       <a href="indexMasters.php"> <div class="masters_block"><div class="master-img" style="background-image: url('assets/img/master4.jpg' ); background-size:100%; "> </div></div></a>
       <a href="indexMasters.php"><div class="masters_block"><div class="master-img" style="background-image: url('assets/img/master3.jpg' ); background-size:100%; "> </div></div></a>
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
            <div class="con-main"><a href="../indexMain.php"> <img src="assets/img/logo2.png"></a>
            </div>

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