<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="buttons.css" />
  <link rel="stylesheet" href="index.css" />

  <title>
  Faculty Stats
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

<h1>Faculty Stats</h1>

<table>
<tbody>
<tr>
  <td><h3>Id</h3></td>
  <td><h3>Faculty name</h3></td>
  <td><h3>Percentage covered</h3></td>
  <td><h3>Coverage rate</h3></td>
  <td><h3>Estimation accuracy</h3></td>
  <td><h3>Average attendance</h3></td>
</tr>
<tr>
  <td>1</td>
  <td>--Faculty1--</td>
  <td>64.6%</td>
  <td>5%/hour</td>
  <td>1:1.2</td>
  <td>75%</td>
</tr>
<tr>
  <td>2</td>
  <td>--Faculty2--</td>
  <td>76.6%</td>
  <td>9%/hour</td>
  <td>1:0.8</td>
  <td>86%</td>
</tr>
<tr>
  <td>3</td>
  <td>--Faculty3--</td>
  <td>50.4%</td>
  <td>3%/hour</td>
  <td>1:1.5</td>
  <td>80%</td>
</tr>
<tr>
  <td>4</td>
  <td>--Faculty4--</td>
  <td>64.6%</td>
  <td>5%/hour</td>
  <td>1:1.2</td>
  <td>75%</td>
</tr>
</tbody>
</table>

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
