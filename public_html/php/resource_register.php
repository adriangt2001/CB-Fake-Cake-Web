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
        <form method="post" action="php/controller/register.php" class="main-form">
            <label for="username">Name:</label>
            <input type="text" id="username" name="username" required autofocus pattern="[a-zA-Z\s]+" placeholder="Name">

            <label for="email">Email address:</label>
            <input type="email" id="email" name="email" required pattern=".*\..*$" placeholder="Email">

            <label for="pwd">Password:</label>
            <input type="password" id="pwd" name="pwd" required maxlength="100" placeholder="Password">
            
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required maxlength="30" placeholder="Address">

            <label for="city">City:</label>
            <input type="text" id="city" name="city" required maxlength="30" placeholder="City">

            <label for="zipcode">Zip code:</label>
            <input type="text" id="zipcode" name="zipcode" required pattern="^[0-9]{5}$" placeholder="Zip Code">

            <input type="submit" name="registration" value="SignIn" class="submit-button">
        </form>            
    </div>
</body>
</html>