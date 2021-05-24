<?php 
	$file = copy("users.txt", "uploads.csv");
	header("Location: index.php");
 ?>