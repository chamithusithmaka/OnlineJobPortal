<?php
// Include the configuration file to set up the database connection
include_once 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
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

    // Check if the database connection is successful
    if ($conn->connect_error) {
        die('Connection to the database failed: ' . $conn->connect_error);
    }

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO adv (job_name, job_description, email, contact_no, job_type, date, company_name, company_email, company_address, company_description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if ($stmt === false) {
        die('Prepare failed: ' . $conn->error);
    }

    // Bind the parameters
    $stmt->bind_param("sssissssss", $job_name, $job_description, $email, $contact_no, $job_type, $date, $cname, $cmail, $cadd, $cdes);

    // Execute the query
    if ($stmt->execute()) {
        echo "Data inserted successfully!";
    } else {
        die('Execute failed: ' . $stmt->error);
    }

    // Close the statement and the database connection
    $stmt->close();
    $conn->close();
    header("Location: createAdvNew.html");
} else {
    echo "Form not submitted. Please submit the form.";
}
?>
