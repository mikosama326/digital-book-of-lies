<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="buttons.css" />
  <link rel="stylesheet" href="index.css" />

  <title>
Who are we?
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

<h1>Lab ... um, something</h1>

Lab options and stuff goes here!!

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
