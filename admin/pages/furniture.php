<?php 
	//contains the code to delete category
	require '../model/deletefurniture.php';

	//select all furnitures
	$furnitureQuery = $furniture_db->selectAllQuery();

	//required variables in the furniture page view 
	$sendVars = [
		'generate_table' => $generate_table,
		'furnitureQuery' => $furnitureQuery
	];
	//title of the furniture page
	$headTitle = "Fran's Furniture - Furniture";
	//content of the furniture page and sending the required variables in the array	
	$pageContent = template('../view/furniturepage_view.php', $sendVars);
?>