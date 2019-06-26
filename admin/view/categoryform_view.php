<section class="right">
	<h2>Save Category</h2>
	<form action="" method="POST">
		<input type="hidden" name="category_id" value="<?php if (isset($_GET['cateId'])) echo $fetchCategory['category_id']; ?>">
		<label>Category Name</label>
		<input type="text" name="category_name" value="<?php if (isset($_GET['cateId'])) echo $fetchCategory['category_name']; ?>" />
		<input type="submit" name="submit" value="Save Category" />
	</form>
</section>