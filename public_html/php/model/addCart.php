<?php
// controller/category_list.php
function addToCart()
{
    session_start();


    $quantitat = $_POST['quantity'];
    $itemID = $_POST['itemID'];
    $name = $_POST['name'];

    $quantitat = intval($_POST['quantity']);
    $precio = str_replace(['. ', ' €'], ['', ''], $_POST['price']);
    $precio = str_replace(',', '.', $precio);
    $precio = floatval($precio);
    $total = $quantitat * $precio;


    $_SESSION['cart'][] = [
        'id' => $itemID,
        'name' => $name,
        'quantitat' => $quantitat,
        'preu' => $total
    ];
}

?>