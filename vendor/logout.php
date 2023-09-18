<?php
    session_start();
    unset($_SESSION['user']);
    unset($_SESSION['serviceRequest']);
    header('Location: ../indexLogin.php');
?>