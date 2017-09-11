<head>
    <title>StudentPlaza</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/studentplaza/assets/css/styletest.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Inspiration from: https://dribbble.com/shots/1428271-iOS7-Challenge-App-->
</head>
<body>

<nav>
    <ul class="list-unstyled main-menu">

        <!--Include your navigation here-->
        <li class="text-right"><a href="#" id="nav-close">X</a></li>
        <li><a class="logo" href="<?php echo base_url();?>user/Mijn_profiel">
            <div class="logo text-center">
                <img src="http://lorempixel.com/output/people-q-g-64-64-6.jpg" class="img-responsive center-block" alt="Logo">
                <?php echo $_SESSION['username'];?>
            </div>
            </a>
        </li>
        <li><a href="<?php echo base_url();?>inside">Home <span class="icon"></span></a></li>
        <li><a href="#">Live Chat <span class="icon"></span></a></li>
        <li><a href="#">Forum <span class="icon"></span></a></li>
        <li><a href="#">Zorg <span class="icon"></span></a></a></li>
        <li><a href="#">Roosters <span class="icon"></span></a></li>
        <li><a href="#">Feedback  <span class="icon"></span></a></li>
        <li><a href="<?php echo base_url();?>logout">Afmelden <span class="icon"></span></a></li>
    </ul>
</nav>

<div class="navbar navbar-inverse navbar-fixed-top">

    <!--Include your brand here-->
    <a class="navbar-brand" href="#">StudentPlaza</a>
    <div class="navbar-header pull-right">
        <a id="nav-expander" class="nav-expander fixed">
            MENU &nbsp;<i class="fa fa-bars fa-lg white"></i>
        </a>
    </div>
</div>
<script src="/studentplaza/assets/js/inside-menu.js"></script>

<div class="container" style="margin-top: 100px;">
    <div class="clearfix"></div>
    <div class="row">
        <?= $this->session->flashdata('ERROR');?>
    </div>

    <div class="row">