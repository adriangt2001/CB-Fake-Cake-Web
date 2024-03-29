<?php
    function getCategories($conn) {
        $res = pg_query($conn, "SELECT * FROM categoria ORDER BY id");

        $categories = pg_fetch_all($res);
        return $categories;
    } 
?>