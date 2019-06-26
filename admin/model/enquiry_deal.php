<?php 
	//if the complete button is pressed
	if(isset($_POST['save'])){
		//the data values that is to be updated
		$sendData = [
			'id' => $_POST['id'],
			'deal_enquiry' => $_POST['deal_enquiry'],
			'completed' => 1
		];
		//updating the enquiry table by sending the data values of the array
		$enquiry = $enquiry_db->saveFunction($sendData, 'id');
		//if the enquiry is sent then alert message is generated
		if($enquiry == true){
			echo '<script>alert("Changed");</script>';
		}else{
			echo '<script>alert("ERROR 404");</script>';
		}
	}
?>