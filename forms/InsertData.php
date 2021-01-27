<?php

	$dbServername = "localhost";
	$username = "root";
	$password = "***";
	$db = "message";
try{
	$conn = mysqli_connect($dbServername,$username,$password,$db);
	
	if(mysqli_connect_error()){
		throw new Exception(mysqli_connect_error());
	}

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$sql = "INSERT INTO test_message (name, email, subject, message) 
		VALUES ('$name', '$email', '$subject','$message');";

	if(isset($_POST['submit'])){
		mysqli_query($conn, $sql);
	}
	mysqli_close($conn);
	header("Location: ../index.html?message=success");
}
catch(Exception $e){
	header("Location: ../index.html?message=unsuccessful");
}	
?>

