<?php


//database connection sector

$conn =  new mysqli('localhost','root','','nativecv');

if($conn -> connect_error) {
    die('connection failed  : '.$conn->connect_error);
    
}


else{
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $post = $_POST['post_code'];
    $add = $_POST['additional_information'];
    
    $stmt = $conn -> prepare("insert into cv(email, first_Name, last_Name, age, phone_Number,address,post_Code,additional_Information)
    values(?,?,?,?,?,?,?,?)");

    $stmt -> bind_param("sssiisis", $email, $first_name, $last_name, $age, $phone,$address ,$post, $add);
    $stmt -> execute();

    header("location:display.php");

    $stmt-> close();
    $conn -> close(); 
}

?>