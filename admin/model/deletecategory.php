<?php 
	//delete category by getting the del_id from the table
	if(isset($_GET['del_Id']))
	{
		$deleteCategory = $category_db->deleteQuery('category_id', $_GET['del_Id']);
		echo '<script>alert("Category Deleted!!");document.location="categories";</script>';		
	}
?>