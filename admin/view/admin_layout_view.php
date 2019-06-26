<!DOCTYPE html>
<html>
<head>
	<title>
		<?php
		//dynamic title 
			echo $headTitle; 
		?>
	</title>
	<link rel="stylesheet" href="../../css/csstyle.css"/>
	<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
</head>
<body>
	<header>
		<section>
			<aside>
				<h3>Opening Hours:</h3>
				<p>Mon-Fri: 09:00-17:30</p>
				<p>Sat: 09:00-17:00</p>
				<p>Sun: 10:00-16:00</p>
			</aside>
			<h1>Fran's Furniture</h1>
		</section>
	</header>
	<nav>
		<ul>
			<li><a href="../../public_html/home">Home</a></li>
			<li><a href="../../public_html/furniture">Our Furniture</a></li>
			<li><a href="../../public_html/about">About Us</a></li>
			<li><a href="../../public_html/contact">Contact us</a></li>
			<li><a href="../../public_html/faqs">FAQs</a></li>
			<?php if(isset($_SESSION['adminSessionId']) || isset($_SESSION['superAdmin'])){ ?>
				<li><a href="logout">Log Out</a></li>
			<?php } ?>
		</ul>
	</nav>
	<img src="../../images/randombanner.php"/>
	<main class="admin" style="width: 100%;">
		<?php if(isset($_SESSION['adminSessionId'])|| isset($_SESSION['superAdmin'])){ ?>
		<section class="left">
			<ul>
				<h3 style="border-bottom: 1px solid white">Admin Menu</h3>
				<li><a href="updates">Special Offers</a></li>
				<li><a href="staffs">Staffs</a></li>
				<li><a href="enquiries">Enquiries</a></li>
				<li><a href="furniture">Furniture</a></li>
				<li><a href="categories">Categories</a></li>
			</ul>
		</section>
		<?php }
		//dynamic page content
		echo $pageContent; ?>
	</main>
	<?php require '../../view/footer_view.php'; ?>
</body>
</html>

