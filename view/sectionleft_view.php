<section class="left">
	<h3>Categories</h3><hr>
	<ul>
		<?php //displays categories name in section left
		foreach ($categoryAllQuery as $categoryRow) { ?>
			<li class="<?php if($categoryRow['category_id']==$_GET['catId']) echo "current"; ?>">
				<a href="categories&catId=<?php echo $categoryRow['category_id']; ?>">
					<?php echo $categoryRow['category_name']; ?>
				</a>
			</li>
		<?php } ?>
	</ul>
</section>