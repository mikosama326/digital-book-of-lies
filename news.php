<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="buttons.css" />
  <link rel="stylesheet" href="index.css" />

<title>
News
</title>
  
<?php
      include('session.php');
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

<main style="font-size: 15px;">

<center>
<h1>Development Updates</h1>
</center>

<?php
   # echo $text;
?>

<?php 
	$number = "5";
	$category = "2";
	include("cutenews/show_news.php"); 
?>

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
