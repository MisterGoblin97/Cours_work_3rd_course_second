<?php
session_start();
require_once 'connect.php';

$login = $_POST['login'];
$password = md5($_POST['password']);

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);

    // Проверяем, является ли пользователь админом
    if ($login === "admin" && $password === md5("admin11")) {
        header('Location: ../admin/indexAdmin.php'); // Переходим на страницу админа

        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "avatar" => $user['avatar'],
            "email" => $user['email'],
            "phoneNumber" => $user['phoneNumber']
        ];
        $user_id = $_SESSION['user']['id'];
        exit();
    }

    //запись данных в глобальный массив
    $_SESSION['user'] = [
        "id" => $user['id'],
        "name" => $user['name'],
        "avatar" => $user['avatar'],
        "email" => $user['email'],
        "phoneNumber" => $user['phoneNumber']
    ];
    $user_id = $_SESSION['user']['id'];
        
    

    //переход в профиль
    header('Location: ../indexProfile.php');
} else {
    $_SESSION['message'] = 'Не верный логин или пароль';
    header('Location: ../indexLogin.php');
}

?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
