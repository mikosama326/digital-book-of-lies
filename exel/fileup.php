<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../buttons.css" />
  <link rel="stylesheet" href="../index.css" />

  <title>
Settings
</title>
  
<?php
      include('../session.php');
      #$nav = file_get_contents("../nav_default.htm");
      #$foot = "../footertext.php");
?>


</head>

<body>
<center>


<header>
<?php
    # Put header content
    include('../headertext.php');
?>
</header>

<nav>
<?php
	# Put nav content in the document
	echo $nav;
?>
</nav>

<main>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</main>

<footer>
<?php
	# Put footer content in the document
	include('../$foot');
?>
</footer>

</center>
</body>
</html>
