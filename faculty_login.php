<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="buttons.css" />
  <link rel="stylesheet" href="index.css" />

  <title>
Faculty Login
</title>

<?php
  include('session.php'); //Include the basic stuff
  include('login.php');
?>

</head>

<body>
<center>


<header>
<?php
	# Put header content in the document
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
<center>

<h1>Login</h1>
<?php
  echo $msg;
?>

<br><br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
  Username:
  <input type="text" name="username" value="faculty1">
  <br>
  Password:
  <input type="password" name="password" value="bunnies">
  <br><br>
  <input type="submit" value="Submit">
</form>

</center>
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
