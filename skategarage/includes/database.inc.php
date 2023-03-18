<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "dbSkateGarage";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    
    die("Connection Failed: " . mysqli_connent_error());
}