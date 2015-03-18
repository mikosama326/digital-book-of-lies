<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="buttons.css" />
  <link rel="stylesheet" href="index.css" />

  <title>
--class--subject--Attendance
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

<h1>--Class--Sub: Attendance</h1>

<?php
  echo date("Y/m/d")." ".date("h:i:sa");
?>
<form method="post" action="">
<table>
<tbody>
<tr>
  <td style="width: 150px;"><h3>USN</h3></td>
  <td><h3>Name</h3></td>
  <td style="width: 50px;"><h3>Check</h3></td>
</tr>
<tr>
  <td>1PE13CS001</td>
  <td>--Name1--</td>
  <td><input type="checkbox" name="check1" checked /></td>
</tr>
<tr>
  <td>1PE13CS002</td>
  <td>--Name2--</td>
  <td><input type="checkbox" name="check2" checked /></td>
</tr>
<tr>
  <td>1PE13CS003</td>
  <td>--Name3--</td>
  <td><input type="checkbox" name="check3" checked /></td>
</tr>
<tr>
  <td>1PE13CS004</td>
  <td>--Name4--</td>
  <td><input type="checkbox" name="check4" checked /></td>
</tr>
<tr>
  <td>1PE13CS005</td>
  <td>--Name5--</td>
  <td><input type="checkbox" name="check5" checked /></td>
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
	include($foot);;
?>
</footer>

</center>
</body>
</html>
