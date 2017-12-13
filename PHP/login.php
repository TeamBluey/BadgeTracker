<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui, user-scalable=no">
	<meta name="author" content="Team Bluey - Jeffrey Beebe">
	<title>Badge Tracker - Login</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<!-- style will be moved to external stylesheet after completion -->
	<style>
	body {
		height:100vh;
		overflow-y:hidden;
    	background-color: #fdf1f1;
    	background-image: url("data:image/svg+xml,%3Csvg width='48' height='64' viewBox='0 0 48 64' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M48 28v-4L36 12 24 24 12 12 0 24v4l4 4-4 4v4l12 12 12-12 12 12 12-12v-4l-4-4 4-4zM8 32l-6-6 10-10 10 10-6 6 6 6-10 10L2 38l6-6zm12 0l4-4 4 4-4 4-4-4zm12 0l-6-6 10-10 10 10-6 6 6 6-10 10-10-10 6-6zM0 16L10 6 4 0h4l4 4 4-4h4l-6 6 10 10L34 6l-6-6h4l4 4 4-4h4l-6 6 10 10v4L36 8 24 20 12 8 0 20v-4zm0 32l10 10-6 6h4l4-4 4 4h4l-6-6 10-10 10 10-6 6h4l4-4 4 4h4l-6-6 10-10v-4L36 56 24 44 12 56 0 44v4z' fill='%23c1c1c1' fill-opacity='0.26' fill-rule='evenodd'/%3E%3C/svg%3E");
	}
	#login {
		margin:0 auto;
		text-align: center;
		border-radius: 15px;
		border:7px ridge white;
		background-image: url('https://sso.radford.edu/idp/images/red_bg_pattern.jpg');
	}
	#login input {
		border-radius:10px;
		width:50%;
		font-weight:bold;
		border:1px solid navy;
		padding-left:5px;
		margin-top:10px;
		margin-bottom:10px;
	}
	#login hr {width:80%;}
	#login h3,p {color:white; font-weight:bold;}
	#login h3 {text-decoration:underline;}
	#loginDiv {
		position:absolute;
		margin:auto;
		top:0;
		right:0;
		bottom:0;
		left:0;
		margin-top:175px;
	}
	
	<!-- for mobile display -->
	@media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
		#loginDiv {
			margin-top:75px;
		}
	}
	</style>
</head>
<body>
	<div class="container-fluid">
	
		<div class="row">
			<div class="col-sm-3"></div> <!-- for formatting purposes -->
			
			<div class="col-sm-6" id="loginDiv">
				<form action="validate.php" method="POST" id="login">
					<h3>BADGE TRACKER LOGIN</h3>
					<input type="email" name="email" placeholder="Enter Email">
					<input type="password" name="pwd" placeholder="Enter Password">
					<input type="submit" value="Login">
					<hr>
					<p>No Account? <a href="register.php">Create Account</a></p>
				</form>
			</div> <!-- end div #loginDiv -->
			
			<div class="col-sm-3"></div> <!-- for formatting purposes -->
		</div> <!-- end div row -->
	
	</div> <!-- end div container-fluid -->

</body> <!-- end body -->
</html> <!-- end html -->
