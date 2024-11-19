 <?php
$connect = new PDO('mysql:host=localhost; dbname=native_lancer', 'root', '');

$id = $_POST['invEdit_ID'];
$topic = $_POST['topic']; 
$cMail = $_POST['Attendee_mail'];
$date = $_POST['date'];
$time = $_POST['time'];
$pass = $_POST['Meet_pwd'];

$query = "UPDATE interview SET topic = :topic, cand_email = :cMail, date = :date, time = :time, mPassword = :pass WHERE invID = :id OR topic = :id";

$run = $connect->prepare($query);

// sanitized value var
$run->  bindValue(':id', $id);
$run->  bindValue(':topic', $topic);
$run->  bindValue(':cMail', $cMail);
$run->  bindValue(':date', $date);
$run->  bindValue(':time', $time);
$run->  bindValue(':pass', $pass);


//excuting sql quary
$run->execute();

echo "<script>alert('Updated succesfully...!')</script>";
header("Location:aViewMeeting.php");

?>