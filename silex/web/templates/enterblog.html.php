<?php $view->extend('layout.html.php');
$view['slots']->set('title', 'Formhandling');

?>
<!-- Seite um einen Blogeintrag verfassen zu können -->
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <?php if ($user == true) { ?>   <!-- Kontrolle ob es überhaupt einen angemeldeten User gibt -->
                <div class="panel panel-default">
                    <div class="panel-heading">Neuer Beitrag</div>
                    <div class="panel-body">
                        <!-- Alerts werden für eventuell Errormeldungen genutzt-->
                        <?php if ($error == true) {
                            echo "<div class='alert alert-danger' role='alert'>Bitte alle Felder ausfuellen!</div>";
                        } ?>
                        <?php if ($save == true) {
                            echo "<div class='alert alert-success' role='alert'>Gespeichert!</div>";
                        } ?>
                        <!-- Eingabefelder (Benutzer ist in der Session gespeichert und wird dort abgerufen): -->
                        <form method="post" action="/enterblog">
                            <div class="form-group">
                                <p>Titel</p>
                                <input value="<?php echo $title ?>" type="text" class="form-control" id="title"
                                       name="title"
                                       placeholder="Gib einen Titel an.">
                            </div>
                            <div class="form-group">
                                <p>Beitrag</p>
                            <textarea rows="5" class="form-control" name="text"
                                      id="text"><?php echo $text ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Absenden</button>
                        </form>
                    </div>
                </div>
                <!--Weitere Errormeldung: -->
            <?php } else {
                echo "<div class='alert alert-danger' role='alert'>Die Erstellung eines Beitrages ist ohne Anmeldung nicht möglich!</div>";
            } ?>
        </div>
    </div>
</div>