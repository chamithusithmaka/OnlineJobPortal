<?php
$servername = "localhost";
$username = "root";
$password = "''";
$database = "native_lancer";

// Create a connection to the database
$conn = new mysqli("localhost","root","", "native_lancer");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
