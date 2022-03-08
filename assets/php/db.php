<?php

//server

$servername = "localhost";
$username = "root";
$password = "";


//localhost
/*
$servername = "127.0.0.1";
$username = "root";
$password = "";
*/
// Create connection
$conn = new mysqli($servername, $username, $password, "db_zamecnictvi_tolar");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>