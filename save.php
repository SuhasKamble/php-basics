<?php

	
	// variables 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];




	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "login";

	$conn = mysqli_connect($servername, $username, $password,$database);

	if(!$conn){
		echo "Database is not connected";
	}else{
		echo "Database is connected";
	}

	$query = "INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email',' $subject', '$message')";

	if(mysqli_query($conn,$query)){
		echo "Data is saved";
	}else{
		echo "Something went wrong";
	}
?>
