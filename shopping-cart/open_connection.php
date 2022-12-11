<?php 
	session_start();
	$con = mysqli_connect("localhost", "root", "", "shopping_db_cart");

	if ($con === false) 
		die("ERROR: Could not connect". mysqli_connect_error());
?>