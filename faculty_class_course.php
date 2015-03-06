<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="buttons.css" />
  <link rel="stylesheet" href="index.css" />

  <title>
--class--subject--Coursework entry
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

<h1>--Class--Sub: Syllabus</h1>

<form method="post" action="">
<table>
<tbody>
<tr>
  <td><h3>Hour</h3></td>
  <td><h3>Introduction</h3></td>
  <td><h3>Done?</h3></td>
</tr>
<tr>
  <td>1</td>
  <td>--Topic1--</td>
  <td><input type="checkbox" name="check1" disabled /></td>
</tr>
<tr>
  <td>2</td>
  <td>--Topic2--</td>
  <td><input type="checkbox" name="check2" disabled /></td>
</tr>
<tr>
  <td>3</td>
  <td>--Topic3--</td>
  <td><input type="checkbox" name="check3" /></td>
</tr>
<tr>
  <td>4</td>
  <td>--Topic4--</td>
  <td><input type="checkbox" name="check4" /></td>
</tr>
</tbody>
</table>
<center>
<br><br>
<input type="submit" value="Submit" />
</center>
</form>

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
