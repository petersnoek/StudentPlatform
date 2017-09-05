<html>
    <head>
        <title>Studentplaza - Aanmelden</title>

        <link rel="stylesheet" type="text/css" href="/studentplaza/assets/css/style2.css"/>
    </head>
    <body>
        <div class="log_bg"></div>
        <form class="log_container" action="" method="POST">
            <h3> Studentplaza</h3><br>
            <?php echo validation_errors(); ?>
            <?php
            if(isset($_SESSION['ERROR'])) {

                ?>
                <p><?php echo $_SESSION['ERROR']; ?></p>
                <?php
            }
            ?>

                <input name="username" type="text" placeholder="Gebruikersnaam"/><br />
                <input name="password" type="password" placeholder="wachtwoord"/><br />

                <input type="submit" name="login" value="aanmelden" />

            </form>
    </body>
</html>