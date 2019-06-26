<section class="right">
	<h2>Updates</h2>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="update_id" value="<?php if(isset($_GET['updateId'])) echo $fetchedUpdate['update_id'] ?>">
		<label>Update Title</label>
		<input type="text" name="update_title" value="<?php if(isset($_GET['updateId'])) echo $fetchedUpdate['update_title']; ?>"/>

		<label>Update Description</label>
		<input type="text" name="update_description" value="<?php if(isset($_GET['updateId'])) echo $fetchedUpdate['update_description']; ?>"/>

		<label>Update Start Date</label>
		<input type="date" name="update_date" value="<?php if(isset($_GET['updateId'])) echo $fetchedUpdate['update_date']; ?>"/>

		<label>Update End Date</label>
		<input type="date" name="update_end_date" value="<?php if(isset($_GET['updateId'])) echo $fetchedUpdate['update_end_date']; ?>"/>

		<label>Upload Image</label>
		<input type="file" name="update_image" value="<?php if(isset($_GET['updateId'])) echo $fetchedUpdate['update_image']; ?>"/>

		<input type="submit" name="submit" value="Submit"/>
	</form>
	<a href="updates"><button style="margin-left: 43%;
    padding: 1.5% 17%;">Cancel</button></a>
</section>