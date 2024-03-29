<?php
    session_start();
    require_once __DIR__.'/../model/connectaDb.php';
    require_once __DIR__.'/../model/userData.php';

    $conn = getConnection();
    $userData = [
        "email" => $_POST['email'], 
        "pwd" => $_POST['pwd']
    ];
    
    $sessionData = checkUser($conn, $_POST['email'], $_POST['pwd']);
    if (is_int($sessionData)) {
        if ($sessionData == 1) {
            // USER DATA NOT VALID
            echo 'USER DATA NOT VALID';
            header('Location: /?action=login');
            exit();
        }
        elseif ($sessionData == 2) {
            // FAILED CONNECTION WITH DATABASE OR WRONG PASSWORD
            echo 'FAILED CONNECTION WITH DATABASE OR WRONG PASSWORD';
            header('Location: /?action=login');
            exit();
        }
    }
    else {
        $_SESSION['username'] = $sessionData['nombre'];
        $_SESSION['userMail'] = $sessionData['email'];
        $_SESSION['userID'] = $sessionData['id'];
        $_SESSION['profilePic'] = $sessionData['profile_pic'];
        $_SESSION['quantitatTotal'] = 0.0;
        $_SESSION['preuTotal'] = 0.0;
        if(!isset($_SESSION['cart'])){
            $_SESSION['cart'] = [];
        }
        header('Location: /');
        exit();
    }
?>