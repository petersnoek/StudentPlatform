<?php
/**
 * Created by PhpStorm.
 * User: DustDustin
 * Date: 08-Sep-17
 * Time: 3:19 PM
 */
echo "<h1>Uw profiel: </h1>";
?>
<p> Account gegevens:</p>
<p>Uw Leerling nummer:  <?php echo $_SESSION['leerling_nr'];?></p>
<p>Uw E-mail addres: <?php echo $_SESSION['email'];?></p>
<p><?php echo $_SESSION['avatar'];?></p>
<p>U bent een <?php echo $_SESSION['geslacht'];?></p>
<p>Uw klas: <?php echo $_SESSION['klas'];?></p>
<p>Uw geboortedatum: <?php echo $_SESSION['DOB'];?></p>
</div>
</div>
</div>

