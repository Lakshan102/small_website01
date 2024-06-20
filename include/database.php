<?php //connect database website
    $serverName = "localhost";
    $dbUserName = "boardingUser";
    $dbPassword = "1h5fj.jICzbAp!9s";
    $dbName = "boarding";

    $conn  = mysqli_connect($serverName,$dbUserName,$dbPassword,$dbName);

    if(!$conn){//database is not connect 'conn' variable show this error
        die("Connection failed: " .mysqli_connect_error());
    }