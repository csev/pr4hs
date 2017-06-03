<?php

use \Tsugi\Core\LTIX;

define('COOKIE_SESSION', true);
require_once "../../tsugi/config.php";

$lessons = getcwd().'/lessons.json';
if ( file_exists($lessons) ) {
    $CFG->lessons = $lessons;
}

$launch = LTIX::session_start();

// Make PHP paths pretty .../install => install.php
$router = new Tsugi\Util\FileRouter();
$file = $router->fileCheck();
if ( $file ) {
    require_once($file);
    return;
}

// Pull in the Koseu LMS (/lessons, /map, /badges ...)
$app = new \Koseu\Core\Application($launch);
$app['debug'] = true;

$app->run();
