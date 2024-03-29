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
        <?php include __DIR__.'/controller/nav_bar_reduced.php'; ?>

        <div class="main-container">
            <form method="post" action="php/controller/login.php" class="main-form">
                <label>Email Address:</label>
                <input type="email" id="email" name="email" required pattern=".*\..*$" placeholder="Email">

                <label>Password:</label>
                <input type="password" id="pwd" name="pwd" required maxlength="100" placeholder="Password">

                <input type="submit" name="login" value="LogIn" class="submit-button">
            </form>
        </div>
    </body>
</html>