<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="buttons.css" />
  <link rel="stylesheet" href="index.css" />

  <title>
Basic Layout for DBoL
</title>

<?php
      $navfile = 'nav.htm';
?>
  
<?php
  $head = file_get_contents('headertext.html');
  $nav = file_get_contents($navfile);
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
<?php
	if (isset($_SESSION['username']))
	 echo '<p class="login">You are currently logged in as ' . $_SESSION['username'] . '.</p>'
?>
</header>

<nav>
<?php
	# Put nav content in the document
	echo $nav;
?>
</nav>

<main>


<center>
<h1>Welcome!</h1>
</center>

<p>
This is a prototype for the application codenamed 'Digital Book of Lies', which is a project in development by a team of 5 people as a college project. <br>
</p>
<p>
Phew. That was a long sentence.<br>
</p>
<p>
Anyway, this is more a simulation than anything else. Not the actual application.<br>
</p>

<br>

<hr>

<p>
This page will become the bulletin board for announcements in the real application.
</p>




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
