<?php 
	//starting the session
	session_start();
	session_unset(); //unsetting the session
	session_destroy(); //destroying the session to logout
	header("Location:login"); //move to the login page
?>