<?php
error_reporting(E_ALL);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui, user-scalable=no">
	<meta name="author" content="Team Bluey - Jeffrey Beebe">
	<title>Badge Tracker - My Profile</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<!-- style will be moved to external stylesheet after completion -->
	<style>
	body { overflow-x: hidden; }
	
	#headerContent {
		background-image: url('https://sso.radford.edu/idp/images/red_bg_pattern.jpg');
		padding: 25px;
	}
	#userPicture {
		width: 150px;
		height: 150px;
		border-radius: 50%;
		border: 2px solid #000000;
		background-color: #ffffff;
	}
	#userInitial {
		font-size: 95px;
	}
	#userInfo { padding-left: 25px; }
	#userInfo h1, #userInfo h3 { color: #ffffff; margin-top: 10px; }
	#userInfo h1 { font-weight: bold; text-decoration: underline; }
	
	#mainContent { padding-left: 0px; padding-right: 0px; }
	.nav { background-color: #d9d9d9; }
	.nav-tabs { font-weight: bold; }
	.nav-tabs li.active { text-decoration: underline; }
	.tab-content { padding-left: 20px; }
	
	@media only screen and (max-width: 480px) {
		#headerContent table { margin-left: auto; margin-right: auto; text-align: center; }
		#headerContent td { display: table-row; }
		#userPicture {  width: 100px; height: 100px; margin-left: auto; margin-right: auto; }
		#mainContent li { width: 50%; text-align: center; }
		.tab-content { padding-left: 7px; padding-right: 7px; }
	}
	</style>
	
</head>
<body>
	<div class="container-fluid" id="headerContent">
		<div class="row">
			<div class="col-sm-12">
				<table>
					<tr>
						<td>
							<div class="text-center" id="userPicture">
								<span id="userInitial"></span>
								<!-- PHP TO GRAB USER PICTURE -->
							</div>
						</td>
						<td id="userInfo">
							<h1>Username</h1>
							<h3># of Badges Earned:</h3> <!-- PHP TO CALCULATE NUMBER OF BADGES EARNED -->
							<h3>BadgeTracker Score:</h3> <!-- PHP TO GRAB USERS TOTAL SCORE -->
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div> <!-- end div #headerContent -->
	<div class="container-fluid" id="mainContent">
		<div class="row">
			<div class="col-sm-12">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#myBadges">My Badges</a></li>
					<li><a data-toggle="tab" href="#allBadges">All Available Badges</a></li>
					<li><a data-toggle="tab" href="#classBadges">Classmate's Badges</a></li>
					<li><a data-toggle="tab" href="#requestBadge">Request Badge</a></li>
				</ul>
			</div>
		</div>
		<div class="tab-content">
			<div class="tab-pane fade in active" id="myBadges">
				<h3>My Earned Badges</h3>
				<p>Create php function loadEarnedBadges() to return a ul containing all badges earned by the user</p>
				<!-- PHP TO DISPLAY UL OF ALL BADGES EARNED BY USER -->
			</div>
			<div class="tab-pane fade" id="allBadges">
				<h3>All Badges Available To Be Earned</h3>
				<p>Create php function loadAllBadges() to return a ul of all badges available for the user to earn</p>
				<!-- PHP TO DISPLAY UL OF ALL BADGES AVAILABLE TO BE EARNED -->
			</div>
			<div class="tab-pane fade" id="classBadges">
				<h3>Badges Earned By Others</h3>
				<p>Create php function loadClassBadges() to return a ul of the badges earned by classmates</p>
				<!-- PHP TO DISPLAY UL OF ALL BADGES EARNED BY OTHERS -->
			</div>
			<div class="tab-pane fade" id="requestBadge">
				<h3>Submit Request For Badge</h3>
				<p>Create a form for the user to submit a badge request and the corresponding php handler to add the request to the pending badges list</p>
				<!-- FORM FOR USER TO SUBMIT A REQUEST FOR BADGE THEY BELIEVE THEY'VE EARNED -->
			</div>
		</div>
	</div> <!-- end div #mainContent -->
</body> <!-- end body -->
</html> <!-- end html -->

