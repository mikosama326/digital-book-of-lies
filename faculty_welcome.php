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
	if (isset($_SESSION['username']))
	  echo '<p class="login">You are currently logged in as ' . $_SESSION['username'] . '.</p>'
?>
<?php
	
?>
</header>

<nav>
<?php
	# Put nav content in the document
	echo $nav;
?>
</nav>

<main>

<h1><?php echo "Welcome ".$_SESSION['username']; ?>!!</h1>


<p>Good to see you again.</p>

<center>
<form action="faculty_login.php" method="POST">
   <button type="submit" name="logout" class="smallbutton">Sign out</button>
</form>

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
