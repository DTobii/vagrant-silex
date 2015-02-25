<?php
/**
 * @var $view
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$view->extend('layout.html.php');
$view['slots']->set('title', 'Account');
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <?php if ($success == true) { ?>
                <div class='alert alert-success' role='alert'>Erfolgreich eingeloggt!</div>
                <form method="post" action="/logout">
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            <?php } elseif ($login == true) { ?>
                <div class='alert alert-success' role='alert'>Bereits eingeloggt als <?php echo $username ?> </div>
                <form method="post" action="/logout">
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            <?php } elseif ($successlogin == true) { ?>
                <div class='alert alert-success' role='alert'>Erfolgreich eingeloggt als <?php echo $username ?> </div>
            <?php } else {
                ?>
                <form method="post" action="/loginData">
                    <div class="form-group">
                        <label for="title">Accountname</label>
                        <input type="text" class="form-control" id="username" name="username"
                               placeholder="Gib deinen Accountnamen an.">
                    </div>
                    <button type="submit" class="btn btn-primary">Anmelden</button>
                </form>
            <?php } ?>
        </div>
    </div>
</div>