<?php echo validation_errors(); ?>
<?php
if(isset($_SESSION['ERROR'])) {

    ?>
    <p><?php echo $_SESSION['ERROR']; ?></p>
    <?php
}
?>
    <form action="" method="POST">
<label for="username">gebruikersnaam:</label>
<input name="username" type="text"/><br />

<label for="password">wachtwoord:</label>
<input name="password" type="password"/><br />

<input type="submit" name="login" value="aanmelden" />

</form>