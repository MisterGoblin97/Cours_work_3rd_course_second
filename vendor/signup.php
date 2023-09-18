<?php
    session_start();
    require_once 'connect.php';

    $name = $_POST['name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $phoneNumber = $_POST['phoneNumber'];

    //проверка совпадения пароля
    if ($password === $password_confirm) {

        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../indexRegister.php');
        }
        
    //фукция хэширования пароля
        $password = md5($password);

    //запрос sql на вставку в БД
        mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `login`, `email`, `password`, `avatar`, `phoneNumber`) 
        VALUES (NULL, '$name', '$login', '$email', '$password', '$path', '$phoneNumber')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../indexLogin.php');

    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../indexRegister.php');
    }

?>
