<!DOCTYPE html>
<html>
<head>
    <title><?php echo (isset($pageTitle)) ? $pageTitle : 'StudentPlaza'; ?> </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/studentplaza/assets/css/style1.css"/>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="">studentplaza</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.davinci.nl/" target="_blank">Da Vinci College</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#"><span class="glyphicon glyphicon-fire">Codeigniter</span> </a>
            </li>

        </ul>
        <a href="login" class="btn btn-primary">Klik hier om het project te bezoeken</a>
    </div>
</nav>