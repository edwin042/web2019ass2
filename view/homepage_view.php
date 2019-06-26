<h3>
	Welcome to Fran's Furniture. We're a family run furniture shop based in Northampton. We stock a wide variety of modern and antique furniture including laps, bookcases, beds and sofas.
</h3>
<div id="special_offer">
	<?php foreach ($new_update as $new_update_row) {?>
	<div class="photo">
		<?php //displays the update image
		 if (file_exists('../images/updates/' . $new_update_row['update_image'])) { ?>
			<a href="../images/updates/<?php echo $new_update_row['update_image']; ?>">
				<img style="width: 100%; height:400px;" src="../images/updates/<?php echo $new_update_row['update_image'];?>" />
			</a>
		<?php }?>
	</div>	
	<h2 class="title">
		<?php echo $new_update_row['update_title'] ?>
		<a href="contact"><button>Apply</button></a>
	</h2>
	<div class="description">
		<?php echo $new_update_row['update_description'] ?>
		<div class="post_date">
			<i>Start On:<?php echo $new_update_row['update_date'] ?></i><br>
			<i>Offer Ending Date:<?php echo $new_update_row['update_end_date'] ?></i>
		</div>
	</div>
	<hr>
	<div style="color:red;">
		<h4>Tell Your Friends About This Offer:</h4>
		<a href="https://www.facebook.com"><i class="fab fa-facebook-square" style="font-size: 40px; color:#4267B2;"></i></a>
		<a href="https://www.instagram.com"><i class="fab fa-instagram" style="font-size: 40px; color: #F56040;"></i></a>
		<a href="https://www.instagram.com"><i class="fab fa-twitter" style="font-size: 40px; color:skyblue;"></i></a>		
	</div>
	<?php } ?>
</div>