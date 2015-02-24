<?php
$view->extend('layout.html.php');
$view['slots']->set('title', 'Blog');
?>
<!-- Seite die alle Blogeinträge darstellt -->

<body>
<div class="container">
    <div class="row">
        <div class="col-xs-9">
            <?php
            $postr = array_reverse($posts); //dreht das Array um, damit die neusten Einträge vorne stehen
            foreach ($postr as $post) {

                echo "<div class='container'>";
                echo "<div class='row'>";
                echo "<div class='col-xs-9'>";
                echo "<div class='panel panel-default'>";
                echo "<div class='panel-heading'>";
                echo "Beitragnr. :".$post['id'] . ": " . $post['title']; //Titel einfügen mit der Id davor
                echo "</div>";
                echo "<div class='panel-body'>";
                for( $counter=0; $counter<100;$counter++){ //Zeigt nur die ersten 100 Zeichen des Eintrages um den Leser einen Überblick zu verschaffen
                    if(isset($post['text'][$counter])) {
                        echo $post['text'][$counter];
                    }
                }
                echo "<form method='post' action='/readpost'>";
                echo "<br><p><button type='submit' name='nextid' class='btn btn-primary btn-xs'
                        href='/readpost' value=" . $post['id'] . " role='button'>Weiterlesen</a></p>"; //Button für das Weiterlesen
                echo "</form>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>

        <!--Menü an der rechten Seite -->
        <div class="col-xs-3">
            <div class='panel panel-default'>
                <div class="panel-heading">Navigation</div>
                <div class="panel-body">
                    <ul id="blognavigationtext"  class="list-group">
                        <li><a href="/enterblog"><span class="glyphicon glyphicon-envelope" aria-hidden="true" "></span>
                                Blogeintrag erstellen </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>