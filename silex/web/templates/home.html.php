<?php $view->extend('layout.html.php');
$view['slots']->set('title', 'Home');
?>

<!-- Homeseite mit einigen Bootstrapelementen -->

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="jumbotron">
                <h1>Meine erste Website!</h1>

                <p>Herzlich Willkommen!</p>

                <p><a class="btn btn-primary btn-sm" href="/blog" role="button"> <span class="glyphicon glyphicon-book"
                                                                                       aria-hidden="true"></span>
                        Zum Block</a></p>
            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="alert alert-info" role="alert">Blau</div>
            <div class="alert alert-danger" role="alert">Rot</div>
            <div class="alert alert-warning" role="alert">Gelb</div>
            <!-- List Element -->
            <div class="alert alert-success" role="alert">Gruen</div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="thumbnail">
                <p>Willkommen auf meiner Seite. Sowohl diese Seite als auch die Seite "Profil des Erstellers" und die
                    Seite "Impressum" sind mit statischem Inhalt gefüllt und für das Design wurde das CSS Framework
                    Bootstrap genutzt. Auf der Seite des Blogs werden von allen Blogeinträgen Auszüge aufgelistet und
                    man kann einen einzelnen Blogeintrag auswählen und komplett lesen. Auf der Seite "Blogeintrag
                    schreiben" kann von jedem eingeloggten User ein Beitrag verfasst werden. Einloggen kann man sich
                    über die Seite "Login". Dafür ist nur ein Benutzername erforderlich, der dann in der Session
                    gespeichert wird.</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="thumbnail">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
        </div>

    </div>
</div>


