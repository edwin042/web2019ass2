<?php 
	//Test class to test the updates form 
	class UpdatesTest extends \PHPUnit_Framework_TestCase
	{
		//function that test the blank value in all the updates field in the updates form page
		function testInvalidUpdateBlank(){
			$rowVal = [
				'update_title' => '',
				'update_description' => '',
				'update_date' => '',
				'update_end_date' => '',
			];
			//sending the row values in the function named testUpdateFunction
			$isValid = testUpdateFunction($rowVal);
			//checking if the test is true or false
			$this->assertFalse($isValid);
		}
		//function that test the blank value in the updates update_title field in the updates form page
		function testInvalidTitle(){
			$rowVal = [
				'update_title' => '',
				'update_description' => 'Test Description',
				'update_date' => '2019-03-04',
				'update_end_date' => '2019-04-10'
			];
			//sending the row values in the function named testUpdateFunction
			$isValid = testUpdateFunction($rowVal);
			//checking if the test is true or false
			$this->assertFalse($isValid);
		}
		//function that test the blank value in the updates update_description field in the updates form page
		function testInvalidDescription(){
			$rowVal = [
				'update_title' => 'Test Title',
				'update_description' => '',
				'update_date' => '2019-03-04',
				'update_end_date' => '2019-04-10'
			];
			//sending the row values in the function named testUpdateFunction
			$isValid = testUpdateFunction($rowVal);
			//checking if the test is true or false
			$this->assertFalse($isValid);
		}
		//function that test the blank value in the updates update_date field in the updates form page
		function testInvalidDate(){
			$rowVal = [
				'update_title' => 'Test Title',
				'update_description' => 'Test Description',
				'update_date' => '',
				'update_end_date' => '2019-04-10'
			];
			//sending the row values in the function named testUpdateFunction
			$isValid = testUpdateFunction($rowVal);
			//checking if the test is true or false
			$this->assertFalse($isValid);
		}
		//function that test the blank value in the updates update_end_date field in the updates form page
		function testInvalidEndDate(){
			$rowVal = [
				'update_title' => 'Test Title',
				'update_description' => 'Test Description',
				'update_date' => '2019-04-10',
				'update_end_date' => ''
			];
			//sending the row values in the function named testUpdateFunction
			$isValid = testUpdateFunction($rowVal);
			//checking if the test is true or false
			$this->assertFalse($isValid);
		}
		//function that test the right value in the updates field in the updates form page
		function testValidAll(){
			$rowVal = [
				'update_title' => 'Test Title',
				'update_description' => 'Test Description',
				'update_date' => '2019-03-04',
				'update_end_date' => '2019-04-04',
			];
			//sending the row values in the function named testUpdateFunction
			$isValid = testUpdateFunction($rowVal);
			//checking if the test is true or false
			$this->assertTrue($isValid);
		}
	}
?>