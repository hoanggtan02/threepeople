<?php
if (!defined('ECLO')) die("Hacking attempt");
$jatbi = new Jatbi($app);
$setting = $app->getValueData('setting');

$app->router("/khoa-hoc", 'GET', function($vars) use ($app, $jatbi, $setting) {
    echo $app->render('templates/dhv/course.html', $vars);

});
$app->router("/khoa-hoc-da-kich-hoat", 'GET', function($vars) use ($app, $jatbi, $setting) {
    echo $app->render('templates/dhv/course-active.html', $vars);

});

$app->router("/khoa-hoc/{SEO}", 'GET', function($vars) use ($app, $jatbi, $setting) {
    echo $app->render('templates/dhv/courseDetail.html', $vars);

});
