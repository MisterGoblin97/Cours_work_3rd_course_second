<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: indexProfile.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bellota+Text&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styleRegister.css">
</head>
<body>
    <!-- Форма регистрации -->
    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>ФИО</label>
        <input type="text" name="name" placeholder="Введите свое полное имя">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Почта</label>
        <input type="text" name="email" placeholder="Введите вашу почту">
        <label>Номер телефона</label>
        <input type="text" name="phoneNumber" placeholder="Введите номер телефона">
        <label>Изображение профиля</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button class="btn" type="submit"><h3>Зарегистрироваться</h3></button>
        <p>
            У вас уже есть аккаунт? - <a href="/indexLogin.php">Авторизируйтесь!</a>
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>