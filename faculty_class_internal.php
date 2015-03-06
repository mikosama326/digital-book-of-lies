<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="buttons.css" />
  <link rel="stylesheet" href="index.css" />

  <title>
--class--subject--Internal marks
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

<h1>--Class--Sub: Internals marks entry</h1>

<form method="post" action="">
<table>
<tbody>
<tr>
  <td style="width: 150px;"><h3>USN</h3></td>
  <td><h3>Name</h3></td>
  <td style="width: 50px;"><h3>T1</h3></td>
  <td style="width: 50px;"><h3>T2</h3></td>
  <td style="width: 50px;"><h3>T3</h3></td>
  <td style="width: 55px;"><h3>Final</h3></td>
</tr>
<tr>
  <td>1PE13CS001</td>
  <td>--Name1--</td>
  <td><input type="number" name="marks" min="0" max="25" step="1" value="25"></td>
  <td><input type="number" name="marks" min="0" max="25" step="1" value="25"></td>
  <td><input type="number" name="marks" min="0" max="25" step="1" value="25"></td>
  <td><input type="number" name="marks" min="0" max="25" step="1" value="25"></td>
</tr>
<tr>
  <td>1PE13CS002</td>
  <td>--Name2--</td>
  <td><input type="number" name="marks" min="0" max="25" step="1" value="25"></td>
  <td><input type="number" name="marks" min="0" max="25" step="1" value="25"></td>
  <td><input type="number" name="marks" min="0" max="25" step="1" value="25"></td>
  <td><input type="number" name="marks" min="0" max="25" step="1" value="25"></td>
</tr>
<tr>
  <td>1PE13CS003</td>
  <td>--Name3--</td>
  <td><input type="number" name="marks" min="0" max="25" step="1" value="25"></td>
  <td><input type="number" name="marks" min="0" max="25" step="1" value="25"></td>
  <td><input type="number" name="marks" min="0" max="25" step="1" value="25"></td>
  <td><input type="number" name="marks" min="0" max="25" step="1" value="25"></td>
</tr>
<tr>
  <td>1PE13CS004</td>
  <td>--Name4--</td>
  <td><input type="number" name="marks" min="0" max="25" step="1" value="25"></td>
  <td><input type="number" name="marks" min="0" max="25" step="1" value="25"></td>
  <td><input type="number" name="marks" min="0" max="25" step="1" value="25"></td>
  <td><input type="number" name="marks" min="0" max="25" step="1" value="25"></td>
</tr>
<tr>
  <td>1PE13CS005</td>
  <td>--Name5--</td>
  <td><input type="number" name="marks" min="0" max="25" step="1" value="25"></td>
  <td><input type="number" name="marks" min="0" max="25" step="1" value="25"></td>
  <td><input type="number" name="marks" min="0" max="25" step="1" value="25"></td>
  <td><input type="number" name="marks" min="0" max="25" step="1" value="25"></td>
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
