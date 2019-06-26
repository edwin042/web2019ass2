<?php 
	//contains the submission of the furniture add or edit
	require '../model/furniture_save.php';
	//select from the categories table
	$categoryShow = $category_db->selectAllQuery();
	//if the url contains the furId
	if(isset($_GET['furId'])){
		//selecting the furniture table whose furniture_id is equal to the furId
		$showAllFurniture = $furniture_db->selectQuery('furniture_id', $_GET['furId']);
		//fetch all the furniture
		$fetchFurniture = $showAllFurniture->fetch();
		//variables to send to the furniture form
		$sendArray = [
			'fetchFurniture' => $fetchFurniture,
			'categoryShow' => $categoryShow
		];
	}else{
		$sendArray = [
			'categoryShow' => $categoryShow
		];
	}
	//title of the furniture page
	$headTitle = "Fran's Furniture - Furniture Form";
	//content of the furniture form page and sending the required variables in the array
	$pageContent =	template('../view/furnitureform_view.php', $sendArray);
?>