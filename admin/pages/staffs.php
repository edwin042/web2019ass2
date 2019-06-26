<?php
	//contains the code to delete staff
	require '../model/deletestaff.php';
	
	//select all staff
	$userShow = $users_db->selectAllQuery();
	
	//title of the staff page
	$headTitle = "staffs Accounts";

	//content of the staff page and sending the required variables in the array
	$pageContent = template('../view/staffs_view.php', ['userShow' => $userShow, 'generate_table' => $generate_table]);
?>