<?php
error_reporting(E_ALL);
require_once('../../../conn.php');
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
	// $pwdHash = hash("sha256", $pwd);
	
	// create query and fetch result
	$query = "SELECT Password FROM Admin WHERE Username = '".$email."'";
	
	if ( $result = mysqli_query($connection, $query) ) {
		while ( $row = mysqli_fetch_assoc($result) ) {
			if( $pwd === $row["Password"] ) {
        		$_SESSION['uname'] = $email;
        		header("Location: admin.php");
    		}
    		else
        		echo "Invalid Email or Password";

		}
	}
}
mysqli_close($connection);
?>
