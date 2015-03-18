<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="buttons.css" />
  <link rel="stylesheet" href="index.css" />

  <title>
Planner
</title>
  
<?php
      include('session.php');
      include('checklogin.php');
?>


</head>

<body>
<center>


<header>
<?php
    # Put header content
    include('headertext.php');
?>
</header>

<nav>
<?php
	# Put nav content in the document
	echo $nav;
?>
</nav>

<main>

<h1>Planner</h1>

<p>Stuff that goes here:</p>
<ul>
  <li>Announcements</li>
  <li>Timetable</li>
  <li>To Do lists</li>
</ul>

</main>

<footer>
<?php
	# Put footer content in the document
	include($foot);;
?>
</footer>

</center>
</body>
</html>
