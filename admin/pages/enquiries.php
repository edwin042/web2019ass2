<?php 
	//connecting enquiry table
	$enquiry_db = new DatabaseClass('enquiry');

	//contains the code to deal with the enquiry
	require '../model/enquiry_deal.php';

	//select all enquiries
	$showEnquiry = $enquiry_db->selectAllQuery();

	//title of the enquiries page
	$headTitle = "Fran's Furniture - Enquiries";	
	//content of the enquiries page and sending the required variables in the array
	$pageContent = template('../view/enquiriespage_view.php', ['showEnquiry'=>$showEnquiry, 'generate_table' => $generate_table]);
?>