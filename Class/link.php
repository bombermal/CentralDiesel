<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "centraldiesel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}

session_start();
?>