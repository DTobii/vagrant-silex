<?php
$view->extend('layout.html.php');
$view['slots']->set('title', 'Erfolg!');
?>

<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="alert alert-success" role="alert">Gespeichert!</div>
                    <div class="panel-body">
                        Die Formulardaten wurden erfolgreich verarbeitet.
                        </br>
                        Die Eingabe war:
                        </br>
                        Title: <?php echo $title; ?>
                        </br>
                        E-Mail: <?php echo $mail ?>
                        </br>
                        Text: <?php echo $text ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>