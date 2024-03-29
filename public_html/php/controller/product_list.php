<?php
    // controller/product_list.php

    require_once __DIR__.'/../model/connectaDb.php';
    require_once __DIR__.'/../model/productes.php';

    $conn = getConnection();
    $products = getProductList($conn, $_GET['id']); // Aquesta crida és al model

    include __DIR__.'/../view/product_list.php';
?>