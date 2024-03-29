<?php
    // controller/category_list.php

    require_once __DIR__.'/../model/connectaDb.php';
    require_once __DIR__.'/../model/categories.php';
    require_once __DIR__.'/../model/productes.php';

    $conn = getConnection();
    $categories = getCategories($conn); // Aquesta crida és al model
    $products_img = array();

    foreach ($categories as $categoria) {
        $products = getProductList($conn, $categoria['id']);
        $aux_array = array();
        for ($i = 0; $i < 2; $i++) {
            $aux_array[] = $products[$i]['imagen'];
        }
        $products_img[] = $aux_array;
    }

    include __DIR__.'/../view/category_list.php';
?>