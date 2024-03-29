<?php
    // controller/product_detail.php

    require_once __DIR__.'/../model/connectaDb.php';
    require_once __DIR__.'/../model/productes.php';

    $conn = getConnection();
    $product = getProduct($conn, $_GET['id']); // Aquesta crida és al model

    include __DIR__.'/../view/product_detail.php';
?>