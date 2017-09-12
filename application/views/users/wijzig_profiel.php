<?php
/**
 * Created by PhpStorm.
 * User: DustDustin
 * Date: 10-Sep-17
 * Time: 11:56 AM
 */
?>
<div class="container2">
<h1>Wijzig</h1>

    <?php echo (isset($_SESSION['query']) ? $_SESSION['query'] : ""); ?>
    <form action="upload_avatar" method="post" enctype="multipart/form-data">
        <?php
        if(isset($_SESSION['ERRORava'])) {

            ?>
            <!-- als session error is gevuld weergeef error -->
            <p><?php echo $_SESSION['ERRORava']; ?></p>
            <?php
        }
        ?>
        <input type="hidden" name="size" value="1000000">
            <div>
                <input type="hidden" name="user_id" value="<?=$user['user_id']?>">
                <label for="avatar">Avatar:</label>
                <input type="file" accept="image/*" name="avatar">
            </div>
            <div>
                <input type="submit" name="upload" value="Upload avatar">
            </div>
    </form>
    <form action="wijzig" method="post">
        <div>
            <input type="hidden" name="user_id" value="<?=$user['user_id']?>">
            <label for="name">Motto:</label>
            <input type="text" id="motto" name="motto" value="<?=$user['motto']?>">
        </div>
        <div>
            <input type="hidden" name="user_id" value="<?=$user['user_id']?>">
            <label for="name">hobbies:</label>
            <input type="text" id="hobby" name="hobby" value="<?=$user['hobby']?>">
        </div>
        <div>
            <input type="hidden" name="id" value="<?=$user['user_id']?>">
            <label for="name">Geboortedatum:</label>
            <input type="text" id="DOB" name="DOB" value="<?=$user['geboortedatum']?>">
        </div>
        <div>
            <input type="hidden" name="user_id" value="<?=$user['user_id']?>">
            <label for="name">geslacht:</label>
            <select id="geslacht" name="geslacht">
                <option value="man">Man</option>
                <option value="vrouw">Vrouw</option>
            </select>
        </div>
        <div>
            <input type="hidden" name="user_id" value="<?=$user['user_id']?>">
            <label for="name">klas:</label>
            <input type="text" id="klas" name="klas" value="<?=$user['klas']?>">
        </div>
        <div>
            <label></label>
            <input type="submit" value="Wijzig mijn gegevens!">
        </div>
    </form>
</div>