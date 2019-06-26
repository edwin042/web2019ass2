<?php require_once 'sectionleft_view.php'; ?>
<section class="right">
	<h1><?php echo $headerCategories ?></h1>
	<ul class="furniture">
	<?php
	//show the respective categories furniture
	foreach ($furnitureQuery as $furnitureRow) { 
		if($furnitureRow['display']=='show'){
			$categoryQuery = $category_db->selectQuery('category_id', $furnitureRow['categoryId']);
			$categoryFetched = $categoryQuery->fetch();?>

		<li class="<?php  if($furnitureRow['product_detail']=="new") echo "new";
		else echo "second_hand";?>">

		<div class="big-picture">
		<?php //show furniture image 
		 if (file_exists('../images/furniture/' . $furnitureRow['view_images'])) { ?>
			<img src="../images/furniture/<?php echo $furnitureRow['view_images'];?>"  alt="image"/>
		<?php }?>
		</div>
		<div class="details">
				<h2><?php echo $furnitureRow['name'];?></h2>
				<h3>£ <?php echo $furnitureRow['price']; ?></h3>
				<p><?php echo $furnitureRow['description'];?></p>
				<strong><p><?php echo strtoupper($furnitureRow['product_detail']); ?></p></strong>
				<?php if($furnitureRow['product_detail']=='new'){?>
					<span class="fa fa-star checked" style="font-size: 45px; color: gold;"></span>
				<?php } ?>
				<h4>Share On:</h4>
				<a href="https://www.facebook.com"><i class="fab fa-facebook-square" style="font-size: 40px; color:blue;"></i></a>
				<a href="https://www.instagram.com"><i class="fab fa-instagram" style="font-size: 40px; color:red;"></i></a>
				<a href="https://www.instagram.com"><i class="fab fa-twitter" style="font-size: 40px; color:skyblue;"></i></a>
			</div>
		</li>
	<?php } } ?>
	</ul>
</section>