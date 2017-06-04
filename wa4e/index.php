<?php
use \Tsugi\Core\LTIX;
use \Tsugi\UI\Output;

require_once "../top.php";
require_once "../nav.php";
?>
<div id="container">
<div style="margin-left: 10px; float:right">
<iframe width="400" height="225" src="https://www.youtube.com/embed/tuXySrvw8TE?rel=0" frameborder="0" allowfullscreen></iframe>
</div>
<h1>Web Applications for Everybody</h1>
<p>
Stuff would go here...
</p>
<!--
<?php
echo(Output::safe_var_dump($_SESSION));
var_dump($USER);
?>
-->
</div>
<?php $OUTPUT->footer();
