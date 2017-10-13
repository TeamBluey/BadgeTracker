<?php

    require_once('../SQL/dbConn.php');

    if (isset($_POST['btnRegister'])){
        $error = false; //will be true if there is an error

        //USERNAME
        $username = $_POST['username'];
		$username = mysqli_real_escape_string($connection, $username);
		$username = trim($username);
		$username = strip_tags($username);
        $username = htmlspecialchars($username);
        //EMAIL
        $email = $_POST['email'];
		$email = mysqli_real_escape_string($connection, $email);
		$email = trim($email);
		$email = strip_tags($email);
        $email = htmlspecialchars($email);
        //Student ID Number
        $sid = $_POST['SID'];
        if(!is_numeric($sid)){
            $error = true;
            echo "ID Number is not a number";
        }
        //FIRST NAME
        $fName = $_POST['FName'];
		$fName = mysqli_real_escape_string($connection, $fName);
		$fName = trim($fName);
		$fName = strip_tags($fName);
        $fName = htmlspecialchars($fName);
        //LAST NAME
        $LName = $_POST['LName'];
		$LName = mysqli_real_escape_string($connection, $LName);
		$LName = trim($LName);
		$LName = strip_tags($LName);
        $LName = htmlspecialchars($LName);
        //PASSWORD1
        $password1 = $_POST['pwd'];
		$password1 = mysqli_real_escape_string($connection, $password1);
		$password1 = trim($password1);
		$password1 = strip_tags($password1);
		$password1 = htmlspecialchars($password1);
		//PASSWORD2
		$password2 = $_POST['pwdConfirm'];
		$password2 = mysqli_real_escape_string($connection, $password2);
		$password2 = trim($password2);
		$password2 = strip_tags($password2);
        $password2 = htmlspecialchars($password2);
        //CLASS RANK
        $rank = $_POST['rank'];
        $rank = mysqli_real_escape_string($connection, $rank);
		$rank = trim($rank);
		$rank = strip_tags($rank);
        $rank = htmlspecialchars($rank);
        if(empty($rank)){
            $error = true;
            echo "<span class='registrationMessage red'>You must choose a class rank!</span>";
        }
        if($rank != "fr" && $rank != "so"  && $rank != "jr" && $rank != "sr"){
            $error = true;
        }
        //VALIDATE USERNAME
        if(empty($username) || strlen($username) < 4){
            $error = true;
		}
		if(!preg_match("/^[a-z\d_-]{4,20}$/i", $username)){
            $error = true;
		}
		else { //check for existing duplicate
			$query = "SELECT * FROM Students WHERE Userame='$username'";
			if($result = mysqli_query($connection, $query)){
				$rowCount = mysqli_num_rows($result);
				if($rowCount != 0){
					$error = true;
					echo "<span class='registrationMessage red'>Username is already taken, please choose a different one!</span>";
				}
            }
        }
        //VALIDATE EMAIL
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error = true;
            echo "<span class='registrationMessage red'>Enter a valid email address</span>";
        }
        else{ //Check for already existing Email
			$query = "SELECT * FROM Students WHERE Email = '$email'";
			if($result = mysqli_query($connection, $query)){
				$rowCount = mysqli_num_rows($result);
				if($rowCount != 0){
					$error = true;
					echo "<span class='registrationMessage red'>Email is already in use!</span>";
				}
			}
        }
        //PASSWORD VALIDATION
        if($password1 == $password2 && $error != true) {
            //$password = password_hash($password1, PASSWORD_BCRYPT);
            $password = hash("sha256", $password1);
			$query = "INSERT INTO Students(SID, Password, Username, FName, LName, ClassRank, Email) VALUES($sid,'$password','$username','$fName', '$LName', '$rank', '$email')";
			if(mysqli_query($connection, $query)){
				echo "<span class='registrationMessage green'>Registration successful, you can now login!</span>";
			}
			else {
				echo "<span class='registrationMessage red'>Error, please try again later.</span>";
			}
		}
    }

    mysqli_close($connection);

?>
<!DOCTYPE HTML>
<html lang='en'>
<head>
    <title>Badge Tracker | Register</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../CSS/register.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 loginContainer">
                <form action='register.php' method='POST'>
                    <h3 class='title'>Register</h3>
                    <!-- 
                        Need
                        SID
                        Username
                        FName
                        LName
                        PW
                        ClassRank
                    -->
                    <input type='email' name='email' placeholder='Email Address' class='typeInputs'>
                    <input type='number' name='SID' placeholder='ID Number' class='typeInputs'>
                    <input type="text" name="username" placeholder='Username' class='typeInputs'>
                    <input type="text" name="FName" placeholder='First Name' class='typeInputs'>
                    <input type="text" name="LName" placeholder='Last Name' class='typeInputs'>
                    <input type="password" name="pwd" placeholder='Password' class='typeInputs'>
                    <input type="password" name="pwdConfirm" placeholder='Confirm Password' class='typeInputs'>
                    <select name="rank" id="" class='typeInputs'>
                        <option value="fr">Freshman</option>
                        <option value="so">Sophomore</option>
                        <option value="jr">Junior</option>
                        <option value="sr">Senior</option>
                    </select>
                    <input type="submit" value="Register" class='submit' name='btnRegister'>
                    <hr>
                    <p>Already have an Account?<br/><a href='login.php'>Log In</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
