<?php
    session_start();
    unset($_SESSION['userID']);
    unset($_SESSION['username']);
    unset($_SESSION['userMail']);
    unset($_SESSION['preuTotal']);
    unset($_SESSION['quantitatTotal']);
    unset($_SESSION['cart']);
    header('Location: /');
    exit();
?>