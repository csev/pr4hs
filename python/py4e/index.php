<?php
use \Tsugi\Core\LTIX;
use \Tsugi\UI\Output;

require_once "../../top.php";
require_once "../../nav.php";
?>
<div id="container">
<img src="macbook-926558_640.jpg" style="float:right; width: 40%;">
<h1>Python for Everybody</h1>
<p>
Stuff would go here...
</p>
<p>
View this folder in 
<a href="https://github.com/csev/pr4hs/tree/master/python/py4e" target="_blank">GitHub</a>.
</p>
<!--
<?php
echo(Output::safe_var_dump($_SESSION));
var_dump($USER);
?>
-->
</div>
<?php $OUTPUT->footer();
