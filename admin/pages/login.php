<?php 
	//title of the enquiries page
	$headTitle = "Fran's Furniture - Login";
	//content of the login page and sending the required variables in the array	
	$pageContent = template('../view/loginpage_view.php', ['users_db' => $users_db]);
?>