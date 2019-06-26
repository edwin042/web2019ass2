<?php 
	//contains the code to delete updates
	require '../model/deleteupdates.php';

	//select all updates
	$updateValues = $updates_db->selectAllQuery();

	$sendVars = [
		'updateValues' => $updateValues,
		'generate_table' => $generate_table
	];
	//title of the updates page
	$headTitle = "Fran's Furniture - Updates";	
	//content of the updates page and sending the required variables in the array
	$pageContent = template('../view/updates_view.php', $sendVars);
?>