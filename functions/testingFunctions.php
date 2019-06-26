<?php 
	// Testing for all the forms
	//function to check the validation in login form
	function testLoginFunction($loginTestValue){
		//setting the initial value of isValid true.
		$isValid = true;
		//checking if the username is empty or not
		if($loginTestValue['username'] == ""){
			$isValid = false;
		}
		//checking if the password is empty or not
		if($loginTestValue['password'] == ""){
			$isValid = false;
		}
		//returning the value of isValid
		return $isValid;
	}

	//function to check the validation in contact form
	function testContactFunction($contactValue){
		//setting the initial value of isValid true.
		$isValid = true;
		//checking if the full_name is empty or not
		if($contactValue['full_name'] == ""){
			$isValid = false;
		}
		//checking if the email_id is empty or not
		if($contactValue['email_id'] == ""){
			$isValid = false;
		}
		//checking if the telephone is empty or not
		if($contactValue['telephone'] == ""){
			$isValid = false;
		}
		//checking if the enquiry is empty or not
		if($contactValue['enquiry'] == ""){
			$isValid = false;
		}
		//returning the value of isValid
		return $isValid;
	}

	//function to check the validation in category form
	function testAddCategoryFunction($categoryVal){
		//setting the initial value of isValid true.
		$isValid = true;
		//checking if the category_name is empty or not
		if($categoryVal['category_name'] == ""){
			$isValid = false;
		}
		//returning the value of isValid
		return $isValid;
	}

	//function to check the validation in staff form
	function testStaffFunction($staffRowVal){
		//setting the initial value of isValid true.
		$isValid = true;
		//checking if the username is empty or not
		if($staffRowVal['username'] == ""){
			$isValid = false;
		}
		//checking if the password is empty or not
		if($staffRowVal['password'] == ""){
			$isValid = false;
		}
		//checking if the role is empty or not
		if($staffRowVal['role'] == ""){
			$isValid = false;
		}
		//returning the value of isValid
		return $isValid;
	}

	//function to check the validation in updates form
	function testUpdateFunction($updateRowVal){
		//setting the initial value of isValid true.
		$isValid = true;
		//checking if the update_title is empty or not
		if($updateRowVal['update_title'] == ""){
			$isValid = false;
		}
		//checking if the update_description is empty or not
		if($updateRowVal['update_description'] == ""){
			$isValid = false;
		}
		//checking if the update_date is empty or not
		if($updateRowVal['update_date'] == ""){
			$isValid = false;
		}
		//checking if the update_end_date is empty or not
		if($updateRowVal['update_end_date'] == ""){
			$isValid = false;
		}
		//returning the value of isValid
		return $isValid;
	}

	//function to check the validation in furniture form
	function testFurnitureFunction($furVal){
		//setting the initial value of isValid true.
		$isValid = true;
		//checking if the name is empty or not
		if($furVal['name'] == ""){
			$isValid = false;
		}
		//checking if the description is empty or not
		if($furVal['description'] == ""){
			$isValid = false;
		}
		//checking if the price is empty or not
		if($furVal['price'] == ""){
			$isValid = false;
		}
		//checking if the categoryId is empty or not
		if($furVal['categoryId'] == ""){
			$isValid = false;
		}
		//returning the value of isValid
		return $isValid;
	}
?>