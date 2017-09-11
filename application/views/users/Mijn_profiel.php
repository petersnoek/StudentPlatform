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
        <p> Profiel gegevens:</p>
        <p>Rank: <?php echo $user['role_id'];?></p>
        <p>Motto: <?php echo $user['motto'];?></p>
        <p>Hobbies: <?php echo $user['hobby'];?></p>
        <p>Geslacht: <?php echo $user['geslacht'];?></p>
        <p>Klas: <?php echo $user['klas'];?></p>
        <p>Geboortedatum: <?php echo $user['geboortedatum'];?></p>
        <a href="wijzig">Wijzig profiel hier</a>
        <br></nt>
        <br>
        <p> Account gegevens:</p>
        <p>Uw Gebruikersnaam:  <?php echo $user['username'];?></p>
        <p>Uw Leerling nummer:  <?php echo $user['leerling_nr'];?></p>
        <p>Uw E-mail addres: <?php echo $user['email'];?></p>

    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-default" href="#tab1" data-toggle="tab"><span class="fa fa-cube" aria-hidden="true"></span>
                <div class="hidden-xs">vrienden</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Biografie</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="fa fa-list-alt" aria-hidden="true"></span>
                <div class="hidden-xs">Forum posts</div>
            </button>
        </div>
    </div>
</div>
