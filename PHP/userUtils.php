<?php
error_reporting(E_ALL);
require_once('../SQL/dbConn.php');

function getUserInitials( $userId ) {
	$query = "SELECT FName,LName FROM Students WHERE SID = '".$userId."'";
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_assoc($result);
	
	$fname = $row["FName"];
	$lname = $row["LName"];
	
	$initials = $fname[0] . $lname[0];
	return $initials;
}

function getUsername( $userId ) {
	$query = "SELECT Username FROM Students WHERE SID = '".$userId."'";
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_assoc($result);
	
	$userName = $row["Username"];
	return $userName;
}

function getNumBadges( $userId ) {
	return null; //temporary
}

function getScore( $userId ) {
	$query = "SELECT Points FROM Students WHERE SID = '".$userId."'";
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_assoc($result);
	return $row["Points"];
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
