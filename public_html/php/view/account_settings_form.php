<form method="post" action="php/controller/images.php" enctype="multipart/form-data" class="main-form">
    <label for='profilePic'>Profile Picture:</label>
    <input type="file" id="profilePic" name="profilePic" accept="image/png, image/jpeg, image/gif">

    <label for='pwdConfirm'>Enter actual password to confirm:</label>
    <input type="password" id="pwdConfirm" name="pwdConfirm" required maxlength="100" placeholder="Password">

    <input type="submit" class='submit-button' name="submit" value="Change Pic">
</form>

<form method="post" action="php/controller/account_settings.php" class="main-form">
    <label for='username'>Name:</label>
    <input type="text" id="username" name="username" autofocus pattern="[a-zA-Z\s]+" placeholder="Name">

    <label for='email'>Email address:</label>
    <input type="email" id="email" name="email" pattern=".*\..*$" placeholder="Email">

    <label for='pwd'>Password:</label>
    <input type="password" id="pwd" name="pwd" maxlength="100" placeholder="Password">
    
    <label for='address'>Address:</label>
    <input type="text" id="address" name="address" maxlength="30" placeholder="Address">

    <label for='city'>City:</label>
    <input type="text" id="city" name="city" maxlength="30" placeholder="City">

    <label for='zipcode'>Zip code:</label>
    <input type="text" id="zipcode" name="zipcode" pattern="^[0-9]{5}$" placeholder="Zip Code">

    <label for='pwdConfirm'>Enter actual password to confirm:</label>
    <input type="password" id="pwdConfirm" name="pwdConfirm" required maxlength="100" placeholder="Password">

    <input type="submit" class='submit-button' name="submit" value="Confirm Changes">
</form>