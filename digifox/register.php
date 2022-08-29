<?php
	require 'conn.php';
	
	if(ISSET($_POST['register'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		
		mysqli_query($conn, "INSERT INTO `input` VALUES('', '$firstname', '$lastname', '$email', '$gender')") or die(mysqli_error());
		echo "<h3 class='text-success'> Successfully registered!</h3>";
	}
?>