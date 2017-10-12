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
		background-image: url('https://sso.radford.edu/idp/images/10.jpg');
		background-size:100% 100%;
		background-repeat:no-repeat;
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
				<form action="" method="POST" id="login">
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