<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="buttons.css" />
  <link rel="stylesheet" href="index.css" />

  <title>
Settings
</title>
  
<?php
      include('session.php');
      include('checklogin.php');
  $msg = "";
?>

<?php
//Preliminary version of adding users
   
#Doesn't validate nor does it check that you have the right privileges.

  $name = "";
  $email = "";
  $passwd = "";
  $username = "";
  
  if(isset($_POST['submit'])) { 
   
   $name = $_POST['name'];
   $email = $_POST['email'];
   $passwd = $_POST['password'];
   $username = $_POST['username'];
   
   $sql = "INSERT INTO users (userid, username, passwd, privilege, email, name) VALUES (NULL, '$username', '$passwd', 2, '$email', '$name');";

    if ($conn->query($sql) === TRUE) {
      $msg = "New record created successfully";
    } else {
      $msg = "Error: " . $sql . "<br>" . $conn->error;
    }
  
  }

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

<h1>Add a user</h1>

<center>
<?php echo "<p>$msg</p>";?><br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
  Name: <input type="text" name="name" /><br>
  Username: <input type="text" name="username" /><br>
  Password: <input type="password" name="password" /><br>
  Email: <input type="email" name="email" /><br>
  <input type="submit" value="Submit" name="submit"/>
</form>
</center>
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
