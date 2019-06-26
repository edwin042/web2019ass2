<?php 
	//if the contact form is submitted
	if(isset($_POST['submit'])){
		//required form variables
		$criteria = [
			'full_name' => $_POST['full_name'],
			'email_id' => $_POST['email_id'],
			'telephone' => $_POST['telephone'],
			'enquiry' => $_POST['enquiry']
		];
		//inserting into the enquiry table
		$enquiryInsert = $enquiry_tbl->insertRecord($criteria);
		//generates alert if the form is inserted into the database
		if($enquiryInsert==true){
			echo '<script>
					alert("Thank you for sending us your enquiry");
					document.location="home";
				 </script>';
		}
	}
?>