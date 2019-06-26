<?php 
	require_once 'sectionleft_view.php'; ?>
<section class="right">
	<h1>Furniture</h1>

	<!-- Filter new or second hand things -->
	<div class="filters">
		Filter Furnitures:
		<form action="" method="POST">
			<select class="filterProduct" name="product_detail">
				<option value="new">New</option>
				<option value="second hand">Second Hand</option>
			</select>
		</form>
	<br><br><br>
	</div>
	<ul id="allFurniture" class="furniture">
		<?php //displays the furniture
		foreach ($furnitureQuery as $furnitureRow) {
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
					<span class="fas fa-star" style="font-size: 45px; color: gold;"></span>
				<?php } ?>
				<h3>Category: <?php echo $categoryFetched['category_name']; ?></h3>
				<h4>Share On:</h4>
				<a href="https://www.facebook.com"><i class="fab fa-facebook-square" style="font-size: 40px; color:#4267B2;"></i></a>
				<a href="https://www.instagram.com"><i class="fab fa-instagram" style="font-size: 40px; color: #F56040;"></i></a>
				<a href="https://www.instagram.com"><i class="fab fa-twitter" style="font-size: 40px; color:skyblue;"></i></a>

			</div>
			
		</li>
	<?php } }?>
	</ul>
</section>