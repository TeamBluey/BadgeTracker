<!DOCTYPE HTML>
<html lang='en'>
<head>
    <title>Badge Tracker | Register</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="../CSS/register.css" rel="stylesheet" type="text/css"> -->
    <link href="../CSS/admin.css" rel="stylesheet" type="text/css">
    <script 
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous">
    </script>
    <script src="../JS/admin.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
    <div class='header'>
        <h1 class='title'>Administrator</h1>
        <h3 class='className'>Web II</h3>
    </div>
    <div class='tabBar'>
        <button class='pendingBtn'>Pending Badges</button>
        <button class='completeBtn'>Completed Badges</button>
        <button class='sqlBtn'>SQL Statements</button>
    </div>
    <div class="container-fluid pendingBadgesBody">
        <div class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-8 tableDiv">
                <table class='pendingBadges'>
                    <thead>
                    <tr>
                        <th align='center' colspan='5'><h3 class="tableTitle">Pending Badges</h3></th>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>Badge Description</td>
                        <td>Date</td>
                        <td>Accept</td>
                        <td>Delete</td>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- ACTUALLY GRABBING FROM DB -->
                    <?php
                        require_once('../SQL/dbConn.php');
                        $query = "SELECT * FROM Student_Badges WHERE Status = 'Pending'";
                        $result = mysqli_query($connection, $query);
                        if (mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                //Get Name from SID
                                $sid = $row['SID'];
                                $nameQ = "SELECT FName, LName FROM Students WHERE SID = '$sid'";
                                $nameResult = mysqli_query($connection, $nameQ);
                                $nameRow = mysqli_fetch_row($nameResult);
                                //Get Decription from BID
                                $bid = $row['BID'];
                                $bidQ = "SELECT Description FROM Badges WHERE BID = '$bid'";
                                $bidResult = mysqli_query($connection, $bidQ);
                                $bidRow = mysqli_fetch_row($bidResult);
                                echo "<tr>";
                                echo "<td>" . $nameRow[0] . " " . $nameRow[1] . "</td>";
                                echo "<td>" . $bidRow[0] . "</td>";
                                echo "<td>" . $row['Date'] . "</td>";
                                echo "<td><input type='submit' value='Confirm'></td>";
                                echo "<td><input type='submit' value='Delete' class='dangerBtn'></td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container-fluid completedBadgesBody">
        <div class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-8 tableDiv">
                <table class='completedBadges'>
                    <thead>
                    <tr>
                        <th align='center' colspan='4'><h3 class="tableTitle">Completed Badges</h3></th>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>Badge Description</td>
                        <td>Date</td>
                        <td>Points</td>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Pulling from DB -->
                    <?php
                        $query = "SELECT * FROM Student_Badges WHERE Status = 'Achieved'";
                        $result = mysqli_query($connection, $query);
                        if (mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                //Get Name from SID
                                $sid = $row['SID'];
                                $nameQ = "SELECT FName, LName FROM Students WHERE SID = '$sid'";
                                $nameResult = mysqli_query($connection, $nameQ);
                                $nameRow = mysqli_fetch_row($nameResult);
                                //Get Decription from BID
                                $bid = $row['BID'];
                                $bidQ = "SELECT Description, PointValue FROM Badges WHERE BID = '$bid'";
                                $bidResult = mysqli_query($connection, $bidQ);
                                $bidRow = mysqli_fetch_row($bidResult);
                                echo "<tr>";
                                echo "<td>" . $nameRow[0] . " " . $nameRow[1] . "</td>";
                                echo "<td>" . $bidRow[0] . "</td>";
                                echo "<td>" . $row['Date'] . "</td>";
                                echo "<td>" . $bidRow[1] . "</td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container-fluid sqlBody">
        <div class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-8 tableDiv">
                <h2 class='sqlTitle'>Run SQL</h2>
                <p class='selectStatement'>Select 
                    <select>
                        <option value='*'>*</select>
                    </select>
                    FROM
                    <select>
                        <option value='Students'>Students</select>
                    </select>
                </p>
            </div>
        </div>
    </div>
</body>
</html>