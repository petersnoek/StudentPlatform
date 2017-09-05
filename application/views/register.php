<!DOCTYPE html>
<html lang = "en">

   <head>
      <meta charset = "utf-8">
      <title>Registreren</title>
   </head>

<body>


<p> Registreer hier uw account. </p>

<?php
    if(isset($_SESSION['gelukt'])) {

?>
        <p><?php echo $_SESSION['gelukt']; ?></p>
<?php
    }
?>
<?php echo validation_errors(); ?>

<?php echo form_open('register'); ?>

    <label for="username">gebruikersnaam:</label>
    <input name="username" type="text"/><br />

    <label for="password">wachtwoord:</label>
    <input name="password" type="password"/><br />

    <label for="password2">Herhaal wachtwoord:</label>
    <input name="password2" type="password"/> <br />

    <label for="email">Email adres</label>
    <input name="email" type="text"/><br />

    <label for="leerling_nr">leerling nummer:</label>
    <input name="leerling_nr" type="text" /><br />

    <label for="klas">klas:</label>
    <input name="klas" type="text" /><br />


    <label for="geslacht">uw geslacht</label>
    <select id="geslacht" name="geslacht">
        <option value="man">Man</option>
        <option value="vrouw">Vrouw</option>
    </select><br/>

    <label for="geboortedatum">geboorte datum:</label>
    <input type="date" name="geboortedatum" /><br />


    <input type="submit" name="submit" value="Registreer" />

</form>
</body>
</html>