<?php
// @Author of functions: Jeffrey Beebe
// @Author of Queries: Justin Ridgway
error_reporting(E_ALL);
require_once('../SQL/dbConn.php');

function getUserInitials( $userId ) {
	global $connection;
	$query = "SELECT FName,LName FROM Students WHERE (SID = '$userId')";
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_assoc($result);
	
	$fName = $row['FName'];
	$lName = $row['LName'];
	
	return "$fName[0]" . "$lName[0]";
}

function getUsername( $userId ) {
	global $connection;
	$query = "SELECT Username FROM Students WHERE (SID = '$userId')";
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_assoc($result);
	return $row['Username'];
}

function getNumBadges( $userId ) {
	global $connection;
	$query = "SELECT count(SID) AS NumBadges FROM Student_Badges WHERE (SID = '$userId')";
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_assoc($result);
	return $row['NumBadges']; 
}

function getScore( $userId ) {
	global $connection;
	$query = "SELECT Points FROM Students WHERE (SID = '$userId')";
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_assoc($result);
	return $row['Points'];
}

function loadEarnedBadges( $userId ) {
	global $connection;
	$table = "<table class='earnedTable'>\n<tr>\n";
	$query = "SELECT SB.BID, B.NAME, B.Description, B.PointValue, B.FileName FROM Student_Badges AS SB INNER JOIN Badges AS B ON B.BID = SB.BID WHERE SID = '$userId'";
	if ( $result = mysqli_query($connection, $query) ) {
		while ( $row = mysqli_fetch_assoc($result) ) {
			$image = $row['FileName'];
			$name = $row['NAME'];
			$description = $row['Description'];
			$value = $row['PointValue'];
			$table .= "<td><div class='earnedBadges'><img src='../Images/$image'><p>Name: $name</p><p>Description: $description</p><p>Point Value: $value</p></div></td>\n";
		}
	}
	$table .= "</tr>\n</table>";
	return $table;
}

function loadAllBadges() {
	global $connection;
	$table = "<table class='earnedTable'>\n<tr>\n";
	$query = "SELECT NAME, Description, PointValue, FileName FROM Badges";
	if ( $result = mysqli_query($connection, $query) ) {
		while ( $row = mysqli_fetch_assoc($result) ) {
			$image = $row['FileName'];
        	$name = $row['NAME'];
        	$description = $row['Description'];
        	$value = $row['PointValue'];
        	$table .= "<td><div class='allBadges'><img src='../Images/$image'><p>Name: $name</p><p>Description: $description</p><p>Point Value: $value</p></div></td>";
		}
	}
	$table .= "</tr>\n</table>";
	return $table;
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
