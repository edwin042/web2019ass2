<section class="right">
	<h2>Save Furniture</h2>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="furniture_id" value="<?php if (isset($_GET['furId'])) echo $fetchFurniture['furniture_id']; ?>">
		<label>Name</label>
		<input type="text" name="name" value="<?php if(isset($_GET['furId'])) echo $fetchFurniture['name']; ?>" />

		<label>Description</label>
		<textarea name="description"><?php if(isset($_GET['furId'])) echo $fetchFurniture['description']; ?></textarea>

		<label>Price</label>
		<input type="text" name="price" value="<?php if(isset($_GET['furId'])) echo $fetchFurniture['price']; ?>" />

		<label>Display:</label>
		<select name="display">
			<option value="show" 
				<?php if(isset($_GET['furId'])){
						if($fetchFurniture['display'] == "show") echo "selected";}?>>
				Show
			</option>
			<option value="hide" 
				<?php if(isset($_GET['furId'])){
						if($fetchFurniture['display'] == "hide") echo "selected";}?>>
				Hide
			</option>
		</select>

		<label>Product Detail</label>
			<select name="product_detail">
				<option value="new" 
				<?php if(isset($_GET['furId'])){
						if($fetchFurniture['product_detail'] == "new") echo "selected";}?>>
					New
				</option>
				<option value="second hand" 
					<?php if(isset($_GET['furId'])){
							if($fetchFurniture['product_detail'] == "second hand") echo "selected";}?>>
					Second Hand
				</option>
			</select>		
		<div id="showImageLink">
			<label>Image 1</label>
			<input type="file" name="view_images"/>
		</div>

		<label>Category</label>
		<select name="categoryId">
		<?php
			foreach ($categoryShow as $categoryRow) { ?>
				<option value="<?php echo $categoryRow['category_id'];?>" 
					<?php if(isset($_GET['furId'])){
							if($fetchFurniture['categoryId'] == $categoryRow['category_id']) echo "selected";}?>>
					<?php echo $categoryRow['category_name']; ?>
				</option>
			<?php }?>
		</select>

		<input type="submit" name="submit" value="Save" />
	</form>
</section>