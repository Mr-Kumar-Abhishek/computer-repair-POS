<?php
include_once("debugger.php");


// Get form data
$name = $_POST ["name"];
$email = $_POST ["email"];

// Insert data into database
$sql = "INSERT INTO super_admin (username, email) VALUES ('$name', '$email')";

if ($conn->query ($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close ();
?>