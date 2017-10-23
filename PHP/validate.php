<?php
error_reporting(E_ALL);
require_once('../SQL/dbConn.php');
session_start();

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
	$query = "SELECT SID,Password FROM Students WHERE Email = '".$email."'";
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_assoc($result);

	if( $pwdHash === $row["Password"] ) {
		$_SESSION['SID'] = $row["SID"];
		header("Location: myProfile.php");
	}
	else
		echo "Invalid Email or Password";
}
mysqli_close($connection);
?>
