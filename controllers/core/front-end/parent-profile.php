<?php
if (!defined('ECLO')) die("Hacking attempt");
$jatbi = new Jatbi($app);
$setting = $app->getValueData('setting');

$app->router("/parent-profile", 'GET', function($vars) use ($app, $jatbi, $setting) {
    echo $app->render('templates/dhv/parent-profile.html', $vars);

});