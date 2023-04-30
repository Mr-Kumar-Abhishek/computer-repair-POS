<?php 

include_once("debugger.php");

// Database connection
$servername = "localhost";
$username = "root";
$password = "leptonification";
$dbname = "laptop_world";

// Create connection
$conn = new mysqli ($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
