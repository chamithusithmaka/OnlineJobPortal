<?php

    // Check if an ID and updated data are provided
    $id = $_POST['id'];
    $email = $_POST['email'];
    $first_Name = $_POST['first_name'];
    $last_Name = $_POST['last_name'];
    $age = $_POST['age'];
    $number = $_POST['phone'];
    $address = $_POST['address'];
    $post_code = $_POST['post_code'];
    $additional_Information = $_POST['additional_information'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'nativecv'); 
if ($conn -> connect_error){
    die('connection failed: ' . $conn -> connect_error);
}


    // Update the record in the database using a prepared statement
    $update_sql = "UPDATE cv SET email=?, first_Name=?, last_Name=?, age=?, phone_Number=?, address=?, post_Code=?, additional_Information=? where cvID= $id";
    $stmt = $conn->prepare($update_sql);
    
    $stmt->bind_param("sssiisis", $email, $first_Name, $last_Name, $age, $number, $address, $post_code, $additional_Information);

    $stmt -> execute();
    $stmt->close();
    $conn -> close();
/*else 
{
    echo "Invalid request.";
}*/
?>
