<?php
    session_start();
    unset($_SESSION['cart']);
    $_SESSION['quantitatTotal'] = 0.0;
    $_SESSION['preuTotal'] = 0.0;
    
    include_once __DIR__.'/../view/carrito.php';
?>