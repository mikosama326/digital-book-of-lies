<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="buttons.css" />
  <link rel="stylesheet" href="index.css" />

  <title>
  Dashboard
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

<h1><?php echo "Welcome ".$_SESSION['username']; ?>!!</h1>


<p>Good to see you again.</p>

<center>

<a class="smallbutton" href="faculty_planner.php">Planner</a>
<a class="smallbutton" href="admin_settings.php">Settings</a>
<br><br>
<h2>Stats by Dept</h2>
<a class="smallbutton" href="admin_dept_stats.php">S&H</a>
<a class="smallbutton" href="admin_dept_stats.php">CSE</a>
<a class="smallbutton" href="admin_dept_stats.php">ISE</a>
<a class="smallbutton" href="admin_dept_stats.php">ECE</a>
<a class="smallbutton" href="admin_dept_stats.php">MECH</a>
<br><br>
<a class="smallbutton" href="admin_dept_stats.php">MBA</a>
<a class="smallbutton" href="admin_dept_stats.php">MCA</a>
<a class="smallbutton" href="admin_dept_stats.php">M.Tech. CS</a>
<a class="smallbutton" href="admin_dept_stats.php">M.Tech. E & C</a>

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
