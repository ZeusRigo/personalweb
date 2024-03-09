<?php

    $hostName = "localhost";
    $dbUser = "id21970827_root";
    $dbPassword = "Test@123";
    $dbName = "id21970827_logreg";
    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
    if(!$conn){
        die("Something went wrong!");
    }

?>