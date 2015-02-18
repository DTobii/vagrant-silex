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

    if($request->isMethod("post")){
        $title=$request->get("title");
        $text=$request->get("text");
        $mail=$request->get("mail");
        if($title=="" || $text=="" || $mail ==""){ //gibt eine Fehlerseite zurück
            return $app['templating']->render('form.html.php', array('error' => true));
        }else{ //Erfolg des Eintrags
            return $app['templating']->render('success.html.php', array('title'=>$title,'text'=>$text,'mail'=>$mail));
        }
    }else {
        //an dieser Stelle könnte man auch die einzelnen Variablen der Request Variable an das Array übergeben.

        return $app['templating']->render('form.html.php', array('request' => $request,'error'=>false));
    }
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