<?php
    session_start();

    require_once __DIR__.'/../model/connectaDb.php';
    require_once __DIR__.'/../model/purchaseDetail.php';

    $conn = getConnection();

    $purchase = getPurchaseDetails($conn, $_GET['comandaId']);

    if ($purchase == 1) {
        // FAILED CONNECTION WITH DATABASE
    }
    else {
        include_once __DIR__.'/../view/purchase_detail.php';
    }
?>