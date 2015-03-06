<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="buttons.css" />
  <link rel="stylesheet" href="index.css" />

  <title>
Basic Layout for DBoL
  </title>

<?php
      include('session.php');
?>

<!--<?php
$myfile = fopen("log/newfile.txt", "a");
$txt = "Hello\n";
fwrite($myfile, $txt);
$txt = "Goodbye\n";
fwrite($myfile, $txt);
fclose($myfile);
?>-->

</head>

<body>
<center>


<!--HEADER-->
<header>
<?php
    # Put header content
    include('headertext.php');
?>
</header>

<!--NAV BAR-->
<nav>
<?php
	# Put nav content in the document
	echo $nav;
?>
</nav>

<!--MAIN AREA-->
<main>


<center>
<h1>Welcome!</h1>
</center>

<p>
This is a prototype for the application codenamed 'DBoL'.
</p>
<h3>What is DBoL?</h3>
<p>
DBoL is a platform for teachers and college faculty to enter, track and manage their classwork. It also handles attendance and internal marks per class per subject.
</p>
<p>
The application is primarily web-based and is designed to run on a local server within the institution's intranet. It is coded in PHP and uses mySQL for data management.
</p>
<h3>Other stuff used in this site:</h3>
<p>
<a href="http://cutephp.com/" title="CutePHP">Cutenews</a>, for development updates as well as for general updates.
</p>

<h3>More information?</h3>
<p>
To find out more about us, the developers, head on over to the <a href="whoami.php">Creators</a> page.
<br>To read the specifications document for this application, go to the <a href="about.php">About</a> page.
<br>To know what changes we've made to this application lately, you can read below or head over to the <a href="news.php">Development Updates</a> page.
</p>

<h3>Your two-cents?</h3>
<p>Like what we do? Or not so much? We'd love to hear some <a href="comments.php">feedback</a>.</p>

<hr>
<h2>Latest news</h2>

<?php 
	$number = "2";
	$category = "2";
	include("cutenews/show_news.php"); 
?>

</main>

<!--FOOTER-->
<footer>
<?php
	# Put footer content in the document
	echo $foot;
?>
</footer>


</center>
</body>
</html>
