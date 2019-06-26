<?php 
	//if the furniture is submitted
	if(isset($_POST['submit'])){
		//extracting the post 
		extract($_POST);
		//unsetting the submit
		unset($_POST['submit']);
		$is_error = '';
		//checking if the name is empty
		if($name == '') 		
			$is_error .= '<strong><p style="color:red;">Please enter the name of the furniture</p></strong>';

		//checking if the description is empty
    	if($description == '') 
    		$is_error .= '<strong><p style="color:red;">Please enter the description</p></strong>';

		//checking if the price is empty
        if($price == '') 
        	$is_error .= '<strong><p style="color:red;">Cannot insert empty price</p></strong>';

        //if there is no error
		if(empty($is_error)){
			//setting the image file name in the variable
			$thisFileName = basename($_FILES['view_images']['name']);
			//getting the target destination to upload the file
			$target_dest = '../../images/furniture/' . $thisFileName;
			//if file doesnot exists then only upload
			if(!file_exists($target_dest)){
				//setting the temporary file name in the variable
				$tempfileName = $_FILES['view_images']['tmp_name'];
				//moving the image file to the upload target folder
				if(move_uploaded_file($tempfileName, $target_dest)){
					$values = [
						'furniture_id' => $furniture_id,
						'name' => $name,
						'description' => $description,
						'price' => $price,
						'display' => $display,
						'product_detail' => $product_detail,
						'view_images' => $thisFileName,
						'categoryId' => $categoryId
					];
					//sending the adding and editing variables in the save function
					$furnitureSave = $furniture_db->saveFunction($values, 'furniture_id');
					// if the form is submitted then generate alert message
					if($furnitureSave==true){
						echo '<script>
								alert("Furniture Saved");
								document.location="furniture";
							 </script>';
					}
				}
			}else{
				//generate alert if the image file already exists
				echo '<script>alert("Image Already Exists! Please choose another image")</script>';
			}
		}else{
			//generate alert message if the file is not uploaded
			echo $is_error;
		}
	}
?>