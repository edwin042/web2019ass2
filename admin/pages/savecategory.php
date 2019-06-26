<?php 
	//contains the submission of the category add or edit
	require '../model/category_save.php';
	//if the url contains the cateId
	if(isset($_GET['cateId'])){
		//selecting the category table whose category_id is equal to the cateId
		$showAllCategory = $category_db->selectQuery('category_id', $_GET['cateId']);
		//fetch all the categories
		$fetchCategory = $showAllCategory->fetch();
		//variables to send to the view form
		$sendArray = [
			'fetchCategory' => $fetchCategory
		];
	}else{
		$sendArray = [];
	}
	//title of the category page
	$headTitle = "Fran's Furniture - Category";
	//content of the categories form page and sending the required variables in the array
	$pageContent =	template('../view/categoryform_view.php', $sendArray);
?>