<?php 
	//delete the furniture by getting the delete id from the furniture
	if(isset($_GET['delId'])){
		$deleteFurniture = $furniture_db->deleteQuery('furniture_id', $_GET['delId']);
		echo '<script>alert("Furniture Deleted!!");document.location="furniture";</script>';
	}
?>