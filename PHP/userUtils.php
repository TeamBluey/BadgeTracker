<?php
error_reporting(E_ALL);
require_once('../SQL/dbConn.php');

function getUserInitials( $userId ) {
	$query = "SELECT FName,LName FROM Students WHERE SID = '$userId'";
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
	$query="SELECT SID, count(SID)AS NumBadges FROM Student_Badges AS SB WHERE SID='userId'";
	return $query; 
}

function getScore( $userId ) {
	$query = "SELECT Points FROM Students WHERE (SID = '$userId')";
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_assoc($result);
	return $row['Points'];
}

function loadEarnedBadges( $userId ) {
	$query="SELECT SB.BID, B.NAME, B.Description, B.PointValue, B.FileName  FROM Student_Badges AS SB INNER JOIN Badges AS B ON B.BID = SB.BID WHERE SID = '$userId'";
	return $query;
}

function loadAllBadges() {
	$query= "SELECT * from Badges";
	return $query;
}
function loadAllEarnedBadges() {
	$query= "SELECT B.BID, B.Name, B.Description, B.PointValue, B.FileName from Badges AS B INNER JOIN Student_Badges AS SB ON B.BID = SB.BID";
	return $query;
}

function loadClassBadges($class) {
	$query="SELECT S.Class, B.BID, B.NAME, B.Description, B.FileName FROM Student_Badges AS SB INNER JOIN Badges AS B ON B.BID = SB.BID INNER JOIN Students AS S ON S.SID = S.SID WHERE Class = '$class'";
	return $query;
}
?>
