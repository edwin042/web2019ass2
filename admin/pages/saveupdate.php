<?php
	//contains the submission of the updates add or edit
	require '../model/update_save.php';
	//if the url contains the updateId
	if(isset($_GET['updateId'])){
		//selecting the updates table whose update_id is equal to the updateId
		$updateValues = $updates_db->selectQuery('update_id', $_GET['updateId']);
		//fetch all the updates
		$fetchedUpdate = $updateValues->fetch();
		//variables to send to the updates form
		$sendUpdateVars = [
			'fetchedUpdate' => $fetchedUpdate
		];
	}else{
		$sendUpdateVars = [];
	}
	//title of the updates page
	$headTitle = "Fran's Furniture - Updates";	
	//content of the updates form page and sending the required variables in the array
	$pageContent = template('../view/updates_form_view.php', $sendUpdateVars);
?>