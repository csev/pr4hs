<?php
use \Tsugi\Core\LTIX;
use \Tsugi\UI\Output;

require_once "top.php";
require_once "nav.php";
?>
<div id="container">
<h1>Programming for High School</h1>
<p>
This is a sample site to show how Koseu can be used to support a hierarchy of 
web sites.  It is based on a Programming for High School curriculum that I am toying with.
(<a href="high_school_01.pptx">PowerPoint</a>).
</p>
<p>
<ul>
<li><p><a href="python">Python Courses</a></p></li>
<li><p>Web Design Courses</p></li>
<li><p>Web Application Courses</p></li>
<li><p>C Programming for Everybody</p></li>
<li><p>Hardware for Everybody</p></li>
<li><p>Advanced Placement Computer Science</p></li>
</ul>
</p>
<p>
This site uses <a href="http://www.tsugi.org" target="_blank">Koseu/Tsugi</a> 
framework to embed a learning management system into this site and
provide the autograders.  
If you are interested in collaborating
to build these kinds of sites for yourself, please see the
<a href="http://www.tsugi.org" target="_blank">tsugi.org</a> website and/or 
contact me.
</p>
<!--
<?php
echo(Output::safe_var_dump($_SESSION));
var_dump($USER);
?>
-->
</div>
<?php $OUTPUT->footer();
