<section class="right">
	<h2>Enquiries</h2>

	<?php 
		$snn=1;
		$generate_table->setTitle(['S.N.', 'Full Name', 'Email', 'Phone Number', 'Enquiry', 'Staff To Deal With Enquiry', 'Responded']);
		//displaying all the enquiries in tabular form
		foreach ($showEnquiry as $enquiryAsRow) {
			if($enquiryAsRow['completed']==0){
				$respond = '<form action="" method="POST">
						<input type="hidden" name="id" value="' . $enquiryAsRow['id'] .'">
						<input type="hidden" name="deal_enquiry" value="'. $_SESSION['adminName'] .'" checked>
						<input type="submit" name="save" value="Complete">
					</form>';
				}else{ 
					$respond = 'Completed';
				}
			$generate_table->setEachRow([
				$snn++,
				$enquiryAsRow['full_name'],
				$enquiryAsRow['email_id'],
				$enquiryAsRow['telephone'],
				$enquiryAsRow['enquiry'],
				$enquiryAsRow['deal_enquiry'],
				$respond
			]);
		}
		//generate the table
		$generate_table->generateTable();
	?>
</section>