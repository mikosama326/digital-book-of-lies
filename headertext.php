<?php
  echo '<a href="index.php" class="headlink">CSE Coursework Entry</a>';
  echo '<h2>Still under contruction!</h2>';
  if (isset($_SESSION['valid'])) {
	 echo '<p class="login">You are currently logged in as <a href="#" title="Sign out">' . $_SESSION['name'] . '</a>.</p>';
	 #echo '<p class="login">You are currently logged in as <form action="faculty_login.php" method="POST"><button type="submit" name="logout" class="smallbutton">Sign out</button></form>.</p>';
	 #echo '';
	 $nav = file_get_contents($_SESSION['nav']);
  }
?>
