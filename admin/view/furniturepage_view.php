<section class="right">
	<h2>Furniture</h2>
	<a class="new" href="savefurniture">Add new furniture</a>

	<?php 
		$snn=1;
		$generate_table->setTitle(['S.N.', 'Name', 'Price', 'Display', 'Product Detail', 'Action']);
		//displaying all the furniture
		foreach ($furnitureQuery as $furnitureAsRow) {
			$generate_table->setEachRow([
				$snn++,
				$furnitureAsRow['name'],
				$furnitureAsRow['price'],
				$furnitureAsRow['display'],
				$furnitureAsRow['product_detail'],
				'<a class="buttonCss" href="furniture_one&furnitureId=' . $furnitureAsRow['furniture_id'] .'">View Details</a>'
			]);
		}

		$generate_table->generateTable();
	?>
</section>
