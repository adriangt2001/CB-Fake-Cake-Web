<img id='image' src=<?php echo '../../Imagenes/'.$product[0]['imagen']; ?> alt=":)">

<section id='details'>

    <h2 id='nombre'><?php echo $product[0]['nombre']; ?></h2>
    

    <p id="descripcion"><?php echo $product[0]['descripcion']; ?></p>

    <p id="precio"><?php echo $product[0]['precio']; ?></p>
    
    <form method="post" id="addToCartForm" onsubmit="submitForm();">
        <input type="hidden" name="itemID" value="<?php echo $product[0]['id']; ?>">
        <input type="hidden" name="name" value="<?php echo $product[0]['nombre']; ?>">
        <input type="hidden" name="price" value="<?php echo $product[0]['precio']; ?>">
        <input type="hidden" name="enlaceImagen" value="<?php echo $product[0]['imagen']; ?>">
        <label for="quantity">
            <input type="text" name="quantity" id="quantityInput" placeholder="Set quantity" pattern="[1-9]" required>
        </label>
        <input class='default-button' type="submit" id="addToCartButton" value="Add to cart">
    </form>
</section>

