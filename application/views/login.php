<html>
    <head>
        <title>Studentplaza - Aanmelden</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/studentplaza/assets/css/style2.css"/>
    </head>
    <body>
        <div class="log_bg"></div>
        <form class="log_container" action="" method="POST">
            <h1><strong>Student</strong>plaza</h1><br>

            <div class="ERROR_MSG"><?php echo validation_errors(); ?></div>

            <?php
            if(isset($_SESSION['ERROR'])) {

                ?>
                <p class="label label-warning"><?php echo $_SESSION['ERROR']; ?></p>
                <?php
            }
            ?><br/>

                <input class="form-control log_txt" name="username" type="text" placeholder="Gebruikersnaam"/><br />
                <input class="form-control log_txt" name="password" type="password" placeholder="wachtwoord"/><br />

                <input class="btn btn-default log_btn" type="submit" name="login" value="aanmelden" />

            </form>
    </body>
</html>