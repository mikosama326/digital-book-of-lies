<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="buttons.css" />
  <link rel="stylesheet" href="index.css" />

  <title>
Faculty Login
</title>
  
<?php
  $head = file_get_contents('headertext.html');
  $nav = file_get_contents('nav.htm');
  $foot = file_get_contents('footertext.html');
?>

<?php
  $msg = "";
  error_reporting(E_ALL);
  #If the user is 'master' and password is 'yoda' or if user is 'admin' and password is 'bunnies'
  if (($_POST['username'] == "master" && $_POST['password'] == "yoda") || ($_POST['username'] == "admin" && $_POST['password'] == "bunnies")) {
    session_start();
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['valid'] = "true";
    $_SESSION['auth'] = "true";
    $_SESSION['nav'] = 'session_nav.htm';
    $msg = "Welcome back, ".$_SESSION['username'].". Redirecting you...";
    if ($_POST['username'] == "master")
    	header('Refresh: 0; URL=faculty_welcome.php');
    else
    	header('Refresh: 0; URL=admin_welcome.php');
  }
  #If there is an invalid attempt
  else if(isset($_POST['username'])) {
    $msg = "Sorry, invalid id or password.";
  }
  #If we just logged out.
  else if( isset($_POST['logout']) ) {
    $_SESSION['valid'] = "false";
    $_SESSION['auth'] = "false";    
    session_unset();
    session_destroy();
    $msg = "You have successfully logged out!";
  }

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

<h1>Login</h1>
<?php
  echo $msg;
?>

<br><br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
  Username:
  <input type="text" name="username" value="master">
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
