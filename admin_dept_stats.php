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
  <li>No clue.</li>
</ul>

<center>
<a class="smallbutton" href="admin_faculty_stats.php">Faculty Stats</a>
<h2>By semester</h2>
<a class="smallbutton" href="admin_sem_stats.php">Sem 2</a>
<a class="smallbutton" href="admin_sem_stats.php">Sem 4</a>
<a class="smallbutton" href="admin_sem_stats.php">Sem 6</a>
<a class="smallbutton" href="admin_sem_stats.php">Sem 8</a>
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
