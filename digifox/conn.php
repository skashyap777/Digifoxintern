<?php
	$conn = mysqli_connect("localhost", "root", "", "digifox");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>