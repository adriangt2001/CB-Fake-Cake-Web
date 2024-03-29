<?php
    session_start();
    require_once __DIR__.'/../model/connectaDb.php';
    require_once __DIR__.'/../model/userData.php';

    $conn = getConnection();
    $userData = [
        "username" => $_POST['username'], 
        "email" => $_POST['email'], 
        "pwd" => $_POST['pwd'], 
        "address" => $_POST['address'], 
        "city" => $_POST['city'], 
        "zipcode" => $_POST['zipcode']
    ];
        
    $sessionData = addNewUser($conn, $userData);

    if($res == 1) {
        // USER DATA NOT VALID
        header('Location: /?action=register');
        exit();
    }
    elseif($res == 2) {
        // FAILED CONNECTION WITH DATABASE OR WRONG PASSWORD
        header('Location: /?action=register');
        exit();
    }
    else {
        $_SESSION['username'] = $sessionData['nombre'];
        $_SESSION['userMail'] = $sessionData['email'];
        $_SESSION['userID'] = $sessionData['id'];
        $_SESSION['profilePic'] = $sessionData['profile_pic'];
        $_SESSION['cart'] = [];
        $_SESSION['quantitatTotal'] = 0.0;
        $_SESSION['preuTotal'] = 0.0;
        header('Location: /');
        exit;
    }
?>