<?php
    // Creates a connection to the database by reading values from ini file
    error_reporting(E_ALL);
    $config = parse_ini_file('/home/proj3/private/config.ini');
    $connection = mysqli_connect("localhost", $config['username'], $config['password'], $config['dbname']);
    if(!$connection){
        die("Connection failed: " . mysqli_connect_error());
    }

?>