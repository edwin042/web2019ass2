<?php 
	//Test class to test the staff form 
	class StaffTest extends \PHPUnit_Framework_TestCase{

		//function that test the blank value in all the staff field in the staff form page
		function testInvalidBlankAll(){
			$rowVal = [
				'username' => '',
				'password' => '',
				'role' => '',
			];
			//sending the row values in the function named testStaffFunction 
			$isValid = testStaffFunction($rowVal);
			//checking if the test is true or false
			$this->assertFalse($isValid);
		}
		//function that test the blank value in the staff username field in the staff form page
		function testInvalidUsername(){
			$rowVal = [
				'username' => '',
				'password' => 'testpasssword',
				'role' => 'admin',
			];
			//sending the row values in the function named testStaffFunction 
			$isValid = testStaffFunction($rowVal);
			//checking if the test is true or false
			$this->assertFalse($isValid);
		}
		//function that test the blank value in the staff password field in the staff form page
		function testInvalidPassword(){
			$rowVal = [
				'username' => 'testusername',
				'password' => '',
				'role' => 'admin',
			];
			//sending the row values in the function named testStaffFunction 
			$isValid = testStaffFunction($rowVal);
			//checking if the test is true or false
			$this->assertFalse($isValid);
		}
		//function that test the blank value in the staff role field in the staff form page
		function testInvalidRole(){
			$rowVal = [
				'username' => 'testusername',
				'password' => 'testpasssword',
				'role' => '',
			];
			//sending the row values in the function named testStaffFunction
			$isValid = testStaffFunction($rowVal);
			//checking if the test is true or false
			$this->assertFalse($isValid);
		}
		//function that test the right value in the staff field in the staff form page
		function testValidAll(){
			$rowVal = [
				'username' => 'testusername',
				'password' => 'testpasssword',
				'role' => 'admin',
			];
			//sending the row values in the function named testStaffFunction 
			$isValid = testStaffFunction($rowVal);
			//checking if the test is true or false
			$this->assertTrue($isValid);
		}
	}
?>