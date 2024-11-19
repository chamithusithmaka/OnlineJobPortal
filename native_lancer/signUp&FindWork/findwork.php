<!DOCTYPE html>
<html dir="ltr">
    <head >
        <meta charset="utf-8">
        <title>Find Work</title>
        <link rel="stylesheet" type="text/css" href="hedader.css">
        <link rel="stylesheet" type="text/css" href="findwork1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        
        <style>

    .job-entry {
        border: 1px solid #ccc;
        padding: 20px;
        margin: 20px;
        width: 550px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        background-color: #E9EEE5;
    }
    .job-entry h2 {
        font-size: 25px;
        margin: 0;
    }

    .job-entry p {
        margin: 7px 0;
    }

    .jobs a {
        text-decoration: none;
        color: red;
        margin-top: 10px;
        display: block;
    }

     .jobs a:hover {
        text-decoration: underline;
    }
</style>
    <script>
    function validateForm() {
    var name = document.getElementById("name").value;
    var jobTitle = document.getElementById("job_title").value;
    var jobDescription = document.getElementById("job_description").value;
    var email = document.getElementById("email").value;
    var contactNumber = document.getElementById("contact_number").value;
    var companyName = document.getElementById("company_name").value;
    var salary = document.getElementById("salary").value;

    if (
        name === "" ||
        jobTitle === "" ||
        jobDescription === "" ||
        email === "" ||
        contactNumber === "" ||
        companyName === "" ||
        salary === ""
    ) {
        alert("Please fill out all required fields.");
        return false;
    }

    return true; // Form submission will proceed if all fields are filled out.
}
</script>




    </head>
    <body>
<header class="header-sections">
    
<?php
        include '..\contentsHeaderALL\header.php';
        ?>
</header>       <!--header area end-->

<div class="body-section"> 
    <div class="left">
    <?php
        include '..\nav\nav.php';
        ?>

            <!--navigation panel end-->
    </div>
    <div class="right">
        <div class="select-area">
            <!--separate body upper area from body -->

                <!--if any headers-->
        </div>

        <div class="content-area">




            <!--add content here-->
            <table><tr>
    <td>
        <div class="box">
            <div class="center-form">
                <h1 class="form-title">Create Job Listing</h1>
                <form id="jobListingForm" action="connect.php" method="POST" onsubmit="return validateForm()">
                    <label for="name" class="form-label">Name:</label><br>
                    <input type="text" id="name" name="name" class="form-input" ><br>

                    <label for="job_title" class="form-label">Job Title:</label><br>
                    <input type="text" id="job_title" name="job_title" class="form-input" ><br>

                    <label for="job_description" class="form-label">Job Description:</label><br>
                    <textarea id="job_description" name="job_description" class="form-textarea" ></textarea><br>

                    <label for="email" class="form-label">Email:</label><br>
                    <input type="email" id="email" name="email" class="form-input" ><br>

                    <label for="contact_number" class="form-label">Contact Number:</label><br>
                    <input type="tel" id="contact_number" name="contact_number" class="form-input" ><br>

                    <label for="company_name" class="form-label">Company Name:</label><br>
                    <input type="text" id="company_name" name="company_name" class="form-input" ><br>

                    <label for="salary" class="form-label">Salary:</label><br>
                    <input type="text" id="salary" name="salary" class="form-input" ><br>

                    <input type="submit" value="Submit" class="form-button" name="Submit",value="register">
                    <input type="reset" value="Clear" class="form-button">
                </form>
            </div>
    </td>
    </div>
        </td>
    <div class="jobs">
    <?php
    $conn = new mysqli('localhost', 'root', '', 'native_lancer');
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    $sql = "SELECT * FROM crud";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='job-entry'>";
            echo "<h2>Job Title: " . $row['job_title'] . "</h2>";
            echo "<p>Name: " . $row['name'] . "</p>";
            echo "<p>Job Description: " . $row['job_description'] . "</p>";
            echo "<p>Email: " . $row['email'] . "</p>";
            echo "<p>Contact Number: " . $row['contact_number'] . "</p>";
            echo "<p>Company Name: " . $row['company_name'] . "</p>";
            echo "<p>Salary: " . $row['salary'] . "</p>";
            echo "</div>";

echo "<a href='delete.php?id=" . $row['id'] . "'>Edit</a>";

        }
    } 
    $conn->close();
    ?>
</div>
        </td>
</tr>
            </table>



            <!--content end-->
        </div>

    </div>


</div>

                                                                    <!--footer area-->
<footer>
    <div  class="footer-layout">
        <div class="footer-1">
            <div class="footer-1-1">
                <h4 class="footer-header">Need Help?</h4>
                <ul class="footer-ul">
                    <a  class="footer-a" href=""> <li>how to post job </li></a> 
                    <a  class="footer-a" href=""> <li>enable alerts</li></a>    
                    <a  class="footer-a" href=""><li> create a cv</li></a>      
                    <a class="footer-a" href=""> <li>how to find job </li></a>  
                    <a class="footer-a" href=""> <li>request agent </li></a>    
                    <a  class="footer-a" href=""> <li> Talant marketplace</li></a>
                    <a  class="footer-a" href=""><li>find companies</li></a>    
                    <a  class="footer-a" href=""><li>find interviewer</li></a>  
                    <a  class="footer-a" href=""><li>Native Lancer clubs</li></a>

                    </ul>
            </div>

            <div class="footer-1-2">
                <h4 class="footer-header">about us</h4>
                <p class="footer-p"> Wellcom to Native lancer.com! our target is to Connect job seekers with their dream jobs and
                also help to find the right talent for employers and their organizations. <br/>
                We understand that finding the right job can be a daunting task, and that's why we're here to help. 
                Job opportunities across various 
                industries and locations are offers by our platform.<br/>
                Our Native lancer team is dedicated to ensuring that our platform is always up-to-date and user-friendly, 
                and we are constantly working to 
                improve our services to meet the evolving needs of the job market. <br/>
                <a href="#">For more...</a>
                    </p>
                
            </div>
            <div class="footer-1-3">
                <h4 class="footer-header">Job Seekers</h4>
                <ul class="footer-ul">
                    <a class="footer-a" href=""><li> how to find job </li></a>
                    <a  class="footer-a" href=""> <li>create a cv</li></a>
                    <a  class="footer-a" href=""><li>about jobs</li></a>
                    <a class="footer-a" href=""> <li>how to find job </li></a>
                    <a  class="footer-a" href=""> <li>contact a employer</li></a>
                    <a  class="footer-a" href=""><li>request help agent</li></a>
                    <a  class="footer-a" href=""><li>apply for native lancer clubs</li></a>

                </ul>
                
            </div>
        </div>
        <div class="footer-2">
            <i class="fa fa-facebook"></i><i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i><i class="fa fa-globe"></i>
        </div>
        <div  class="footer-3">
        <a href="../index.html">return to home page</a>
        </div>

    </div>

</footer>
</body>
</html>
