<?php
use Symfony\Component\HttpFoundation\Request;

$app->get('/welcome/{name}', function ($name) use ($app) {
    return $app['templating']->render(
        'hello.html.php',
        array('name' => $name)
    );
});

$app->get('/static',function () use($app) {
    return $app['templating']->render('static.html.php');
});
$app->get('/static/profile', function () use($app){
    return $app['templating']->render('static.profile.html.php',array());
});
$app->get('/static/page2', function () use($app){
    return $app['templating']->render('Page2.html.php',array());
});
$app->get('/static/page3', function () use($app){
    return $app['templating']->render('Page3.html.php',array());
});
$app->get('/impressum', function () use($app){
    return $app['templating']->render('impressum.html.php',array());
});

$app->get('/welcome-twig/{name}', function ($name) use ($app) {
    return $app['twig']->render(
        'hello.html.twig',
        array('name' => $name)
    );
});