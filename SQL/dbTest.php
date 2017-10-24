<?php
    error_reporting(E_ALL);
    require_once('dbConn.php');
    $config = parse_ini_file('/home/proj3/private/config.ini');
    
    // $connection = mysqli_connect("localhost", $config['username'], $config['password'], $config['dbname']);
    // if(!$connection){
    //     die("Connection failed: " . mysqli_connect_error());
    // }

    $query = "INSERT INTO Students(SID, Password, Username, FName, LName, ClassRank, Email) VALUES(912056548,'vdfnivniugnif','S36','Steven', 'Childrey', 'Senior', 's@c.com')";
    if(mysqli_query($connection, $query)){
        echo "Entered";
    }
    else{
        echo "error";
    }
    mysqli_close($connection);

?>