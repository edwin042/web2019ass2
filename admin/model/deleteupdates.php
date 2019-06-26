<?php 
	//delete the updates by getting the update_id from the update page
	if(isset($_GET['deleteUpdate']))
	{
		$deleteUpdate = $updates_db->deleteQuery('update_id', $_GET['deleteUpdate']);
		echo '<script>alert("Update Successfully Deleted!!");document.location="updates";</script>';
	}
?>