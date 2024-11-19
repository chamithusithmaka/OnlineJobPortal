<?php

$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$backup_Code = $_POST['backupCode'];

//database connection sector

$connection =  new mysqli('localhost','root','','native_lancer');

if($connection -> connect_error) {
    die('connection failed  : '.$connection->connect_error);
    
}
else{
    $stmt = $connection -> prepare("insert into native_clubs(firstNmae, lastName, email, gender, password,backup_Code)
    values(?,?,?,?,?,?)");

    $stmt -> bind_param("sssssi",$firstName, $lastName, $email, $gender, $password,$backup_Code);
    

    $stmt -> execute();
    echo '<script>window.location.href = "../native_lancer/native-club/nativeCLUBS_Index.php";</script>';
    $stmt-> close();
    $connection ->  close(); 
}

?> 