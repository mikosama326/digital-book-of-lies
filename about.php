<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="buttons.css" />
  <link rel="stylesheet" href="index.css" />

  <title>
About
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


<center>
<h1>About this site</h1>
</center>

<p>This page will explain what exactly this application does and how it works.<br><br></p>

<?php 
  $category = "1";
  include("cutenews/show_news.php"); 
?>
<?php
	#$requ=file_get_contents('RequirementsDoc.html');
	#echo $requ;
?>

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
