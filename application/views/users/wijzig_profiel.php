<?php
/**
 * Created by PhpStorm.
 * User: DustDustin
 * Date: 10-Sep-17
 * Time: 11:56 AM
 */
?>
<h1>Wijzig</h1>
<?php echo (isset($_SESSION['query']) ? $_SESSION['query'] : ""); ?>
<form method="post">
    <div>
        <input type="hidden" name="id" value="<?=$user['user_id']?>">
        <label for="name">Motto:</label>
        <input type="text" id="merk" name="merk" value="<?=$user['motto']?>">
    </div>
    <div>
        <input type="hidden" name="id" value="<?=$user['user_id']?>">
        <label for="name">hobbies:</label>
        <input type="text" id="maat" name="maat" value="<?=$user['hobby']?>">
    </div>
    <div>
        <input type="hidden" name="id" value="<?=$user['user_id']?>">
        <label for="name">Geboortedatum:</label>
        <input type="text" id="voorraad" name="voorraad" value="<?=$user['geboortedatum']?>">
    </div>
    <div>
        <input type="hidden" name="id" value="<?=$user['user_id']?>">
        <label for="name">geslacht:</label>
        <input type="text" id="voorraad" name="voorraad" value="<?=$user['geslacht']?>">
    </div>
    <div>
        <input type="hidden" name="id" value="<?=$user['user_id']?>">
        <label for="name">klas:</label>
        <input type="text" id="voorraad" name="voorraad" value="<?=$user['klas']?>">
    </div>
    <div>
        <label></label>
        <input type="submit" value="Wijzig mijn gegevens!">
    </div>
