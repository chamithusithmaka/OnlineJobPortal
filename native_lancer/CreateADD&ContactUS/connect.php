<?php
$firstname = $_POST['fname'];
$email = $_POST['email'];
$message = $_POST['message'];

// Database connection
$connection = new mysqli('localhost', 'root', '', 'native_lancer');
if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}

$stmt = $connection->prepare("INSERT INTO contact (firstname, email, message) VALUES (?, ?, ?)");

if ($stmt === false) {
    die('Prepare failed: ' . $connection->error);
}

$stmt->bind_param("sss", $firstname, $email, $message);

if ($stmt->execute()) {
    echo "Data inserted successfully!";
    header("location:contactusNew.php");
} else {
    die('Execute failed: ' . $stmt->error);
}

$connection->close();
?>