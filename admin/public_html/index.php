<?php 
	//starting the session
	session_start();
	//includes all the require files here
	require '../include/require.php';

	//each new page will start from here
	if(isset($_GET['newpage'])){
		//if there is value in session then only go to the admin pages
		if(isset($_SESSION['adminSessionId']) || isset($_SESSION['superAdmin'])){
			require '../pages/' . $_GET['newpage'] . '.php';
		}else{
			//go to the login page
			require '../pages/login.php';
		}
	}
	else{
		//admin home page
		require '../pages/login.php';
	}

	//dynamic title and content whose value is in every pages
	$arrayVariables = [
		'headTitle' => $headTitle,
		'pageContent' => $pageContent
	];
	//will load the layout file in the view folder
	$loadFile = template('../view/admin_layout_view.php', $arrayVariables);
	echo $loadFile;
?>