<?php 	
	//Test class to test the category form 
	class CategoryTest extends \PHPUnit_Framework_TestCase
	{
		//function that test the blank value in the category name field in the category form page
		function testInvalidCategoryName(){
			$rowVal = [
				'category_name' => ''
			];
			//sending the row values in the function named testAddCategoryFunction 
			$isValid = testAddCategoryFunction($rowVal);
			//checking if the test is true or false
			$this->assertFalse($isValid);
		}
		
		//function that test the right value in the category name field in the category form page
		function testValidCategory(){
			$rowVal = [
				'category_name' => 'Test Category'
			];
			//sending the row values in the function named testAddCategoryFunction 
			$isValid = testAddCategoryFunction($rowVal);
			//checking if the test is true or false
			$this->assertTrue($isValid);
		}
	}
?>