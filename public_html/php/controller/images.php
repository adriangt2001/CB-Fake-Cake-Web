<?php
    session_start();

    require_once __DIR__.'/../model/connectaDb.php';
    require_once __DIR__.'/../model/userData.php';
    require_once __DIR__.'/../model/images.php';


    $imageSubmitted = (!empty($_FILES['profilePic'])) ? uploadImage(__DIR__.'/../../UserImages/', $_SESSION['userID'], $_FILES['profilePic']) : 3; // 3->NO FILE

    if (is_string($imageSubmitted)) {
        $conn = getConnection();

        $userData = editProfilePic($conn, $imageSubmitted, $_SESSION['userMail'], $_POST['pwdConfirm']);
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
            $_SESSION['profilePic'] = $userData['profile_pic'];
        }
        
    }
    elseif ($imageSubmitted == 1) {
        // UPLOAD DENIED
    }
    elseif ($imageSubmitted == 2) {
        // ERROR UPLOADING FILE
    }
    //elseif ($imageSubmitted == 3) {
        // JUST EMPTY FILE, EVERYTHING OK
    //}
    
    header('Location: /?action=account');
    exit();
?>