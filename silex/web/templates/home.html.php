<?php $view->extend('layout.html.php');
$view['slots']->set('title', 'Home');
?>

<!-- Homeseite mit einigen Bootstrapelementen -->

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="jumbotron">
                <h1>My first Bootstrap website!</h1>

                <p>Lorem ipsum dolor sit amet, consectetur adipsicing elit...</p>

                <p><a class="btn btn-primary btn-lg" href="#" role="button"> <span class="glyphicon glyphicon-search"
                                                                                   aria-hidden="true"></span>
                        Search</a></p>
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
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
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


