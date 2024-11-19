<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {

    border: 1px solid #ddd;
}
tr:hover {background-color: #72F0F0;}

th {
  background-color: #04AA6D;
  color: white;
}
th, td {
    padding: 10px;
    text-align: left;
}

a {
    text-decoration: none;
    padding: 8px 20px;
    background-color: #007bff;
    color: #fff;
    border-radius: 5px;
}

    a:hover {
        background-color: purple;
    }
body {
    font-family: Arial, sans-serif;
    background-image: linear-gradient(180deg, #72F0F0, #ECEDED);
    
  
}

h2 {
    background-image: linear-gradient(180deg, #1422F8, #4F5AFC);
    color: #fff;
    padding: 10px;
    text-align: center;
}

form {

    max-width: 500px;
    margin: 20px auto;
    padding: 20px;
    background-color:#9DB9EC;
 
    box-shadow: 0px 0px 20px rgb(0 0 0);
}

input[type="text"],
textarea {
    width: 470px;
    padding: 10px;
    margin: 5px 0;
    border:none;
    border-bottom: 2px solid red;
    border-radius: 5px;
  
}

input[type="submit"] {
    background-color: orangered;
    color: white;
    border: none;
    width:200px;
    height:50px;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
}

    input[type="submit"]:hover {
        background-color: red;
    }


table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: left;
}

a {
    text-decoration: none;
    padding: 8px 20px;
    background-color: #007bff;
    color: #fff;
    border-radius: 5px;
}

    a:hover {
        background-color: red;
    }

</style>



    <title>CRUD Operation</title>
</head>
<body>

<br>
<a href="findwork.php">back</a><br><br>

<?php
$conn = new mysqli('localhost', 'root', '', 'native_lancer');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    $delete_sql = "DELETE FROM crud WHERE id = ?";
    $stmt = $conn->prepare($delete_sql);
    $stmt->bind_param("i", $delete_id);

    if ($stmt->execute()) {
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$sql = "SELECT * FROM crud";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Name</th><th>Job Title</th><th>Job Description</th><th>Email</th><th>Contact Number</th><th>Company Name</th><th>Salary</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['job_title'] . "</td>";
        echo "<td>" . $row['job_description'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['contact_number'] . "</td>";
        echo "<td>" . $row['company_name'] . "</td>";
        echo "<td>" . $row['salary'] . "</td>";        echo "<td><a href='delete.php?id=" . $row['id'] . "'>Update</a> | <a href='delete.php?delete_id=" . $row['id'] . "'>Delete</a></td>";
        echo "</tr>";

    }
    echo "</table>";
} 
$conn->close();
?>


<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $conn = new mysqli('localhost', 'root', '', 'native_lancer');
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    $sql = "SELECT * FROM crud WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        ?>
        <h2>Update job details</h2>
        <form method="post" action="update_process.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
            Job Title: <input type="text" name="job_title" value="<?php echo $row['job_title']; ?>"><br>
            Job Description: <textarea name="job_description"><?php echo $row['job_description']; ?></textarea><br>
            Email: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
            Contact Number: <input type="text" name="contact_number" value="<?php echo $row['contact_number']; ?>"><br>
            Company Name: <input type="text" name="company_name" value="<?php echo $row['company_name']; ?>"><br>
            Salary: <input type="text" name="salary" value="<?php echo $row['salary']; ?>"><br>
            <input type="submit" value="Update">
        </form>
        <?php
    } else {
        echo "Record not found.";
    }

    $stmt->close();
    $conn->close();
} 





?>
</body>
</html>


