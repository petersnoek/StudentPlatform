<!DOCTYPE html>
<html>
<head>
    <title><?php echo (isset($pageTitle)) ? $pageTitle : 'StudentPlaza'; ?> </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/studentplaza/assets/css/style2.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="grijs "id="page-top">

< <nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url();?>"><span class="logo-col"><strong>Student</strong>Plaza</span></a>
    </div>
</nav>

<div class="header">

    <div class="info">
        <form class="log_container" action="" method="POST">
            <h1><strong>Student</strong>plaza</h1><br>

            <div class="ERROR_MSG"><?php echo validation_errors(); ?></div>

            <?php
            if(isset($_SESSION['ERROR'])) {

                ?>
                <p><?php echo $_SESSION['ERROR']; ?></p>
                <?php
            }
            ?><br/>

            <input class="form-control log_txt" name="username" type="text" placeholder="Gebruikersnaam"/><br />
            <input class="form-control log_txt" name="password" type="password" placeholder="wachtwoord"/><br />

            <input class="btn btn-default log_btn" type="submit" name="login" value="aanmelden" />

        </form>

    </div>
</div>

    </body>
<footer>


    <div class="footer">
        <p>&copy; Copyright 2017 by Dustin van Hal & Romy Bijkerk.</p>
        <div class="container">
            <a target="_blank" href="https://www.davinci.nl"><i class="fa fa-university fa-1x fa-fw"></i></a>
            <a target="_blank" href='https://github.com/dustdustinn/StudentPlatform'><i class="fa fa-github fa-1x fa-fw"></i></a>

        </div>
    </div>

</footer>
</html>