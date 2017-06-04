<?php
use \Tsugi\Core\LTIX;

$OUTPUT->bodyStart();
$R = $CFG->apphome . '/';
$T = $CFG->wwwroot . '/';
$F = LTIX::curPageUrlFolder();
$adminmenu = isset($_COOKIE['adminmenu']) && $_COOKIE['adminmenu'] == "true";
$set = new \Tsugi\UI\MenuSet();
$set->setHome($CFG->servicename, $CFG->apphome);
$lessons = getcwd().'/lessons.json';
if ( file_exists($lessons) ) {
    $CFG->lessons = $lessons;
    $set->addLeft('Lessons', $F.'lessons');
} else {
    // $set->addLeft('About', $F.'lessons');
    $CFG->lessons = null;
}
if ( isset($_SESSION['id']) ) {
    $submenu = new \Tsugi\UI\Menu();
    $submenu->addLink('Profile', $R.'profile');
    if ( isset($CFG->google_map_api_key) ) {
        $submenu->addLink('Map', $R.'map');
    }

    $submenu->addLink('Badges', $R.'badges');
    if ( isset($_COOKIE['adminmenu']) && $_COOKIE['adminmenu'] == "true" ) {
        $submenu->addLink('Administer', $T . 'admin/');
    }
    $submenu->addLink('Logout', $R.'logout');
    if ( isset($_SESSION['avatar']) ) {
        $set->addRight('<img src="'.$_SESSION['avatar'].'" style="height: 2em;"/>', $submenu);
    } else {
        $set->addRight(htmlentities($_SESSION['displayname']), $submenu);
    }
} else {
    $set->addRight('Login', $R.'login');
}

// Set the topNav for the session
$OUTPUT->topNavSession($set);

$OUTPUT->topNav();
$OUTPUT->flashMessages();
