<?php

    session_start();

    if(isset($_SESSION['userID'])) {
        $itemID = $_POST['itemID'];
        $name = $_POST['name'];

        $quantitat = intval($_POST['quantity']);
        $precio = str_replace(['. ', ' €'], ['', ''], $_POST['price']);
        $precio = str_replace(',', '.', $precio);
        $precio = floatval($precio);
        $total = $quantitat * $precio;

        $quantitatTot = $_SESSION['quantitatTotal'] + $quantitat;
        $preuTot = $_SESSION['preuTotal'] + $total;

        $_SESSION['quantitatTotal'] = $quantitatTot;

        $_SESSION['preuTotal'] = $preuTot;

        $enlaceImg = $_POST['enlaceImagen'];

        $_SESSION['cart'][] = [
            'id' => $itemID,
            'name' => $name,
            'quantitat' => $quantitat,
            'preu' => $total,
            'imagen' => $enlaceImg
        ];
    }

    //var_dump($_SESSION['cart']);
?>