<script src="/js/jquery-3.7.1.min.js"></script>


<?php
    // index.php
    session_start();
    
    $accio = isset($_GET['action']) ? $_GET['action'] : null;

    switch ($accio) {
        case 'register':
            require __DIR__.'/php/resource_register.php';
            break;
        case 'login':
            require __DIR__.'/php/resource_login.php';
            break;
        case 'account':
            require __DIR__.'/php/resource_account.php';
            break;
        case 'confirm-purchase':
            require __DIR__.'/php/resource_confirm_purchase.php';
            break;
        case 'old-index':
            require __DIR__ .'/old-index.html';
            break;
        case 'cart':
            require __DIR__.'/php/resource_cart.php';
            break;
        case 'addCart':
            require __DIR__ . '/php/controller/addCart.php';
            break;
        default:
            require __DIR__.'/php/resource_main_page.php';
            break;
    }
?>