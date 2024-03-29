<nav id ="navBar">
    
    <a href="/" class="nav" id = "Title"><h1>Cakes & Bakes</h1></a>
    <?php if(isset($_SESSION['username'])) : ?>
        <a class="nav" href="/?action=cart"> <img id='cart' src='../../Imagenes/cart.png' width='50px' height='50px' alt=""/> </a>
        <div id="extras">
            <h3 id="quantitat">Quantity: <?php echo $quantitatTot; ?> </h3>
            <h3 id="preu">Total Price: <?php echo $preuTot; ?>€</h3>
        </div>
        <nav class="nav dropdown">
            <img id='profile' src=<?php echo '../../UserImages/'.$_SESSION['profilePic']; ?> width='50px' height='50px'/>
            <nav class="dropdownbtn">My Profile</nav>
            <nav class="dropdown-content">
                <a href="/?action=account">My Account</a>
                <a href="/php/controller/logout.php">Log Out</a>
            </nav>
        </nav>
    <?php else : ?>
        <a href="/?action=register" class="nav button">Register</a>

        <a href="/?action=login" class="nav button">LogIn</a>
    <?php endif; ?>
    
</nav>