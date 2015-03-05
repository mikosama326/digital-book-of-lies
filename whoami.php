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


<center>
<h1>Who are we?</h1>
</center>

<p>So you might be wondering who we are and what we do. As it turns out, our team consists of:</p>
<p>
 <ul>
   <li>A fairy princess</li>
   <li>A unicorn</li>
   <li>An oracle</li>
   <li>A wizard</li>
   <li>And a dragon</li>
 </ul>
</p> 
<p>We all combine our magical powers to create awesome stuff. Or at least, that was the plan until the evil spellcaster cast a horrid curse upon us.</p>


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
