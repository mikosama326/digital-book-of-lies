<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="buttons.css" />
  <link rel="stylesheet" href="index.css" />

  <title>
  Dashboard
</title>
  
<?php
      include('session.php');
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

<h1><?php echo "Welcome, ".$_SESSION['username']; ?></h1>

<center>

<a class="smallbutton" href="faculty_planner.php">Planner</a>
<a class="smallbutton" href="faculty_settings.php">Settings</a>
<a class="smallbutton" href="faculty_stats.php">Stats Overview</a>

<h2>Enter syllabus</h2>
<a class="largebutton" href="faculty_class_page.php">4C-Sub1</a>
<a class="largebutton" href="faculty_class_page.php">4B-Sub2</a>
<a class="largebutton" href="faculty_class_page.php">6A-Sub2</a>
<br><br>
<a class="largebutton" href="faculty_lab_page.php">Lab1</a>
<a class="largebutton" href="faculty_lab_page.php">Lab2</a>
<br><br>


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
