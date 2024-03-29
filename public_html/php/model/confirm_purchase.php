<?php
    function addComanda($conn, $comanda)
        {
            $sql = "INSERT INTO comanda(num_elements, import_total, usuari_id) values($1, $2, $3) RETURNING id";
            $params = [
                $comanda['quantitatTotal'],
                $comanda['preuTotal'],
                $comanda['userID'],
            ];

            $res = pg_query_params($conn, $sql, $params);

            if (!$res) {
                return 2;
            }
            $idComanda = pg_fetch_all($res);
            
            return $idComanda[0]['id'];
        }

    function addLiniaComanda($conn, $idComanda, $productosComanda){


        foreach ($productosComanda as $producto) {
            $sql1 = "SELECT precio FROM producto WHERE id = $1";
            $params1 = [$producto['id']];
            $res1 = pg_query_params($conn, $sql1, $params1);
            if (!$res1) {
                return 2;
            }

            $preu_producte = pg_fetch_all($res1);
            $preu_producte = str_replace(['. ', ' €'], ['', ''], $preu_producte[0]['precio']);
            $preu_producte = str_replace(',', '.', $preu_producte);
            $preu_producte = floatval($preu_producte);
            $sql = "INSERT INTO linia_comanda(nom_producte, quantitat, preu_unitari, preu_total, comanda_id, producte_id) values($1, $2, $3, $4, $5, $6)";
            $params = [
                $producto['name'],
                $producto['quantitat'],
                $preu_producte,
                $producto['preu'],
                $idComanda,
                $producto['id'],
            ];
            $res = pg_query_params($conn, $sql, $params);
            if (!$res) {
                return 2;
            }
        }

        return $res;
    }
?>