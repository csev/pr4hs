<?php
use \Tsugi\Core\LTIX;

if ( ! isset($CFG) ) {
    if (!defined('COOKIE_SESSION')) define('COOKIE_SESSION', true);
    require_once "tsugi/config.php";
    $LAUNCH = LTIX::session_start();
}

$OUTPUT->header();
?>
<style>
.navbar {
    background-image: linear-gradient(#e67300, #ff6600 60%, #ff3300);
}
</style>
