<?php
    session_start();
    require_once __DIR__.'/../model/connectaDb.php';
    require_once __DIR__.'/../model/confirm_purchase.php';

    $conn = getConnection();

    $comanda = [
        'quantitatTotal' => $_SESSION['quantitatTotal'],
        'preuTotal' => $_SESSION['preuTotal'],
        'userID' => $_SESSION['userID'],
    ];

    $purchase = addComanda($conn, $comanda);

    if (isset($_SESSION['cart'])) {
        $productosComanda = $_SESSION['cart'];
    }

    $res = addLiniaComanda($conn, $purchase, $productosComanda);

    unset($_SESSION['cart']);
    $_SESSION['quantitatTotal'] = 0.0;
    $_SESSION['preuTotal'] = 0.0;

    include_once __DIR__.'/../view/confirm_purchase.php';
?>