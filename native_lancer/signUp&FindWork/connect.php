<?php
	$firstname = $_POST['fName'];
	$lastname = $_POST['lName'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	
	$conn=new mysqli('localhost','root','','native_lancer'); 
	if($conn->connect_error){
		die('connection failed : '.$conn->connect_error);
	}else {
	$stmt = $conn->prepare("insert into registration(firstname,lastname,email,password)values(?,?,?,?)");
}
$stmt->bind_param("ssss",$firstname,$lastname,$email,$password);
$stmt->execute();
  header('Location: index.php');
echo"registration successfully...";
$conn->close();
?>




<?php
$name=$_POST['name'];
$job_title=$_POST['job_title'];
$job_description=$_POST['job_description'];
$email=$_POST['email'];
$contact_number=$_POST['contact_number'];
$company_name=$_POST['company_name'];
$salary=$_POST['salary'];

$conn = new mysqli('localhost','root','','native_lancer');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into crud(name,job_title,job_description,email,contact_number,company_name,salary)values(?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssisi",$name,$job_title,$job_description,$email,$contact_number,$company_name,$salary);
    $stmt->execute();
      header('Location: findwork.php');

    $stmt->close();
    $conn->close();
}
?>




