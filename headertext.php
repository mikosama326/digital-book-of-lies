<?php
  echo '<a href="index.php" class="headlink">CSE Coursework Entry</a>';
  echo '<h2>Still under contruction!</h2>';
  if (isset($_SESSION['valid'])){
	 echo '<p class="login">You are currently logged in as <a href="#">' . $_SESSION['username'] . '</a>.</p>';
	 $nav = file_get_contents('nav_session.htm');
  }
?>
