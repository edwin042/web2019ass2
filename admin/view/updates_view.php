<section class="right">
	<h2>Special Updates</h2>
	<a class="new" href="saveupdate">Add Updates</a>

	<?php 
		//displaying the Updates table
		$snn=1;
		$generate_table->setTitle(['Id', 'Title', 'Description', 'Start Date', 'End Date', 'Image Name' ,'Action']);
		//displays the update values
		foreach ($updateValues as $updateRow) {
			$generate_table->setEachRow([
				$snn++,
				$updateRow['update_title'],
				$updateRow['update_description'],
				$updateRow['update_date'],
				$updateRow['update_end_date'],
				$updateRow['update_image'],
				'<a href="saveupdate&updateId=' . $updateRow['update_id'] . '">Edit</a>/
				<a href="#" onclick="javascript:if(confirm(\'Are you sure?\')){document.location=\'updates&deleteUpdate='. $updateRow['update_id']. '\';}">Delete</a>'
			]);
		}
		$generate_table->generateTable();
	?>
</section>