<?php
	//requiring the function to use it in the class
	require 'functions/testingFunctions.php';

	class DemoTest extends \PHPUnit_Framework_TestCase
	{
		//function that test the blank values in the username and password field in the login page
		function testInvalidBlank(){
			//array of field names
			$rowValues = [
				'username' => '',
				'password' => ''
			];
			//sending the row values in the function named testLoginFunctions 
			$isValid = testLoginFunction($rowValues);
			//checking if the test is true or false
			$this->assertFalse($isValid);
		}

		//function that test the blank value in the username field in the login page
		function testInvalidUsername(){
			//array of field names
			$rowValues = [
				'username' => '',
				'password' => 'dummydatapassword'
			];
			//sending the row values in the function named testLoginFunctions
			$isValid = testLoginFunction($rowValues);
			//checking if the test is true or false
			$this->assertFalse($isValid);
		}

		//function that test the blank value in the password field in the login page
		function testInvalidPassword(){
			//array of field names
			$rowValues = [
				'username' => 'dummydatausername',
				'password' => ''
			];
			//sending the row values in the function named testLoginFunctions
			$isValid = testLoginFunction($rowValues);
			//checking if the test is true or false
			$this->assertFalse($isValid);
		}

		//function that test the right values login page
		function testValidAll(){
			//array of field names
			$rowValues = [
				'username' => 'dummydatausername',
				'password' => 'dummydatapassword'
			];
			//sending the row values in the function named testLoginFunctions
			$isValid = testLoginFunction($rowValues);
			//checking if the test is true or false
			$this->assertTrue($isValid);
		}
		
	}
?>