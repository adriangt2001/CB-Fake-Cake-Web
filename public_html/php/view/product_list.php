<!-- // views/product_list.php -->
<?php foreach ($products as $product): ?>
    <nav class="categorias" onclick='return showProduct(<?php echo $product["id"]; ?>);'>
        <img src=<?php echo '../../Imagenes/'.$product['imagen']; ?> width='50px' height='50px'>
        <div>
            <h2><?php echo $product['nombre']; ?></h2>
        </div>
    </nav>
<?php endforeach; ?>