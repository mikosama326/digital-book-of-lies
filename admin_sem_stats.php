<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="buttons.css" />
  <link rel="stylesheet" href="index.css" />

  <title>
  Semester statistics
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
