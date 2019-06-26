<?php 
	// if the category is submitted
	if(isset($_POST['submit'])){
		extract($_POST); //extracting all the form input values
		$is_error = ''; //checking the errors
		//if the name is empty
		if($category_name == '') 
			$is_error .= '<strong><p style="color:red;">CANNOT INSERT EMPTY CATEGORY NAME</p></strong>';
		//if there is no empty input
		if(empty($is_error)){
			$values =[
				'category_id' => $category_id,
				'category_name' => $category_name
			];
			//if id is empty then the save function goes to insert into the categories table and if there is value in id then save function goes to update into the categorires
			$categorySave = $category_db->saveFunction($values, 'category_id');
			//if the category is saved then generate alert
			if($categorySave==true){
				echo '<script>
						alert("Category Saved");
						document.location="categories";
					 </script>';
			}
		}
		else{
			//if there is any errors then show the respective error message
			echo $is_error;
		}
	}
?>
