<?php

    require_once __DIR__.'/../model/connectaDb.php';
    require_once __DIR__.'/../model/productes.php';

    $conn = getConnection();

    $products = getProductSearch($conn, $_GET['searchString']);
    if (!empty($products)) {
        include_once __DIR__.'/../view/product_list.php';
    }
?>