<!DOCTYPE html> 
<html lang = "en"> 

   <head> 
      <meta charset = "utf-8"> 
      <title>Registreren</title> 
   </head>
	
<body>

<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('register'); ?>

    <label for="firstname">Voornaam</label>
    <input type="input" name="firstname" /><br />

    <label for="prefix">Tussenvoegsel</label>
    <input type="input" name="prefix" /><br />

    <label for="lastname">Achternaam</label>
    <input type="input" name="lastname" /><br />

    <label for="email">Emailadres</label>
    <input type="email" name="email" /><br />

    <label for="password">Wachtwoord</label>
    <input type="password" name="password" /><br />

    <label for="phone">Telefoonnummer</label>
    <input type="input" name="phone" /><br />

    <label for="studentnumber">Studentennummer</label>
    <input type="input" name="studentnumber" /><br />


    <input type="submit" name="submit" value="Registreer" />

</form>
</body>
</html>