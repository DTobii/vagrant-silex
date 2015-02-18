<?php //$view['slots']->output('title', 'Default title');
/**
 * @var $view
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots=$view['slots'];
$title = $slots->get("title");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Homepage | <?php $slots->output('title') ?></title>
    <script src="/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/footer.css">
    <base href="http://localhost:8001/">
    <!-- Scripts für das Menü zum öffnen und schließen. -->

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <p class="navbar-text">My first Bootstrapsite</p>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li <?= $title == "Home" ? "class=\"active\"" : "" ?>><a href="/static"><span
                            class="glyphicon glyphicon-home" aria-hidden="true"></span> Home <span class="sr-only">(current)' ? ''</span></a>
                </li>
                <li <?= $title == "Formhandling" ? "class=\"active\"" : "" ?>><a href="/form"><span
                            class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Form <span class="sr-only"> (current)' ? ''</span></a>
                </li>
                <li <?= $title == "Page3" ? "class=\"active\"" : "" ?>><a href="/static/page3"><span
                            class="glyphicon glyphicon-user" aria-hidden="true"></span> Page3 <span class="sr-only"> (current)' ? ''</span></a>
                </li>
                <li <?= $title == "Profile" ? "class=\"active\"" : "" ?>><a href="/static/profile"><span
                            class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile <span class="sr-only"> (current)' ? ''</span></a>
                </li>
                <!-- php Sorgt dafür, das das richtige auf der Website als Highlightet angezeigt wird -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- <hr/> -->
<?php $slots->output('_content') ?>
<!-- <hr/> -->

<!-- <div id="footer"> -->
    <footer class="footer">
        Erstellt von Tobias Fuertjes als Abgabeprojekt für das Fach WebEngeneering.
        <br>
        <a href="/impressum">Impressum</a>

    </footer>
<!--</div> -->
</body>
</html>
