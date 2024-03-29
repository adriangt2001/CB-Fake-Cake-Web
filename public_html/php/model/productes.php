<?php
    function getProductList($conn, $id) {
        $res = pg_query($conn, "SELECT * FROM producto WHERE category_id=$id ORDER BY id");

        $products = pg_fetch_all($res);
        return $products;
    } 

    function getProduct($conn, $id) {
        $res = pg_query($conn, "SELECT * FROM producto WHERE id=$id");

        $product = pg_fetch_all($res);
        return $product;
    }

    function getProductSearch($conn, $searchString) {
        $sql = 'SELECT * FROM producto WHERE LOWER(nombre) LIKE $1';

        $params = [strtolower('%'.$searchString.'%')];

        $res = pg_query_params($conn, $sql, $params);

        $products = pg_fetch_all($res);
        return $products;
    }
?>