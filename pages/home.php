<?php 
	//updates table
	$updates_db = new DatabaseClass('updates_db');
	//selecting all the updates table
	$new_update = $updates_db->selectAllQuery();

	//title of the updates page
	$headTitle = "Fran's Furniture - Home";
	//content of the updates page and sending the required variables in the array
	$pageContent = template('../view/homepage_view.php', ['new_update' => $new_update]);
	$className = "home";
?>