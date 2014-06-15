<?php
ob_start();
session_start();
 
	// Database Information
	
	$con=mysqli_connect("localhost","dbUserame","dbPassword","dbname");
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
 
?>