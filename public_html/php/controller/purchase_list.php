<?php
    session_start();
    require_once __DIR__.'/../model/connectaDb.php';
    require_once __DIR__.'/../model/purchaseList.php';

    $conn = getConnection();

    $comandaList = getPurchaseList($conn, $_SESSION['userID']);

    include_once __DIR__.'/../view/purchase_list.php';
?>