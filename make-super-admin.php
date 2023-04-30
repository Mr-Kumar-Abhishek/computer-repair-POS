<?php
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

// Get form data
$name = $_POST ["name"];
$email = $_POST ["email"];

// Insert data into database
$sql = "INSERT INTO super_admin (name, email) VALUES ('$name', '$email')";

if ($conn->query ($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close ();
?>