<?php
/**
 * @var $view
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$view->extend('layout.html.php');
$view['slots']->set('title', 'Account');
?>

<!-- Seite für den Login -->
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <?php if ($login == true) { ?> <!-- Anzeige, wenn man bereits eingeloggt ist. -->
                <div class='alert alert-success' role='alert'>Bereits eingeloggt als <?php echo $username ?> </div>
                <form method="post" action="/logout">
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            <?php } elseif ($successlogin == true) { ?> <!-- Anzeige, wenn man sich gerade eingeloggt hat -->
                <div class='alert alert-success' role='alert'>Erfolgreich eingeloggt als <?php echo $username ?> </div>
            <?php } else {
                ?> <!-- Anzeige, wenn man sich noch nicht eingeloggt hat -->
                <form method="post" action="/loginData">
                    <div class="form-group">
                        <p>Accountname</p>
                        <input type="text" class="form-control" id="username" name="username"
                               placeholder="Gib deinen Accountnamen an.">
                    </div>
                    <button type="submit" class="btn btn-primary">Anmelden</button>
                </form>
            <?php } ?>
        </div>
    </div>
</div>