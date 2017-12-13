<?php

    require_once("../SQL/dbConn.php");
    $pendingInfo = $_POST["pendInfo"];
    $values = explode("-", $pendingInfo);

    if ($values[0] == "CONFIRM"){
        $confirmQuery = "UPDATE proj3.Student_Badges SET Status='Achieved' WHERE SID=" . $values[1] . " && BID=" . $values[2];
        echo $confirmQuery;
        if($result = mysqli_query($connection, $confirmQuery)){
            header("Location: admin.php");
        }
    }
    elseif($values[0] == "DENY"){
        $denyQuery = "UPDATE proj3.Student_Badges SET Status='Denied' WHERE SID=" . $values[1] . " && BID=" . $values[2];
        echo $denyQuery;
        if($result = mysqli_query($connection, $denyQuery)){
            header("Location: admin.php");
        }
    }
    else{
        echo "There was an error, go back to try again";
    }

?>