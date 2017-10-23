<?php
error_reporting(E_ALL);
require_once('../SQL/dbConn.php');

function getUserInitials( $userId ) {
	$query = "SELECT FName,LName FROM Students WHERE (SID = '$userId')";
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_assoc($result);
	
	$fName = $row['FName'];
	$lName = $row['LName'];
	
	return "$fName[0]" . "$lName[0]";
}

function getUsername( $userId ) {
	$query = "SELECT Username FROM Students WHERE (SID = '$userId')";
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_assoc($result);
	return $row['Username'];
}

function getNumBadges( $userId ) {
	return null; //temporary
}

function getScore( $userId ) {
	$query = "SELECT Points FROM Students WHERE (SID = '$userId')";
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_assoc($result);
	return $row['Points'];
}

function loadEarnedBadges( $userId ) {
	return null; //temporary
}

function loadAllBadges() {
	return null; //temporary
}

function loadClassBadges() {
	return null; //temporary
}
?>
