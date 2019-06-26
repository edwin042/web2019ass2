<?php 
	//furniture select query
	$furnitureQuery = $furniture->selectQuery('categoryId', $_GET['catId']);
	//category select query
	$categoryQuery = $category_db->selectQuery('category_id', $_GET['catId']);
	//fetching the categories
	$fetchedValue = $categoryQuery->fetch();
	//getting the category name
	$headerCategories = $fetchedValue['category_name'];
	//select all of categories
	$categoryAllQuery = $category_db->selectALlQuery();
	//sending the variable in array
	$variableArrays = [
		'furnitureQuery' => $furnitureQuery,
		'headerCategories' => $headerCategories,
		'category_db' => $category_db,
		'$categoryQuery' => $categoryQuery,
		'categoryAllQuery' => $categoryAllQuery
	];

	//title of the categories page
	$headTitle = "Fran's Furniture - CATEGORIES";
	//content of the categories page and sending the required variables in the array
	$pageContent = template('../view/category_view.php', $variableArrays);
	//dynamic class name
	$className = "admin";
?>