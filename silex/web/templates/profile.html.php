<?php $view->extend('layout.html.php');
$view['slots']->set('title', 'Profile');
?>
<!-- "Profilseite" mit einigen Bootstrap Elementen: -->
<h2>Profil von Tobias Fuertjes</h2>
<br>
<table class="table table-bordered ">
    <!-- Man kann die Tabellenreihen noch gestalten, z.B. mit einem Hintergrund -->
    <tr class="info">
        <td>Name:</td>
        <td>Tobias Fuertjes</td>
    </tr>
    <tr>
        <td>Alter:</td>
        <td>18 Jahre</td>
    </tr>

    <tr>
        <td>Wohnort</td>
        <td>Oberhausen</td>
    </tr>
</table>
<br>
<br>
<!-- Man kann auch noch das <p> Element gestalten: -->
<p class="text-success">Danke für Ihr Interesse!</p>

