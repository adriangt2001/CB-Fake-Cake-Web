<?php
    function getPurchaseList($conn, $userId) {
        $sql = 'SELECT * FROM comanda WHERE usuari_id=$1';

        $params = [$userId];

        $res = pg_query_params($conn, $sql, $params);

        if (!$res) {
            return 2;
        }

        $comandaList = pg_fetch_all($res);

        return $comandaList;
    }
?>