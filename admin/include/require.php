<?php 	
	// require section of the admin panel
	require '../../data_base/database_connection.php'; //connecting to the database
	require '../../functions/template.php'; //requiring the function template
	require '../../classes/databaseclass.php'; //requiring database class 
	require '../../classes/tablegeneratorclass.php'; //generating the table

	$generate_table = new TableGeneratorClass(); //generate new table to view all the files from database
	$furniture_db = new DatabaseClass('furniture_db'); //furniture table
	$category_db = new DatabaseClass('category_db'); //categories table
	$users_db = new DatabaseClass('users_table'); //users table
	$updates_db = new DatabaseClass('updates_db'); //updates table
?>