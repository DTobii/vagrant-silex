<?php
$view->extend('layout.html.php');
$view['slots']->set('title', 'Sind Sie sich sicher?');
?>

<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="alert alert-info" role="alert">Sind diese Daten korrekt?</div>
                    <div class="panel-body">
                        <form method="post" action="/save/blog">
                            <div class="form-group">
                                <label for="title">Titel</label>
                                <input type="text"  class="form-control" id="title" name="title" value="<?php echo $title ?>"
                                     readonly>
                            </div>
                            <div class="form-group">
                                <label for="mail">Your Mail:</label>
                                <input type="email"  value="<?php echo $mail ?>" class="form-control" id="mail" name="mail" readonly>

                            </div>

                            <div class="form-group">
                                <label for="message">Beitrag</label>
                            <textarea type="text" rows="5" columns="30" class="form-control" name="text"
                                      id="text" readonly ><?php echo $text ?> </textarea>
                            </div>
                            <p><button type="submit"  name="buttonVersion" value="save" class="btn btn-success" role="button"> <span
                                        class="glyphicon glyphicon-ok" aria-hidden="true"></span>  Speichern</button></p>

                            <p><button type="submit" name="buttonVersion" value="edit" class="btn btn-danger" role="button"> <span
                                        class="glyphicon glyphicon-remove" aria-hidden="true"></span>  dBearbeiten</button></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>