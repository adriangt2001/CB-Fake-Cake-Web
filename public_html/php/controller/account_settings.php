<?php
    session_start();

    require_once __DIR__.'/../model/connectaDb.php';
    require_once __DIR__.'/../model/userData.php';

    $conn = getConnection();
    $userData = [
        'nombre' => $_POST['username'], 
        'email' => $_POST['email'], 
        'password' => $_POST['pwd'], 
        'direccion' => $_POST['address'], 
        'ciudad' => $_POST['city'], 
        'zip' => $_POST['zipcode'],
    ];

    $userData = editUser($conn, $userData, $_SESSION['userMail'], $_POST['pwdConfirm']);
    if (is_int($userData)) {
        if ($userData == 1) {
            // USER DATA NOT VALID
            echo 'USER DATA NOT VALID';
        }
        elseif ($userData == 2) {
            // FAILED CONNECTION WITH DATABASE OR WRONG PASSWORD
            echo 'FAILED CONNECTION WITH DATABASE OR WRONG PASSWORD';
        }
    }
    else {
        $_SESSION['username'] = $userData['nombre'];
        $_SESSION['userMail'] = $userData['email'];
        $_SESSION['userID'] = $userData['id'];
        header('Location: /?action=account');
        exit();
    }
?>