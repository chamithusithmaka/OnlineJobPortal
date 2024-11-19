<?php
$connect = new PDO('mysql:host=localhost; dbname=native_lancer', 'root', '');

$id = $_POST['id'];
$fname = $_POST['fname'];
$birth = $_POST['birth']; 
$mail = $_POST['email'];
$cNo = $_POST['cno'];
$address = $_POST['Address'];
$cname = $_POST['cname'];

$query = "UPDATE userregistration SET FullName = :fname, DateOfBirth = :birth, Email = :email, ContactNumber = :cno, Address = :address, CourseName = :cname WHERE userid = :id";

$run = $connect->prepare($query);

$run->bindValue(':id', $id);
$run->bindValue(':fname', $fname);
$run->bindValue(':birth', $birth);
$run->bindValue(':email', $mail); // corrected parameter name
$run->bindValue(':cno', $cNo); // corrected parameter name
$run->bindValue(':address', $address);
$run->bindValue(':cname', $cname);

// Execute the query
$run->execute();

header("location:display.php");
?>