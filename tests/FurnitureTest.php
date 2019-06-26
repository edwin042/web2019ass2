<?php 
	//Test class to test the category form 
	class FurnitureTest extends \PHPUnit_Framework_TestCase
	{
		//function that test the blank value in the furniture fields in the furniture form page
		function testInvalidFurBlank(){
			//array of field names
			$rowVal = [
				'name' => '',
				'description' => '',
				'price' => '',
				'categoryId' => ''
			];
			//sending the row values in the function named testFurnitureFunction
			$isValid = testFurnitureFunction($rowVal);
			//checking if the test is true or false
			$this->assertFalse($isValid);
		}
		//function that test the blank value in the name furniture field in the furniture form page
		function testInvalidName(){
			$rowVal = [
				'name' => '',
				'description' => 'Test Description',
				'price' => '6788',
				'categoryId' => '2'
			];
			//sending the row values in the function named testFurnitureFunction
			$isValid = testFurnitureFunction($rowVal);
			//checking if the test is true or false
			$this->assertFalse($isValid);
		}
		//function that test the blank value in the description furniture field in the furniture form page
		function testInvalidDescription(){
			$rowVal = [
				'name' => 'Test Name',
				'description' => '',
				'price' => '6788',
				'categoryId' => '2'
			];
			//sending the row values in the function named testFurnitureFunction
			$isValid = testFurnitureFunction($rowVal);
			//checking if the test is true or false
			$this->assertFalse($isValid);
		}
		//function that test the blank value in the price furniture field in the furniture form page
		function testInvalidPrice(){
			$rowVal = [
				'name' => 'Test Name',
				'description' => 'Test Description',
				'price' => '',
				'categoryId' => '2'
			];
			//sending the row values in the function named testFurnitureFunction
			$isValid = testFurnitureFunction($rowVal);
			//checking if the test is true or false
			$this->assertFalse($isValid);
		}
		//function that test the blank value in the categoryId furniture field in the furniture form page
		function testInvalidCategoryId(){
			$rowVal = [
				'name' => 'Test Name',
				'description' => 'Test Description',
				'price' => '6788',
				'categoryId' => ''
			];
			//sending the row values in the function named testFurnitureFunction
			$isValid = testFurnitureFunction($rowVal);
			//checking if the test is true or false
			$this->assertFalse($isValid);
		}
		//function that test the right value in the furniture field in the furniture form page
		function testValidAll(){
			$rowVal = [
				'name' => 'Test Name',
				'description' => 'Test Description',
				'price' => '6788',
				'categoryId' => '2'
			];
			//sending the row values in the function named testFurnitureFunction
			$isValid = testFurnitureFunction($rowVal);
			//checking if the test is true or false
			$this->assertTrue($isValid);
		}
	}
?>