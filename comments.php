<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="buttons.css" />
  <link rel="stylesheet" href="index.css" />

  <title>
Leave us a Comment
</title>
  
<?php
      include('session.php');
?>


<?php
$thanks = "We'd love to have some feedback on this site/prototype.";

if(isset($_POST['comment'])) {
	$thanks = "Thank you for your comment. Your feedback is appreciated and we might get back to you if needed.";
	// the message
	$msg = $_POST['comment'];
	
	$msg = $msg." Reply at ".$_POST['email'];

	// use wordwrap() if lines are longer than 70 characters
	$msg = wordwrap($msg,70);

	$subject = "Comment from ".$_POST['name'];

	// send email
	mail("srija326@gmail.com",$subject,$msg);
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

<h1>Leave us a comment!</h1>

<center>

<?php
	# Print thankyou message
	echo $thanks;
?>
<br><br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
  Name: <input type="text" name="name" /><br>
  Email: <input type="email" name="email" /><br>
  Comment:<br>
  <textarea name="comment" cols="70" rows="10"></textarea><br>
  <input type="submit" value="Submit" />
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
