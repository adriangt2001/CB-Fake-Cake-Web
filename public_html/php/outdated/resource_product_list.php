<DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/nav_bar.css">
        <link rel="stylesheet" type="text/css" href="css/background.css">
        <script src="js/jquery-3.7.1.min.js"></script>
        <script src="js/nav_bar_actions.js"></script>
        <title>Cakes & Bakes</title>
    </head>
    <body>
        
        <?php include __DIR__.'/controller/nav_bar.php'; ?>

        <nav id="category-nav">
            <?php include __DIR__.'/controller/category_list.php' ?>
        </nav>

        <div id="categorygrid">
            <?php require __DIR__.'/controller/product_list.php'; ?>
        </div>
    </body>
</html>