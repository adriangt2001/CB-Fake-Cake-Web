<?php

    if (isset($_SESSION['cart'])) {
        $productos = $_SESSION['cart'];
    }

    $precioTotal = $_SESSION['preuTotal'];
    require_once __DIR__.'/../view/carrito.php';
?>