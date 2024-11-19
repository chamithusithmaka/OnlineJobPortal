<?php

//forms data name import


//db connection var

$servername = "localhost";
$username = "root";
$dbPassword = "";
$DB = "native_lancer";

// Create connection

$conn = new mysqli($servername, $username, $dbPassword,$DB);
// Check connection


if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

?>

