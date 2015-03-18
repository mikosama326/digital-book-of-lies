<?php
  //This file handles all logic related to setting the nav/header links and stuff.
  
  #Some initial stuff
  $configs = include('config.php'); //Variables stored in config
  ini_set('display_errors',1); //Setting to display errors, for now.
  error_reporting(E_ALL);
  
  session_start(); //Start the PHP session

  $head = file_get_contents('headertext.php'); //For header text
  $nav = file_get_contents('nav_default.htm'); //For the nav bar
  $foot = 'footertext.php'; //For footer text
?>


