 <?php 
 //if there is value in session then logged in else show the login page
if(isset($_SESSION['adminSessionId']) || isset($_SESSION['superAdmin'])){ ?>
	<section class="right">
		<h2>Hello, <?php echo $_SESSION['adminName']; ?> You are now logged in</h2>
	</section>
<?php }else{
	require '../model/formsubmit.php';
	?>
	<form action="" method="POST" style="padding: 40px">
		<h2>Log in</h2>
		<label>Username:</label>
		<input type="text" name="username"/>

		<label>Enter Password: </label>
		<input type="password" name="password" />

		<input type="submit" name="login" value="Log In" />
	</form>
<?php }?>