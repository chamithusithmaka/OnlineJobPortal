<?php
    
    $id = $_POST['id_topic'];

    $conn = new PDO('mysql:host=localhost; dbname=native_lancer', 'root', '');
    
    $del = $conn->prepare("DELETE FROM interview WHERE invID = :id OR topic = :id");

    // sanitized value

    $del->bindParam(':id', $id, PDO::PARAM_STR);

    $del->execute();


    if ($del->rowCount() > 0) {
        echo "<script>alert('User Account Deleted');</script>";
        echo '<script>window.location.href = "aViewMeeting.php";</script>';
    } else {
        echo "No matching data found.";
    }
    
    
?>
