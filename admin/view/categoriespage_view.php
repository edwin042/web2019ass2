<section class="right">
	<h2>Categories</h2>
	<a class="new" href="savecategory">Add new category</a>

	<?php 
	//displaying the category table
		$snn=1;
		$generate_table->setTitle(['S.N.', 'Category Name', 'Action']);
		//displaying all the categories in tabular form
		foreach ($showCategories as $categoryRow) { 
			$generate_table->setEachRow([
				$snn++,
				$categoryRow['category_name'],
				'<a href="savecategory&cateId=' . $categoryRow['category_id'].'">Edit</a> /
				<a href="#" onclick="javascript:if(confirm(\'Are you sure?\')){document.location=\'categories&del_Id=' . $categoryRow['category_id'] .'\';}">Delete</a>'
			]);
		}
		//generate the table
		$generate_table->generateTable();
	?>
</section>