
<?php
include_once 'config.php';

?>

<?php

    $topic = $_POST['topic'];
    $candEmail = $_POST['Attendee-mail'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $password = $_POST['Meet_pwd'];

    $stmt = $conn -> prepare("insert into interview(topic, cand_email, date, time, mPassword)
    values(?,?,?,?,?)");

    $stmt -> bind_param("sssss",$topic, $candEmail, $date, $time, $password);
    $stmt -> execute();

    
    echo "<script>alert('sheduled succesfully...!')</script>";
    header("Location:aViewMeeting.php");

    $stmt-> close();
    $conn ->  close(); 

    
?> 
