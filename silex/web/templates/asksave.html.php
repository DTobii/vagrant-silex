<?php
$view->extend('layout.html.php');
$view['slots']->set('title', 'Sind Sie sich sicher?');
?>

<!-- Zeigt die Daten die eingegeben wurden und fragt, ob diese Daten korrekt sind -->

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="alert alert-info" role="alert">Sind diese Daten korrekt?</div>
                    <div class="panel-body">
                        <form method="post" action="/save/blog">
                            <div class="form-group">
                                <!-- Anzeige der eingegebenen Daten: -->
                                <p>Titel</p>
                                <input type="text" class="form-control" id="title" name="title"
                                       value="<?php echo $title ?>"
                                       readonly>
                            </div>
                            <div class="form-group">
                                <p>Beitrag</p>
                            <textarea rows="5" class="form-control" name="text"
                                      id="text" readonly><?php echo $text ?></textarea>
                            </div>
                            <!-- Buttons zur Auswahl: Speichern oder nochmal bearbeiten -->
                            <p>
                                <button type="submit" name="buttonVersion" value="save" class="btn btn-success"
                                        role="button"> <span
                                        class="glyphicon glyphicon-ok" aria-hidden="true"></span> Speichern
                                </button>
                            </p>

                            <p>
                                <button type="submit" name="buttonVersion" value="edit" class="btn btn-danger"
                                        role="button"> <span
                                        class="glyphicon glyphicon-remove" aria-hidden="true"></span> Bearbeiten
                                </button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>