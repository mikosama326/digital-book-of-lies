<?php #Brace yourself, very badly written code up ahead.

  $msg = ""; //Message displayed, default is empty.

  #If we just logged out.
  if(isset($_POST['logout']) ) {
    $_SESSION['valid'] = false;
    $_SESSION['auth'] = false;    
    session_unset();
    session_destroy();
    $msg = "You have successfully logged out!";
  }
	
  else if(isset($_POST['username'])) {
  
    $sql = "SELECT username, passwd, privilege FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // check data of each row
      while($row = $result->fetch_assoc()) {
        if($_POST['username'] == $row["username"] && $_POST['password'] == $row["passwd"]) {
    	
    	  $_SESSION['username'] = $row["username"];
    	  $_SESSION['valid'] = true;
    	  $_SESSION['auth'] = true;
    	
          $msg = "Welcome, ".$_SESSION['username'].". Redirecting you...";
    	
          if ($row["privilege"] == 2)
    	    header('Refresh: 0; URL=faculty_welcome.php');
          else if ($row["privilege"] == 1)
    	    header('Refresh: 0; URL=admin_welcome.php');
          else {
    	    $msg = "Sorry, we haven't finished the Superuser pages yet. :P";
    	    $_SESSION['valid'] = false;
            $_SESSION['auth'] = false;    
            session_unset();
            session_destroy();
    	  }// end of else
        }// end of if
      }// end of while
      if($_SESSION['valid'] == false)
      	$msg = "Sorry, invalid login or id.";
    }// end of if
    else
      $msg = "Oops, looks like we don't have any users.";
  }// end of else-if
	$conn->close();
?>
