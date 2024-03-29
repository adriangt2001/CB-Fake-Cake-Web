
<div class="cabas">
    <h4><b>Shopping cart:</b></h4>
    <div id="main-carrito">
        <?php
        if (isset($productos)) {?>
            <div id="main-producto">
                <?php foreach($productos as $product) { ?>
                    <div class="product-box">
                        <img class="imgCarrito" src="<?php echo '../../Imagenes/'.$product['imagen']; ?>" alt="Cake Image">
                        <div class="product-info">
                            <p>Cake: <?php echo $product['name']; ?></p>
                            <p>Quantity: <?php echo $product['quantitat']; ?></p>
                            <p>Price: <?php echo $product['preu']; ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <h3 id="preuTotal">Total Price: <?php echo $precioTotal; ?>€</h3>
        <?php } ?>
    </div>
    
    <button class='default-button' id="EmptyCart" onclick="emptyCart();">Empty Cart</button>

    <?php if (isset($productos)): ?>
        <button  class='default-button' id="ConfirmPurchase" onclick="confirmPurchase();">Confirm Purchase</button>
    <?php endif; ?>
</div>




