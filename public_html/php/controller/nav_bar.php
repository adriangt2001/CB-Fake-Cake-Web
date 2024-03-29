<?php
    if (isset($_SESSION['userID'])) {
        $quantitatTot = $_SESSION['quantitatTotal'];

        $preuTot = $_SESSION['preuTotal'];
    }
    

    include_once __DIR__."/../view/nav_bar.php";
?>