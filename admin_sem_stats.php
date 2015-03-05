<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="buttons.css" />
  <link rel="stylesheet" href="index.css" />

  <title>
  Dashboard
</title>
  
<?php
  $head = file_get_contents('headertext.html');
  $nav = file_get_contents('nav.htm');
  $foot = file_get_contents('footertext.html');
  session_start();
?>
</head>

<body>
<center>


<header>
<?php
	# Put header content in the document
	echo $head;
?>
</header>

<nav>
<?php
	# Put nav content in the document
	echo $nav;
?>
</nav>

<main>


<p>All them stats.</p>

<p>Stats summary here includes:</p>
<ul>
  <li>Average internal marks</li>
  <li>Average attendance</li>
  <li>Average coverage of syllabus</li>
  <li>Average attendance</li>
  <li>Others?</li>
</ul>

<center>
<h2>By Section</h2>
<a class="smallbutton" href="admin_class_stats.php">-sem- A</a>
<a class="smallbutton" href="admin_class_stats.php">-sem- B</a>
<a class="smallbutton" href="admin_class_stats.php">-sem- C</a>
</center>

</main>

<footer>
<?php
	# Put footer content in the document
	echo $foot;
?>
</footer>

</center>
</body>
</html>
