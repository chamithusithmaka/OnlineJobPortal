<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $adId = $_POST['id'];
    $job_name = $_POST['jname'];
    $job_description = $_POST['jdescription'];
    $email = $_POST['email'];
    $contact_no = $_POST['phone'];
    $job_type = $_POST['JobType'];
    $date = $_POST['date'];
    $cname = $_POST['cname'];
    $cmail = $_POST['company_email'];
    $cadd = $_POST['address'];
    $cdes = $_POST['cdescription'];

   
    $connection = new mysqli('localhost', 'root', '', 'native_lancer');
    if ($connection->connect_error) {
        die('Connection failed: ' . $connection->connect_error);
    }

    
    $sql = "UPDATE adv SET 
        job_name = '$job_name',
        job_description = '$job_description',
        email = '$email',
        contact_no = '$contact_no',
        job_type = '$job_type',
        date = '$date',
        company_name = '$cname',
        company_email = '$cmail',
        company_address = '$cadd',
        company_description = '$cdes'
        WHERE id = $adId";

    if ($connection->query($sql) === TRUE) {
        
        header("Location: showads.php");
    } else {
        echo "Error updating advertisement: " . $connection->error;
    }

    $connection->close();
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="editads.css">

    <title>Edit Job Advertisement</title>
</head>
<body>
    <h1>Edit Job Advertisement</h1>

    <?php
    if (isset($_GET['id'])) {
        $connection = new mysqli('localhost', 'root', '', 'native_lancer');
        if ($connection->connect_error) {
            die('Connection failed: ' . $connection->connect_error);
        }

        $adId = $_GET['id'];
        $result = $connection->query("SELECT * FROM adv WHERE id = $adId");

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
            <form action="edit.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label for="jname">Job Name:</label>
                <input type="text" name="jname" value="<?php echo $row['job_name']; ?>"><br>

                <label for="jdescription">Job Description:</label>
                <textarea name="jdescription"><?php echo $row['job_description']; ?></textarea><br>

                <label for="email">Email:</label>
                <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>

                <label for="phone">Contact No:</label>
                <input type="text" name="phone" value="<?php echo $row['contact_no']; ?>"><br>

                <label for="JobType">Job Type:</label>
                <input type="text" name="JobType" value="<?php echo $row['job_type']; ?>"><br>

                <label for="date">Date:</label>
                <input type="text" name="date" value="<?php echo $row['date']; ?>"><br>

                <label for="cname">Company Name:</label>
                <input type="text" name="cname" value="<?php echo $row['company_name']; ?>"><br>

                <label for="company_email">Company Email:</label>
                <input type="text" name="company_email" value="<?php echo $row['company_email']; ?>"><br>

                <label for="address">Company Address:</label>
                <input type="text" name="address" value="<?php echo $row['company_address']; ?>"><br>

                <label for="cdescription">Company Description:</label>
                <textarea name="cdescription"><?php echo $row['company_description']; ?></textarea><br>

                <button type="submit">Update Advertisement</button>
                <a href="showads.php"><button class = "btn">Back</button></a>
            </form>
            
            <?php
        } else {
            echo "Advertisement not found.";
        }

        $connection->close();
    } else {
        echo "Advertisement ID not provided.";
    }
    ?>
</body>
</html>
