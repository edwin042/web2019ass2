<?php 
	//Test class to test the enquiry form 
	class EnquiryTest extends \PHPUnit_Framework_TestCase
	{
		//function that test the blank value in the all enquiry field in the enquiry form page
		function testInvalidAll(){
			$rowValues = [
				'full_name' => '',
				'email_id' => '',
				'telephone' => '',
				'enquiry' => '',
			];
			//sending the row values in the function named testContactFunction
			$isValid = testContactFunction($rowValues);
			//checking if the test is true or false
			$this->assertFalse($isValid);
		}
		//function that test the blank value in the enquiry full name field in the enquiry form page
		function testInvalidFullname(){
			$rowValues = [
				'full_name' => '',
				'email_id' => 'testemail@test.com',
				'telephone' => '12345678',
				'enquiry' => 'test',
			];
			//sending the row values in the function named testContactFunction
			$isValid = testContactFunction($rowValues);
			//checking if the test is true or false
			$this->assertFalse($isValid);
		}
		//function that test the blank value in the enquiry email id field in the enquiry form page
		function testInvalidEmail(){
			$rowValues = [
				'full_name' => 'testUsername',
				'email_id' => '',
				'telephone' => '12345678',
				'enquiry' => 'test',
			];
			//sending the row values in the function named testContactFunction
			$isValid = testContactFunction($rowValues);
			//checking if the test is true or false
			$this->assertFalse($isValid);
		}
		//function that test the blank value in the enquiry telephone field in the enquiry form page
		function testInvalidTelephone(){
			$rowValues = [
				'full_name' => 'testUsername',
				'email_id' => 'testemail@test.com',
				'telephone' => '',
				'enquiry' => 'test',
			];
			//sending the row values in the function named testContactFunction
			$isValid = testContactFunction($rowValues);
			//checking if the test is true or false
			$this->assertFalse($isValid);
		}
		//function that test the blank value in the enquiry field in the enquiry form page
		function testInvalidEnquiry(){
			$rowValues = [
				'full_name' => 'TestEnquiry',
				'email_id' => 'testemail@test.com',
				'telephone' => '12345678',
				'enquiry' => '',
			];
			//sending the row values in the function named testContactFunction
			$isValid = testContactFunction($rowValues);
			//checking if the test is true or false
			$this->assertFalse($isValid);
		}
		//function that test the right value in the enquiry field in the enquiry form page
		function testInvalidEnquiryAll(){
			$rowValues = [
				'full_name' => 'TestEnquiry',
				'email_id' => 'testemail@test.com',
				'telephone' => '12345678',
				'enquiry' => 'enquiry test',
			];
			//sending the row values in the function named testContactFunction
			$isValid = testContactFunction($rowValues);
			//checking if the test is true or false
			$this->assertTrue($isValid);
		}
	}
?>