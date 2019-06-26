<section class="right">
	<div class="head-well">
		<a class="buttonCss" href="savefurniture&furId=<?php echo $fetchFurnitureOne['furniture_id']; ?>">Edit</a>
		<a class="buttonCss" href="#" onclick="javascript:if(confirm('Are you sure?')){document.location='furniture&delId=<?php echo $fetchFurnitureOne['furniture_id']; ?>';}">Delete</a>
	</div><br>
	<hr>
	<div class="well">
		<u><strong>Furniture Image:</strong></u>
		<div style="display: flex; flex-direction: row; justify-content: space-around; width: 100%; overflow: auto;">
			<?php 
			//view the images in the furniture
				if(isset($fetchFurnitureOne['view_images'])){
				 	if (file_exists('../../images/furniture/' . $fetchFurnitureOne['view_images'])) { 
					echo '<img style="width:100%;height:400px;" src="../../images/furniture/'.   $fetchFurnitureOne['view_images'] .'" alt="image"/>';
					}
				}else{
					echo 'No Image Inserted';
				}
			?>
		</div>
		<a class="buttonCss" href="furniture_image&imageAddId=<?php echo $fetchFurnitureOne['furniture_id']; ?>">Upload Image</a>
		<?php if(isset($fetchFur['furniture_id'])){ ?>
			<a class="buttonCss" href="furniture_image&imageEditId=<?php echo $fetchFur['img_id']; ?>&imageAddId=<?php echo $fetchFurnitureOne['furniture_id']; ?>">Edit Image</a>
		<?php } ?>
	</div>
	<div class="row">
		<div class="well">
			<u><strong>Furniture Name:</strong></u>
			<?php echo $fetchFurnitureOne['name'] ?>
		</div>
		<div class="well">
			<u><strong>Description:</strong></u>
			<?php echo $fetchFurnitureOne['description'] ?>
		</div>
	</div>
	<div class="row">
		<div class="well">
			<u><strong>Furniture Price:</strong></u>
			<?php echo $fetchFurnitureOne['price'] ?>
		</div>
		<div class="well">
			<u><strong>View:</strong></u>
			<?php echo $fetchFurnitureOne['display'] ?>
		</div>
	</div>
	<div class="row">
		<div class="well">
			<u><strong>Product Detail:</strong></u>
			<?php echo $fetchFurnitureOne['product_detail'] ?>
		</div>
		<div class="well">
			
		</div>
	</div>
</section>