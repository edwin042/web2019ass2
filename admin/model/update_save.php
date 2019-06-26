<?php 
	if(isset($_POST['submit'])){
		$is_empty = "";
		//checking if the update_title or update_description is empty
		if($_POST['update_title'] == "" || $_POST['update_description'] == "") $is_empty .= "<script>alert('Title or Description empty')</script>";
		//checking if the update_date or update_end_date is empty
		if($_POST['update_date'] == "" || $_POST['update_end_date'] == "") $is_empty .= "<script>alert('Date empty')</script>";

		//if there is no empty fields
		if(empty($is_empty)){
			//getting the name of the image to insert it into the database
			$updateImageName = basename($_FILES['update_image']['name']);

			//database inserting criteria 
			$rowUpdates = [
				'update_id' => $_POST['update_id'],
				'update_title' => $_POST['update_title'],
				'update_description' => $_POST['update_description'],
				'update_date' => $_POST['update_date'],
				'update_end_date' => $_POST['update_end_date'],
				'update_image' => $updateImageName
			];

			//inserting or updating into the updates table
			$save_update = $updates_db->saveFunction($rowUpdates, 'update_id');

			//folder destination to upload image
			$target_dest = '../../images/updates/' . $updateImageName;

			//if the same file doesnot exist then only save to the database
			if(!file_exists($target_dest)){
				//temporary name set to the image
				$tempImgName = $_FILES['update_image']['tmp_name'];

				//moving the image to the updates folder
				if(move_uploaded_file($tempImgName, $target_dest)){
					if($save_update == true){
						echo '<script>alert("Updates Saved Successfully");document.location="updates";</script>';
					}else{
						echo "Not Updated";
					}
				}
			}else{
				//if the file already exist then the alert message is generated
				echo '<script>alert("Image Already Exists! Please choose another image")</script>';
			}
		}else{
			//generate alert message if the file is not uploaded
			echo $is_empty;
		}
	}
?>