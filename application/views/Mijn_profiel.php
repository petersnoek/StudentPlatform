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
            <img class="card-bkimg" alt="" src="http://lorempixel.com/output/people-q-g-64-64-6.jpg">
        </div>
        <div class="useravatar">
            <img alt="" src="http://lorempixel.com/output/people-q-g-64-64-6.jpg">
        </div>
        <div class="card-info"> <span class="card-title"><?php echo $_SESSION['username'];?></span></div>
    </div>
    <div>
        <p> Account gegevens:</p>
        <p>Uw Leerling nummer:  <?php echo $_SESSION['leerling_nr'];?></p>
        <p>Uw E-mail addres: <?php echo $_SESSION['email'];?></p>
        <p><?php echo $_SESSION['avatar'];?></p>
        <p>U bent een <?php echo $_SESSION['geslacht'];?></p>
        <p>Uw klas: <?php echo $_SESSION['klas'];?></p>
        <p>Uw geboortedatum: <?php echo $_SESSION['DOB'];?></p>
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
