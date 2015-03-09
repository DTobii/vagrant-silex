<?php
use Symfony\Component\HttpFoundation\Request;

//Route für die Homeseite
$app->get('/home', function () use ($app) {
    return $app['templating']->render('home.html.php');
});

//Route für die Profilseite
$app->get('/profile', function () use ($app) {
    return $app['templating']->render('profile.html.php', array());
});

//Route die aufgerufen wird, sobald man die Daten für einen neuen BLogeintrag speichern will, leitet auf eine Abfrage nach Korrektheit der Daten um,
//sofern alle benötigten Daten vorhanden sind
$app->match('/enterblog', function (Request $request) use ($app) {
    $username = $app['session']->get('user')['username']; //Username wird aus der Session gelesen
    $error = false; //Erstmal gibt es keinen Fehler
    $template_name = "enterblog.html.php"; //Das Template, welches geladen werden soll
    $title = $request->get("title"); //Titel wird aus dem Request gelesen
    $text = $request->get("text"); //Text wird aus dem Request gelesen
    if ($username != null) { //Wenn der Benutzer eingeloggt ist;
        if ($request->isMethod("post")) { //Wenn die Methode eine Post methode war:
            if ($title == "" || $text == "") { //gibt eine Fehlerseite zurück
                $error = true; //Gibt einen Fehler, da nicht alle Textfelder ausgefüllt waren
            } else { //Abfrage, ob die Daten korrekt sind.
                $template_name = "asksave.html.php"; //Weiterleitung an die Website wo die Daten überprüft werden sollen.
            }
        } else {
            $text = ""; //Damit das Feld bei einer get Methode auf jeden Fall leer ist
        }
        //an dieser Stelle könnte man auch die einzelnen Variablen der Request Variable an das Array übergeben, übergabe das passenden Werte an die Render Funktion.
        return $app['templating']->render($template_name, array('user' => true, 'title' => $title, 'text' => $text, 'error' => $error, 'save' => false));
    } else { //Es gibt keinen User
        $template_name = "enterblog.html.php"; //Man wird wieder auf die Seite geleitet, es wird eine Fehlermeldung erscheinen, das man nciht eingeloggt ist, erkennbar duch die Variable User.
        return $app['templating']->render($template_name, array('user' => false));
    }
});

//Route, die den Blogeintrag speichert und dann auf die Seite zum erstellen eines Eintrags zurückleitet und eine Erfolgsmeldung zurückgibt
$app->match('/save/blog', function (Request $request) use ($app) {
    $template_name = "enterblog.html.php";
    $username = $app['session']->get('user')['username'];
    $name = $request->get("buttonVersion"); //Abfrage, welcher Button geklickt wurde
    $save = false; //Für die Anzeige.
    $title = $request->get("title"); //laden vom Titel
    $text = $request->get("text"); //Laden vom Text
    if ($name == "save") { //Wurde der Save Button gedrückt, passiert das in der If Abfrage
        $dbConnection = $app['db']; //Datenbankverbindung wird geladen
        $date = date('Y-m-d'); //Datum wird abgefragt
        $dbConnection->insert('blog_post', array('title' => $title, 'text' => $text, 'created_at' => $date, 'author' => $username)); //Eintrag wird gespeichert
        $save = true; //Das Speichern war erfolgreich
        $text = ""; //Rücksetzung vom Text
        $title = ""; //Rücksetzung vom Titel
    }
    return $app['templating']->render($template_name, array('user' => true, 'title' => $title, 'text' => $text, 'error' => false, 'save' => $save));
});

//Route zum darstellen eines einzelnen BLogposts, der z.B. über den Button Weiterlesen ausgewählt wurde
$app->match('/readpost', function (Request $request) use ($app) {
    $dbConnection = $app['db']; //Datenbankverbindung wird geladen
    $id = $request->get("nextid"); //Id wird vom Button geladen
    $posts = $dbConnection->fetchAssoc('SELECT * FROM blog_post WHERE id= ?', array($id)); //Blogeintrag wird anhand der ID geladen
    return $app['templating']->render('blog.html.php', array('post' => $posts, 'id' => $id)); //der render Funktion wird der POst und die ID übergeben
});

//Route für die Seite auf der alle Blogeinträge angezeigt werden.
$app->get('/blog', function () use ($app) {
    $dbConnection = $app['db']; //Datenbankverbindung
    $posts = $dbConnection->fetchAll('SELECT * FROM blog_post'); //Alle Bloeinträge werden geladen
    return $app['templating']->render('allEntries.html.php', array('posts' => $posts)); //der render Funktion werden alle posts übergeben
});

//Route zum Impressum der Seite
$app->get('/impressum', function () use ($app) {
    return $app['templating']->render('impressum.html.php', array());
});

/*
 * Erklärung der Variablen für die Loginseiten
 * username: Der name des Users
 * login: ob man bereits eingeloggt ist
 * successlogin: ob gerade ein erfolgreicher Login stattgefunden hat, damit "Erfolgreich eingeloggt als X" angezeigt werden kann
 */

//Loginseite
$app->match('/login', function () use ($app) {
    if (null != ($app['session']->get('user'))) { //Wenn es einen Benutzer gibt wird die render Funktion im Rumpf der If Abfrage aufgerufen
        return $app['templating']->render('login.html.php', array('successlogin' => false, 'login' => true, 'username' => ($app['session']->get('user')['username'])));//Der Render Funktion werden die passenden Werte übergeben
    }
    return $app['templating']->render('login.html.php', array('successlogin' => false, 'login' => false, 'username' => null)); //Wenn der Benutzer nicht eingeloggt ist
});

//einloggen des Users über die Session
$app->match('/loginData', function (Request $request) use ($app) {
    $username = $request->get('username'); //Der Text aus dem Textfeld wird geladen
    $app['session']->set('user', array('username' => $username)); //Der user wird in der Session gespeichert
    return $app['templating']->render('login.html.php', array('successlogin' => true, 'login' => false, 'username' => ($app['session']->get('user')['username'])));
});

//session leeren -> Logout
$app->match('logout', function () use ($app) {
    $username = $app['session']->get('user')['username']; //der Username wird geladen
    $app['session']->remove('user'); //der Username wird gelöscht
    return $app['templating']->render('home.html.php', array());
});

//Zuvor eingefügte Seiten:


$app->get('/static/page3', function () use ($app) {
    return $app['templating']->render('Page3.html.php', array());
});


$app->get('/welcome-twig/{name}', function ($name) use ($app) {
    return $app['twig']->render(
        'hello.html.twig',
        array('name' => $name)
    );
});

$app->get('/welcome/{name}', function ($name) use ($app) {
    return $app['templating']->render(
        'hello.html.php',
        array('name' => $name)
    );
});