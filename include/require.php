<?php 
	require '../data_base/database_connection.php'; //connection to the database
	require '../functions/template.php'; //requiring the function template
	require '../classes/databaseclass.php'; //requiring the database class

	$furniture = new DatabaseClass('furniture_db'); //furniture table
	$category_db = new DatabaseClass('category_db'); //category table
?>