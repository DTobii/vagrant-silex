<?php
use Symfony\Component\HttpFoundation\Request;

$app->get('/welcome/{name}', function ($name) use ($app) {
    return $app['templating']->render(
        'hello.html.php',
        array('name' => $name)
    );
});

$app->get('/static', function () use ($app) {
    return $app['templating']->render('static.html.php');
});
$app->get('/static/profile', function () use ($app) {
    return $app['templating']->render('static.profile.html.php', array());
});
$app->match('/form', function (Request $request) use ($app) {
    $error = false;
    $template_name="form.html.php";
    $title = $request->get("title");
    $text = $request->get("text");
    $mail = $request->get("mail");
    if ($request->isMethod("post")) {
        if ($title == "" || $text == "" || $mail == "") { //gibt eine Fehlerseite zurück
            $error = true;
        } else { //Erfolg des Eintrags
            //$dbConnection = $app['db'];
            //$date = date('Y-m-d');
            //$dbConnection->insert('blog_post', array('title' => $title, 'text' => $text, 'created_at' => $date));
            $template_name="asksave.html.php";
        }
    }
    //an dieser Stelle könnte man auch die einzelnen Variablen der Request Variable an das Array übergeben.

    return $app['templating']->render($template_name, array('title' => $title, 'text' => $text, 'mail' => $mail, 'error'=>$error,'save'=>false));
});

$app->match('/save/blog', function(Request $request) use ($app){
    $template_name="form.html.php";
    $name=$request->get("buttonVersion");
    $save=false; //Für die Anzeige.
    $title = $request->get("title");
    $text = $request->get("text");
    $mail = $request->get("mail");
    if($name=="save") {
        $dbConnection = $app['db'];
        $date = date('Y-m-d');
        $dbConnection->insert('blog_post', array('title' => $title, 'text' => $text, 'created_at' => $date));
        $save=true;
    }

    return $app['templating']->render($template_name, array('title' => $title, 'text' => $text, 'mail' => $mail, 'error'=>false, 'save'=>$save));
});

$app->get('/static/page3', function () use ($app) {
    return $app['templating']->render('Page3.html.php', array());
});
$app->get('/impressum', function () use ($app) {
    return $app['templating']->render('impressum.html.php', array());
});

$app->get('/welcome-twig/{name}', function ($name) use ($app) {
    return $app['twig']->render(
        'hello.html.twig',
        array('name' => $name)
    );
});