<?php
    require 'config.php';

?>
<?php

if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $birth = $_POST["birth"];
    $email = $_POST["email"];
    $cno = $_POST["cno"];
    $Address = $_POST["Address"];
    $cname = $_POST["cname"];

    $sql= "INSERT INTO userregistration(userid,FullName,DateOfBirth,Email,ContactNumber,Address,CourseName) VALUES('','$fname','$birth','$email','$cno','$Address','$cname')" ;
    if($conn->query($sql)){
      echo "<script>alert(' Registration success ');</script>";
      echo '<script>window.location.href = "cadd.html";</script>';
    }

    else{
      echo "Error: ". $conn->error;
    }
  }
?>