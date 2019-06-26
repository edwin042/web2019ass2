<section class="right">
	<h2>Save Staffs</h2>
	<form action="" method="POST">
		<input type="hidden" name="user_id" value="<?php if (isset($_GET['userId'])) echo $fetchStaff['user_id']; ?>">
		<label>Username</label>
		<input type="text" name="username" value="<?php if (isset($_GET['userId'])) echo $fetchStaff['username']; ?>" />

		<label>Password</label>
		<input type="password" name="password">

		<label>Role</label>
		<select name="role">
			<option value="super">Super Admin</option>
			<option value="admin">Admin</option>
		</select>

		<input type="submit" name="add_staff" value="Submit" />
	</form>
</section>