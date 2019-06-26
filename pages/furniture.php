<!-- Ajax script -->
<script src="../js/ajax_script.js"></script>
<?php 
	// select all the furniture datas limiting 10
	$furnitureQuery = $furniture->selectLimitQuery(10);
	//select the categories 
	$categoryAllQuery = $category_db->selectAllQuery();
	//sending the variables
	$vars = [
		'furniture' => $furniture,
		'category_db' => $category_db,
		'furnitureQuery' => $furnitureQuery,
		'categoryAllQuery' => $categoryAllQuery
	];
	//title of the furniture page
	$headTitle = "Fran's Furniture - Our Furniture";
	//content of the furniture page and sending the required variables in the array
	$pageContent = template('../view/furniturepage_view.php', $vars);
	$className = "admin";
?>