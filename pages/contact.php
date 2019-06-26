<?php 
	//enquiry table
	$enquiry_tbl = new DatabaseClass('enquiry');
	//contains the contact form submission code
	require '../model/contact_submit.php' ;

	//title of the contact page
	$headTitle = "Fran's Furniture - Contact";
	//content of the contact page and sending the required variables in the array
	$pageContent = template('../view/contactpage_view.php', ['enquiry_tbl' => $enquiry_tbl]);
	$className = "home";
?>