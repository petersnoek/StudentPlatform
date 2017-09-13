<?php
/**
 * Created by PhpStorm.
 * User: DustDustin
 * Date: 08-Sep-17
 * Time: 3:19 PM
 */
?>


<div class="col-lg-12 col-sm-12">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="<?php echo base_url();?>assets/img/avatars/<?php echo $user['avatar'];?>">
        </div>
        <div class="useravatar">
            <img alt="" src="<?php echo base_url();?>assets/img/avatars/<?php echo $user['avatar'];?>">
        </div>
        <div class="card-info"> <span class="card-title"><?php echo $_SESSION['username'];?></span></div>
    </div>
    <div>
        <div class="panel panel-default">
            <div class="panel-heading">Mijn Profiel</div>
            <div class="panel-body">
                <table class="table">
                <tr>
                    <th>Profiel:</th>
                    <th>School:</th>
                </tr>
                <tr>
                    <td>Rank: <?php echo $user['role_id'];?></td>
                    <td>Klas: <?php echo $user['klas'];?></td>
                </tr>
                <tr>
                    <td>Motto: <?php echo $user['motto'];?></td>
                    <td>Leerling nummer:  <?php echo $user['leerling_nr'];?></td>
                </tr>
                <tr>
                    <td>Hobbies: <?php echo $user['hobby'];?></td>
                </tr>
                <tr>
                    <td>Geslacht: <?php echo $user['geslacht'];?></td>
                </tr>
                <tr>
                    <td>Geboortedatum: <?php echo $user['geboortedatum'];?></td>
                </tr>
                </table>






                <a href="wijzig">Wijzig profiel hier</a>
            </div>
        </div>
    </div>
    <p> Account gegevens:</p>
    <p>Uw Gebruikersnaam:  <?php echo $user['username'];?></p>
    <p>Uw Leerling nummer:  <?php echo $user['leerling_nr'];?></p>
    <p>Uw E-mail addres: <?php echo $user['email'];?></p>
</div>
