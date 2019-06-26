<?php 
	//if the submit button is pressed
	if(isset($_POST['add_staff'])){

		$is_empty = "";
		//checking if the username or password is empty
		if($_POST['username'] == "" || $_POST['password'] == "") 
			$is_empty .= "<script>alert('Username or password not correct')</script>";
		//if there is no empty fields
		if(empty($is_empty)){
			$values = [
				'user_id' => $_POST['user_id'],
				'username' => $_POST['username'],
				'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
				'role'     => $_POST['role']
			];
			//inserting or updating the staffs table
			$insertStaff = $users_db->saveFunction($values, 'user_id');

			// if the form is submitted successfully then generate alert button
			if($insertStaff == true){
				echo '<script>
					 alert("New Staff Saved!");
					 document.location="staffs";
					 </script>';
			}else{
				echo '<script>
					 alert("Could not add the staff");
					 </script>';
			}
		}else{
			//generate alert message if the file is not uploaded
			echo $is_empty;
		}
	}
?>