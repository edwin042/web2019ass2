<?php
	//contains the code to delete category
	require '../model/deletecategory.php';

	//select all categories
	$showCategories = $category_db->selectAllQuery();

	//title of the category page
	$headTitle = "Fran's Furniture - Categories";
	//content of the categories page and sending the required variables in the array
	$pageContent = template('../view/categoriespage_view.php', ['showCategories' => $showCategories, 'generate_table' => $generate_table]);
?>