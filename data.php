<?php
	
$servername = "localhost";
$username = "root";
$password = "";
$databse = "login";

// Creating database connection
$conn = mysqli_connect($servername, $username, $password, $databse);

if(!$conn){
	die('Failed to connect'.mysqli_connect_error());
}else{
	echo "Connection Successful!";
}

$query = "INSERT INTO `users` (`sno`, `name`, `age`, `salary`) VALUES ('3', 'Kabir', '5', '10000000')";

if(mysqli_query($conn, $query)){
	echo "Success";
}else{
	echo "Error" . mysqli_error($conn);
}

mysqli_close($conn);

?>


