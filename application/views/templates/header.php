<!DOCTYPE html>
<html>
<head>
    <title><?php echo (isset($pageTitle)) ? $pageTitle : 'intern'; ?> </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--inladen van bootstrap en fontawesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- inladen van eigen css -->
    <link rel="stylesheet" type="text/css" href="/studentplaza/assets/css/style1.css"/>
    <!--inladen van jquery base -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- inladen van bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="grijs "id="page-top">
<!--start nav bar-->
< <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><span class="logo-col"><strong>Student</strong>Plaza</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#over">Over StudentPlaza</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#Ons_doel">Ons Doel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#team">Het Team</a>
                </li>
            </ul>
        </div>
    </div>
</nav><!-- einde navbar -->
<!--start header-->
<div class="header">

    <div class="info">
        <h1>Studentplaza</h1>
        <div class="meta">
            <p>Het social platform van MBO Gorinchem<br>
                <a href="login" class="logo">ga naar het project</a></p>
        </div>
    </div>
</div>