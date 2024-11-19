<?php
    require 'config.php';

?>
<?php

if(isset($_POST["submit"])){
    $cname = $_POST["cname"];
    $ccat = $_POST["ccat"];
    $iname = $_POST["iname"];
    $cn = $_POST["cn"];
    $address = $_POST["Address"];
    $cst = $_POST["cst"];

    $sql= "INSERT INTO cregister(register_id ,CourseName,Coursecatagory,Institutename,ContactNumber,Address,Coursestartingdate) VALUES('','$cname','$ccat','$iname','$cn','$address','$cst')" ;
    if($conn->query($sql)){
      echo "<script>alert('Course Registration success ');</script>";
      
    }

    else{
      echo "Error: ". $conn->error;
    }
    $sql2 = "SELECT register_id FROM cregister ORDER BY register_id DESC LIMIT 1";
    $result = $conn->query($sql2);
    if ($result) { 
      $row = $result->fetch_assoc();
       $registerId = $row['register_id'];
    if ($registerId !== null) {  
      echo "<script>alert('Your register id is $registerId');</script>";
    } 
    else { 
      echo "No records found.";
    } }
     else {
       echo "Error executing the query: " . $conn->error; } 
  }
?>