<?php foreach($purchase as $detail): ?>
    <section>
        <p><b>Product:</b> <?php echo $detail['nom_producte']; ?></p>
        <p><b>Ammount:</b> <?php echo $detail['quantitat']; ?></p>
        <p><b>Unit Price:</b> <?php echo $detail['preu_unitari']; ?></p>
        <p><b>Total Price:</b> <?php echo $detail['preu_total']; ?></p>
    </section>
<?php endforeach; ?>
