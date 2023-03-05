<?php 
  //insert.php  
 require 'config.php';
 
  // Start the session
session_start();

	// Destroy the session.
	session_destroy();
	
	 header("location: ./login.php");

			
?>  