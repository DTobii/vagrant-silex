<?php $view->extend('layout.html.php');
$view['slots']->set('title', 'Formhandling');

?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Neuer Beitrag</div>
                <div class="panel-body">
                    <?php if($error==true){
                        echo "<div class='alert alert-danger' role='alert'>Bitte alle Felder ausfuellen!</div>";
                    } ?>
                    <form method="post" action="/form">
                        <div class="form-group">
                            <label for="title">Titel</label>
                            <input type="text" class="form-control" id="title" name="title"
                                   placeholder="Gib einen Titel an.">
                        </div>
                        <div class="form-group">
                            <label for="mail">Your Mail:</label>
                            <input type="email" class="form-control" id="mail" name="mail" placeholder="E-Mail">
                        </div>
                        <div class="form-group">
                            <label for="message">Beitrag</label>
                            <textarea type="text" rows="5" columns="30" class="form-control" name="text"
                                      id="text"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Absenden</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>