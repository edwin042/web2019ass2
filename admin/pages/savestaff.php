<?php 
	//contains the submission of the staff add or edit
	require '../model/staff_save.php';
	//if the url contains the userId
	if(isset($_GET['userId'])){
		//selecting the staff table whose user_id is equal to the userId
		$showAllStaff = $users_db->selectQuery('user_id', $_GET['userId']);
		//fetch all the staff
		$fetchStaff = $showAllStaff->fetch();
		//variables to send to the furniture form
		$sendArray = [
			'fetchStaff' => $fetchStaff
		];	
	}else{
		$sendArray = [];
	}
	//title of the staff page
	$headTitle = "Fran's Furniture - staffs";
	//content of the staff form page and sending the required variables in the array
	$pageContent =	template('../view/staffsform_view.php', $sendArray);
?>