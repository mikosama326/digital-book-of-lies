<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="buttons.css" />
  <link rel="stylesheet" href="index.css" />

  <title>
--class--subject--
</title>
  
<?php
  $head = file_get_contents('headertext.html');
  $nav = file_get_contents('nav.htm');
  $foot = file_get_contents('footertext.html');
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

<h1>4C-Sub1</h1>
<center>
<a class="largebutton" href="faculty_class_course.php">Coursework</a>
<a class="largebutton" href="faculty_class_attendance.php">Attendance</a>
<a class="largebutton" href="faculty_class_stats.php">Stats</a>
<br>
<a class="largebutton" href="faculty_class_internal.php">Internals</a>
</center>

<h2>Stats summary</h2>

<p>Percentage of syllabus covered: 64.6%</p>
<p>Average attendance: 75%</p>

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
