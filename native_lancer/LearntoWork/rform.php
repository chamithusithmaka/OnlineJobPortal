<?php

$FullName = $_POST['FullName'];
$UserName = $_POST['UserName'];
$Email = $_POST['Email'];
$ContactNumber = $_POST['ContactNumber'];
$Address = $_POST['Address'];
$CourseName = $_POST['CourseName'];

//database connection sector

$connection =  new mysqli('localhost','root','','Registration form');

if($connection -> connect_error) {
    die('connection failed  : '.$connection->connect_error);
    
}
else{
    $stmt = $connection -> prepare("insert into Registration form(Full Name,User Name , Email,Contact_Number,Address,Course Name)
    values(?,?,?,?,?,?)");

    $stmt -> bind_param("sssssi",$FullName, $UserName, $Email, $ContactNumber, $Address,$CourseName);
    $stmt -> execute();

    $stmt-> close();
    $connection ->close();
}

?>
	