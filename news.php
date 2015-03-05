<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="buttons.css" />
  <link rel="stylesheet" href="index.css" />

<title>
News
</title>
  
<?php
  $head = file_get_contents('headertext.html');
  $nav = file_get_contents('nav.htm');
  $foot = file_get_contents('footertext.html');
?>

<?php
  $text = file_get_contents('news.html');
?>

<style>
main {
  max-height: 500px;
  overflow: auto;
}
</style>

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

<main style="font-size: 15px;">

<center>
<h1>Development Updates</h1>
</center>

<?php
   # echo $text;
?>

<?php 
	$category = "2";
	include("cutenews/show_news.php"); 
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
