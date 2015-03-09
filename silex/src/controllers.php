<?php
use Symfony\Component\HttpFoundation\Request;

$app->get('/home', function () use ($app) {
    return $app['templating']->render('home.html.php');
});

$app->get('/profile', function () use ($app) {
    return $app['templating']->render('profile.html.php', array());
});

//Route die aufgerufen wird, sobald man die Daten für einen neuen BLogeintrag speichern will, leitet auf eine Abfrage nach Korrektheit der Daten um,
//sofern alle benötigten Daten vorhanden sind
$app->match('/enterblog', function (Request $request) use ($app) {
    $username = $app['session']->get('user')['username'];
    $error = false;
    $template_name = "enterblog.html.php";
    $title = $request->get("title");
    $text = $request->get("text");
    if ($username != null) {
        if ($request->isMethod("post")) {
            if ($title == "" || $text == "") { //gibt eine Fehlerseite zurück
                $error = true;
            } else { //Abfrage, ob die Daten korrekt sind.
                $template_name = "asksave.html.php"; //Weiterleitung an die Website wo die Daten überprüft werden sollen.
            }
        } else {
            $text = "";
        }
        //an dieser Stelle könnte man auch die einzelnen Variablen der Request Variable an das Array übergeben.
        return $app['templating']->render($template_name, array('user' => true, 'title' => $title, 'text' => $text, 'error' => $error, 'save' => false));
    } else {
        $template_name = "enterblog.html.php";
        return $app['templating']->render($template_name, array('user' => false));
    }
});

//Route, die den Blogeintrag speichert und dann auf die Seite zum erstellen eines Eintrags zurückleitet und eine Erfolgsmeldung zurückgibt
$app->match('/save/blog', function (Request $request) use ($app) {
    $template_name = "enterblog.html.php";
    $username = $app['session']->get('user')['username'];
    $name = $request->get("buttonVersion");
    $save = false; //Für die Anzeige.
    $title = $request->get("title");
    $text = $request->get("text");
    if ($name == "save") {
        $dbConnection = $app['db'];
        $date = date('Y-m-d');
        $dbConnection->insert('blog_post', array('title' => $title, 'text' => $text, 'created_at' => $date, 'author' => $username));
        $save = true;
        $text = "";
        $title = "";
    }
    return $app['templating']->render($template_name, array('user' => true, 'title' => $title, 'text' => $text, 'error' => false, 'save' => $save));
});

//Route zum darstellen eines einzelnen BLogposts, der z.B. über den Button Weiterlesen ausgewählt wurde
$app->match('/readpost', function (Request $request) use ($app) {
    $dbConnection = $app['db'];
    $id = $request->get("nextid");
    $posts = $dbConnection->fetchAssoc('SELECT * FROM blog_post WHERE id= ?', array($id));
    return $app['templating']->render('blog.html.php', array('post' => $posts, 'id' => $id));
});

//Route für die Seite auf der alle Blogeinträge angezeigt werden.
$app->get('/blog', function () use ($app) {
    $dbConnection = $app['db'];
    $posts = $dbConnection->fetchAll('SELECT * FROM blog_post');
    return $app['templating']->render('allEntries.html.php', array('posts' => $posts));
});

//Route zum Impressum der Seite
$app->get('/impressum', function () use ($app) {
    return $app['templating']->render('impressum.html.php', array());
});

//Loginseite
$app->match('/login', function () use ($app) {
    if (null != ($app['session']->get('user'))) {
        return $app['templating']->render('login.html.php', array('successlogin' => false, 'success' => false, 'login' => true, 'username' => ($app['session']->get('user')['username'])));
    }
    return $app['templating']->render('login.html.php', array('successlogin' => false, 'success' => false, 'login' => false, 'username' => null));
});

//einloggen des Users über die Session
$app->match('/loginData', function (Request $request) use ($app) {
    $username = $request->get('username');
    $app['session']->set('user', array('username' => $username));
    return $app['templating']->render('login.html.php', array('successlogin' => true, 'success' => false, 'login' => false, 'username' => ($app['session']->get('user')['username'])));
});

//session leeren -> Logout
$app->match('logout', function () use ($app) {
    $username = $app['session']->get('user')['username'];
    $app['session']->remove('user');
    return $app['templating']->render('home.html.php', array('success' => true));
});


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