<?php

require_once 'config.php';




if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $stmt = $conn->prepare("DELETE FROM adv WHERE id = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            
            header("Location: showads.php");
            exit();
        } else {
            echo "Error deleting record: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Are you sure you want to delete this record?<br>";
        echo "<form method='POST'>";
        echo "<input type='submit' value='Yes, Delete'>";
        echo "</form>";
    }
}

$conn->close();
?>
