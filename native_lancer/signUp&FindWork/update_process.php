<?php
if (isset($_POST['id'], $_POST['name'], $_POST['job_title'], $_POST['job_description'], $_POST['email'], $_POST['contact_number'], $_POST['company_name'], $_POST['salary'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $job_title = $_POST['job_title'];
    $job_description = $_POST['job_description'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $company_name = $_POST['company_name'];
    $salary = $_POST['salary'];

    $conn = new mysqli('localhost', 'root', '', 'native_lancer');
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    $update_sql = "UPDATE crud SET name=?, job_title=?, job_description=?, email=?, contact_number=?, company_name=?, salary=? WHERE id=?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("ssssisii", $name, $job_title, $job_description, $email, $contact_number, $company_name, $salary, $id);

    if ($stmt->execute()) 
  header('Location: delete.php');

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
