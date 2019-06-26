<?php 
	//starting the session
	session_start();
	//includes all the require files here
	require '../include/require.php';

	//getting the newpage
	if(isset($_GET['newpage'])){
		//other pages
		require '../pages/' . $_GET['newpage'] . '.php';
	}
	else{
		//home page
		require '../pages/home.php';
	}
	//variables to send 
	$arrayVariables = [
		'headTitle' => $headTitle,
		'pageContent' => $pageContent,
		'className' => $className
	];	
	//content of the required page and sending the required variables in the array
	$loadFile = template('../view/home_layout_view.php', $arrayVariables);
	//loading the layout template file
	echo $loadFile;
?>