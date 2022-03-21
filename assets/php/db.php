<?php

//server

$servername = "uvdb62.active24.cz";
$username = "zamecnicdb_zamec";
$password = "Terezin350";
$db = "zamecnicdb_zamecnictvi_tolar";

//localhost
/*
$servername = "localhost";
$username = "root";
$password = "";
$db = "db_zamecnictvi_tolar";
*/

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>