<?php
/**
 * @var $post
 * @var $posts
 * @var $view
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$view->extend('layout.html.php');
$view['slots']->set('title', 'Blog');
?>
<!-- Seite die alle Blogeinträge darstellt -->


<div class="container">
    <div class="row">
        <div class="col-xs-9">
            <?php
            $postr = array_reverse($posts); //dreht das Array um, damit die neusten Einträge vorne stehen
            foreach ($postr as $post) { //Schleife, die alle Einträge durchgeht.
                ?>
                <div class='container'>
                    <div class='row'>
                        <div class='col-xs-9'>
                            <div class='panel panel-default'>
                                <div class='panel-heading'>
                                    <!-- Ausgabe des Titels und des Authors: -->
                                    <?php echo "Beitragnr." . $post['id'] . ": " . $post['title'] . "<br>Erstellt am:" . date('d.m.Y', strtotime($post['created_at'])); ?>
                                    <br>
                                    <?php echo "Erstellt von: " . $post['author']; ?>
                                </div>
                                <div class='panel-body'> <!-- Ausgabe des Beitrages-->
                                    <?php for ($counter = 0; $counter < 200; $counter++) { //Zeigt nur die ersten 200 Zeichen des Eintrages um den Leser einen Überblick zu verschaffen
                                        if (isset($post['text'][$counter])) {
                                            echo $post['text'][$counter];
                                        }
                                    }
                                    if (isset($post['text'][200])) { //Kontrolliert, ob überhaupt ... angezeigt werden muss, oder ob der Beitrag nicht doch kürzer ist
                                        ?>
                                        ... <!-- Die Punkte die symbolisieren, dass es weiter geht -->
                                    <?php } ?>
                                    <form method='post' action='/readpost'>
                                        <br>
                                        <!--Button für das Weiterlesen-->
                                        <p>
                                            <button type='submit' name='nextid' class='btn btn-default btn-xs'
                                                    value=" <?php echo $post['id'] ?> " role='button'>
                                                Weiterlesen &#x25BC;</button>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>

        <!--Menü an der rechten Seite -->
        <div class="col-xs-3">
            <div class='panel panel-default'>
                <div class="panel-heading">Navigation</div>
                <div class="panel-body">
                    <ul id="blognavigationtext" class="list-group">
                        <!-- Link zum erstellen eines Beitrages: -->
                        <li><a href="/enterblog"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                Blogeintrag erstellen </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
