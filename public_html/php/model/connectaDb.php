<?php
    function getConnection() {
        $res = pg_connect("host=127.0.0.1 dbname=tdiw-e2 user=tdiw-e2 password=CPGDrbgt");
        return $res;
    } 
?>