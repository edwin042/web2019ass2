<section class="right">
	<h2>User Accounts</h2>
	<?php if(isset($_SESSION['superAdmin'])){?>
		<a href="savestaff">Add New Staff</a>
	<?php }

		//displaying the staff table
		$snn=1;
		$generate_table->setTitle(['Id', 'Username', 'Staff Role', 'Action']);

		//displays the users
		foreach ($userShow as $userAsRow) { 
			if(isset($_SESSION['superAdmin'])){
				$action = '<a href="savestaff&userId=' . $userAsRow['user_id'] . '">Edit</a> / 
				<a href="#" onclick="javascript:if(confirm(\'Are you sure?\')){document.location=\'staffs&deleteUser='. $userAsRow['user_id']. '\';}">Delete</a>';
			 }else{
				$action = 'You Cannot Take Any Actions Here';
			}

			$generate_table->setEachRow([
				$snn++,
				$userAsRow['username'],
				$userAsRow['role'],	
				$action
			]);
		}
		
		$generate_table->generateTable();
	?>
</section>