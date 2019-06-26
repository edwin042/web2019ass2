<?php 
	//connecting to the database table
	$pdo = new PDO('mysql:dbname=furniture;host=localhost', 'root', '', [PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION ]);
?>