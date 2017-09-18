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
        <div class="panel panel-default">
            <div class="panel-heading">Mijn Profiel <a class="tablewijzig" href="wijzig">Wijzig profiel hier</a></div>
            <div class="panel-body">
                <table class="table">
                <tr>
                    <th>Profiel:</th>
                    <th>School:</th>
                </tr>
                <tr>
                    <td><span class="left">Rank:</span><span class="right"><?php echo $user['role_id'];?></span></td>
                    <td><span class="left">Klas:</span><span class="right"><?php echo $user['klas'];?></span></td>
            </tr>
                <tr>
                    <td><span class="left">Motto: </span><span class="right"><?php echo $user['motto'];?></span></td>
                    <td><span class="left">Leerling nummer:  </span><span class="right"><?php echo $user['leerling_nr'];?></span></td>
                </tr>
                <tr>
                    <td><span class="left">Hobbies: </span><span class="right"><?php echo $user['hobby'];?></span></td>
                </tr>
                <tr>
                    <td><span class="left">Geslacht: </span><span class="right"><?php echo $user['geslacht'];?></span></td>
                </tr>
                <tr>
                    <td><span class="left">Geboortedatum: </span><span class="right"><?php echo $user['geboortedatum'];?></span></td>
                </tr>
                </table>
            </div>
        </div>
    <div class="panel panel-default panelaccount">
        <div class="panel-heading">Account gegevens</div>
        <div class="panel-body">
            <p>Uw Gebruikersnaam:  <?php echo $user['username'];?></p>
            <p>Uw Leerling nummer:  <?php echo $user['leerling_nr'];?></p>
            <p>Uw E-mail addres: <?php echo $user['email'];?></p>
        </div>
    </div>

</div>
