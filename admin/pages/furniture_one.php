<?php 
	//contains the code to delete furniture
	require '../model/deletefurniture.php';

	//select the furniture
	$furnitureQuery = $furniture_db->selectQuery('furniture_id', $_GET['furnitureId']);
	//fetching the furniture query
	$fetchFurnitureOne = $furnitureQuery->fetch();
	
	//required variables in the furniture page view  
	$sendVars = [
		'fetchFurnitureOne' => $fetchFurnitureOne
	];
	//title of the enquiries page
	$headTitle = "Fran's Furniture - Furniture";	
	//content of the furniture page and sending the required variables in the array	
	$pageContent = template('../view/one_furniture_view.php', $sendVars);
?>