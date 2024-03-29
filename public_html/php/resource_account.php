<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/nav_bar.css">
    <link rel="stylesheet" type="text/css" href="css/new-design.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
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
                <nav id='account-box'>
                    <div class='default-button' id='editButton'onclick='showEditAccount();'>Edit Account</div>
                    <div class='default-button' id='purchaseListButton'onclick='showPurchases();'>Purchase List</div>
                </nav>
                <div class='main-container'>
                    <?php include_once __DIR__.'/controller/account_settings_form.php'; ?>
                </div>
            </nav>
        </div>
    </body>
</html>