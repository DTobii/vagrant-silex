<?php $view->extend('layout.html.php') ?>

<?php $view['slots']->set('title', "MyFirstBootstrapSite") ?>
<!DOCTYPE html>
<html>
<head>
    <title>MyFirstBootstrapSite</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- Scripts für das Menü zum öffnen und schließen.-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <p class="navbar-text">My first Bootstrapsite</p>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home <span class="sr-only">(current)</span></a></li>
                <li><a href="https://www.google.de">Google</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Seite3</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Menu <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="active"><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="https://www.google.de">Google</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Seite3</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="jumbotron">
                <h1>My first Bootstrap website!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipsicing elit...</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        Search</a></p>
            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="alert alert-info" role="alert">Blau</div>
            <div class="alert alert-danger" role="alert">Rot</div>
            <div class="alert alert-warning" role="alert">Gelb</div>  <!-- List Element -->
            <div class="alert alert-success" role="alert">Gruen</div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="thumbnail">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="thumbnail">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
        </div>

    </div>
</div>

</body>
</html>
<?= $name; ?>!