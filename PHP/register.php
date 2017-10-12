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
                <form action='' method='POST'>
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
                    <input type="text" name="FName" placeholder='First Name' class='typeInputs'>
                    <input type="text" name="LName" placeholder='Last Name' class='typeInputs'>
                    <input type="password" name="pwd" placeholder='Password' class='typeInputs'>
                    <input type="password" name="pwdConfirm" placeholder='Confirm Password' class='typeInputs'>
                    <select name="" id="" class='typeInputs'>
                        <option value="Freshman">Freshman</option>
                        <option value="Sophomore">Sophomore</option>
                        <option value="Junior">Junior</option>
                        <option value="Senior">Senior</option>
                    </select>
                    <input type="submit" value="Register" class='submit'>
                    <hr>
                    <p>Already have an Account?<br/><a href='login.php'>Log In</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
