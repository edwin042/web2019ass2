<?php 
	//delete the staff by getting the user_id from the users table
	if(isset($_GET['deleteUser']))
	{
		$deleteUser = $users_db->deleteQuery('user_id', $_GET['deleteUser']);
		echo '<script>alert("User Successfully Deleted!!");document.location="staffs";</script>';
	}
?>