<?php

require 'connect.inc.php';
require 'core.inc.php';

if(loggedin()){
	echo 'You are logged in!! <br> <a href ="logout.php"> Log Out </a>';
	
}else{
	include 'loginform.inc.php';
}

//echo $current_file;

?>
