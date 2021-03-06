<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="buttons.css" />
  <link rel="stylesheet" href="index.css" />

  <title>
Statistics overview
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

<h1>Stats Overview</h1>

<h2>4C-Sub1</h2>
<p>Percentage of syllabus covered: 64.6%</p>
<p>Estimated:Actual time ratio: 1:1.4</p>
<p>Coverage rate: 5% per hour</p>
<p>Estimated completion date: Just in time. (Actually, a date.)</p>
<p>Average attendance: 75%</p>

<h2>4B-Sub2</h2>
<p>Percentage of syllabus covered: 50.6%</p>
<p>Estimated:Actual time ratio: 1:1.4</p>
<p>Coverage rate: 5% per hour</p>
<p>Estimated completion date: Just in time. (Actually, a date.)</p>
<p>Average attendance: 75%</p>

<h2>6A-Sub3</h2>
<p>Percentage of syllabus covered: 64.6%</p>
<p>Estimated:Actual time ratio: 1:1.4</p>
<p>Coverage rate: 5% per hour</p>
<p>Estimated completion date: Just in time. (Actually, a date.)</p>
<p>Average attendance: 75%</p>

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
