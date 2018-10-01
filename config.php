<?php 
session_start();

$serverName = "localhost";
$dbUser ="root";
$dbPass ="";
$dbName ="linas";

$conn = mysqli_connect($serverName, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (!mysqli_select_db($conn, $dbName)) {
    die("Uh oh, couldn't select database $db");
}
