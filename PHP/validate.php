<?php
error_reporting(E_ALL);
require_once('../SQL/dbconn.php');

if( isset($_POST['email']) && isset($_POST['pwd']) ) {
	// store and sanitize user input
	$email = $_POST['email'];
		$email = mysqli_real_escape_string($connection, $email);
		$email = trim($email);
		$email = strip_tags($email);
		$email = htmlspecialchars($email);
	$pwd = $_POST['pwd'];
		$pwd = mysqli_real_escape_string($connection, $pwd);
		$pwd = trim($pwd);
		$pwd = strip_tags($pwd);
		$pwd = htmlspecialchars($pwd);
	$pwdHash = hash("sha256", $pwd);
	
	// create query and fetch result
	$query = "SELECT Password FROM STUDENTS WHERE Email = '$email'";
	$result = mysqli_query($connection, $query);
	
	// check for equality between user input and stored password
	if( $pwdHash === $result )
		header('Location: myProfile.php');
	else
		echo "Invalid Email or Password";
}
mysqli_close($connection);
?>