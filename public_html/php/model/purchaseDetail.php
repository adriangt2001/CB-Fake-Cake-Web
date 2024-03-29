<?php

    function getPurchaseDetails($conn, $comandaId) {
        $sql = 'SELECT * FROM linia_comanda WHERE comanda_id=$1';

        $params = [$comandaId];

        $res = pg_query_params($conn, $sql, $params);

        if(!$res) {
            return 1;
        }

        $purchase = pg_fetch_all($res);
        return $purchase;
    }

?>