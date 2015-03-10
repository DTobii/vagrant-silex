<?php
/**
 * @var $view
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
$title = $slots->get("title");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Homepage | <?php $slots->output('title') ?></title>
    <script src="/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/ids.css">
    <base href="http://localhost:8001/">
    <!-- Scripts für das Menü zum öffnen und schließen. -->

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>

<!--Hauptseite des Layouts, also Navigationsleiste und Fußzeile -->

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <p class="navbar-text">Navigation </p>
        </div>
        <!-- Navigationsleiste mit allen Buttons: -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li <?= $title == "Home" ? "class=\"active\"" : "" ?>><a href="/home"><span
                            class="glyphicon glyphicon-home" aria-hidden="true"></span> Home <span class="sr-only">(current)' ? ''</span></a>
                </li>
                <li <?= $title == "blog" ? "class=\"active\"" : "" ?>><a href="/blog"><span
                            class="glyphicon glyphicon-book" aria-hidden="true"></span> Blog <span class="sr-only"> (current)' ? ''</span></a>
                </li>
                <li <?= $title == "Formhandling" ? "class=\"active\"" : "" ?>><a href="/enterblog"><span
                            class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Blogeintrag schreiben<span
                            class="sr-only"> (current)' ? ''</span></a>
                </li>
                <li <?= $title == "Profile" ? "class=\"active\"" : "" ?>><a href="/profile"><span
                            class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Profil des Erstellers <span
                            class="sr-only"> (current)' ? ''</span></a>
                </li>
                <!-- php Sorgt dafür, das das richtige auf der Website als Highlightet angezeigt wird -->
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li <?= $title == "Login" ? "class=\"active\"" : "" ?>><a href="/login"><span
                            class="glyphicon glyphicon-user" aria-hidden="true"></span> Login <span class="sr-only"> (current)' ? ''</span></a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- Hier wird nun der Inhalt eingefügt-->
<?php $slots->output('_content') ?>
<!--Danach folgt der Footer der auf das Impressum verlinkt.-->
<footer class="footer">
    Erstellt von Tobias Fuertjes als Abgabeprojekt für die Vorlesung Webengineering.
    <br>
    <a href="/impressum">Impressum</a>

</footer>
</body>
</html>
