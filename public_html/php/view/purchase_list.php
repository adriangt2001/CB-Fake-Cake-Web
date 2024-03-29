<?php if (!$comandaList): ?>
    <div> Empty Purchase List </div>
<?php else: ?>
    <nav class="comandas">
    <?php foreach ($comandaList as $comanda): ?>
        <section class='comanda' id='comanda-<?php echo $comanda["id"]; ?>' onclick='showPurchase(<?php echo $comanda["id"]; ?>);'>
            <p><b>Purchase Id:</b> <?php echo $comanda['id']; ?> </p>
            <p><b>Date:</b> <?php echo date_format(date_create($comanda['data_creacio']), "Y/m/d H:i:s"); ?> </p>
            <p><b>Number of products:</b> <?php echo $comanda['num_elements']; ?> </p>
            <p><b>Total Price:</b> <?php echo $comanda['import_total']; ?> </p>
        </section>
    <?php endforeach; ?>
    </nav>
<?php endif; ?>
