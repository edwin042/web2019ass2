<?php 
	require '../data_base/database_connection.php';
	require '../classes/databaseclass.php';
	
	$furniture = new DatabaseClass('furniture_db');
	$category_db = new DatabaseClass('category_db');

	$furnitureSelected = $furniture->selectQuery('product_detail', $_POST['filterProduct']);
	$categoryAllQuery = $category_db->selectAllQuery();
	
	foreach ($furnitureSelected as $furnitureRow) {
		if($furnitureRow['display']=='show'){
			$categoryQuery = $category_db->selectQuery('category_id', $furnitureRow['categoryId']);
			$categoryFetched = $categoryQuery->fetch(); 
	?>
	<li>
		<div class="big-picture">
			<?php
			 if (file_exists('../images/furniture/' . $furnitureRow['view_images'])) { ?>
				<img src="../images/furniture/<?php echo $furnitureRow['view_images'];?>"  alt="image"/>
			<?php }?>
		</div>
		<div class="details">
			<h2><?php echo strtoupper($furnitureRow['name']); ?></h2>
			<h4>£ <?php echo $furnitureRow['price']; ?> </h4>
			<p><?php echo $furnitureRow['description']; ?></p>
			<strong>
				<p class="product_detail"><?php echo strtoupper($furnitureRow['product_detail']); ?></p>
			</strong>
			<?php if($furnitureRow['product_detail']=='new'){?>
				<span class="fa fa-star checked" style="font-size: 45px; color: gold;"></span>
			<?php } ?>
			<h3>Category: <?php echo $categoryFetched['category_name']; ?></h3>
		</div>
	</li>
<?php } } ?>