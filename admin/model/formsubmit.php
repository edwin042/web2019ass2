<?php 
	//if login button is pressed
	if(isset($_POST['login'])) 
	{	
		//validate the username
		$auth  = $users_db->selectQuery('username', $_POST['username']);
		if($auth->rowCount()> 0)
		{
			//data fetched from the users table
			$rows = $auth->fetch();
			//if the password is verified
			if(password_verify($_POST['password'], $rows['password']))
			{
				//adding the username value in session
				$_SESSION['adminName'] = $rows['username'];
				//checking the role in the users table
				if($rows['role'] == 'super'){
					//setting the user_id value in the session
					$_SESSION['superAdmin'] = $rows['user_id'];
					header('Location:login');	
				}else{
					//setting the user_id value in the session
					$_SESSION['adminSessionId'] = $rows['user_id'];
					header('Location:login');		
				}
			}else
			{
				echo "<h2>Password Not Correct</h2>";
			}
		}else
		{
			echo "<h2>Username Not Correct</h2>";
		}
	}
?>