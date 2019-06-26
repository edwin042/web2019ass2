<!DOCTYPE html>
<html>
<head>
	<title><?php echo $headTitle ?></title>
	<link rel="stylesheet" type="text/css" href="../css/csstyle.css">
	<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<header>
		<section>
			<h1>Fran's Furniture</h1>
			<aside>
				<h3>Opening Hours:</h3>
				<p>Mon-Fri: 09:00-17:30</p>
				<p>Sat: 09:00-17:00</p>
				<p>Sun: 10:00-16:00</p>
			</aside>
		</section>
	</header>
	<nav>
		<ul>
			<li><a href="home">Home</a></li>
			<li><a href="furniture">Our Furniture</a></li>
			<li><a href="about">About Us</a></li>
			<li><a href="contact">Contact us</a></li>
			<li><a href="faqs">FAQs</a></li>
			<li>
				<a href="../admin/public_html/login">
					<?php if(isset($_SESSION['adminSessionId']) || isset($_SESSION['superAdmin'])) echo
					"Admin Section"; else echo "Login"; ?>
				</a>
			</li> 
		</ul>
	</nav>
	<img src="../images/randombanner.php"/>
	<main class="<?php echo $className; ?>" style="width: 80%;">
		<?php echo $pageContent; ?>
	</main>
	<?php require 'footer_view.php'; ?>
</body>
</html>