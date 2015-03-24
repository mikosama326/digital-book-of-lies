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
      #check login
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

<a class="largebutton" href="superuser_adduser.php">Add User</a>
<a class="largebutton" href="#">Modify entries</a>
<a class="largebutton" href="#">Usage stats</a>
<br>

</center>

</main>

<footer>
<?php
	# Put footer content in the document
	include($foot);
?>
</footer>

</center>
</body>
</html>
