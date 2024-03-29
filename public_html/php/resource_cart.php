<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/nav_bar.css">
        <link rel="stylesheet" type="text/css" href="css/new-design.css">
        <script src="js/jquery-3.7.1.min.js"></script>
        <script src="js/nav_bar_actions.js"></script>
        <script src="js/carrito_actions.js"></script>
        <script src="js/asyncjs.js"></script>
        <title>Cakes & Bakes</title>
    </head>
    <body>
        <div id='parent-container'>
            <?php include __DIR__.'/controller/nav_bar_reduced.php'; ?>

            <nav id='main-flex'>
                <?php include __DIR__.'/controller/carrito.php'; ?>
                
            </nav>
        </div>
    </body>
</html>
