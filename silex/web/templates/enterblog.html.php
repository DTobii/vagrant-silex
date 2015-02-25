<?php $view->extend('layout.html.php');
$view['slots']->set('title', 'Formhandling');

?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <?php if ($user == true) { ?>
                <div class="panel panel-default">
                    <div class="panel-heading">Neuer Beitrag</div>
                    <div class="panel-body">
                        <?php if ($error == true) {
                            echo "<div class='alert alert-danger' role='alert'>Bitte alle Felder ausfuellen!</div>";
                        } ?>
                        <?php if ($save == true) {
                            echo "<div class='alert alert-success' role='alert'>Gespeichert!</div>";
                        } ?>
                        <form method="post" action="/enterblog">
                            <div class="form-group">
                                <p>Titel</p>
                                <input value="<?php echo $title ?>" type="text" class="form-control" id="title"
                                       name="title"
                                       placeholder="Gib einen Titel an.">
                            </div>
                            <div class="form-group">
                               <!-- <label for="message">Beitrag</label> -->
                                <p>Beitrag</p>
                            <textarea rows="5"  class="form-control" name="text"
                                      id="text"> <?php echo $text ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Absenden</button>
                        </form>
                    </div>
                </div>
            <?php } else {
                echo "<div class='alert alert-danger' role='alert'>Die Erstellung eines Beitrages ist ohne Anmeldung nicht möglich!</div>";
            } ?>
        </div>
    </div>
</div>