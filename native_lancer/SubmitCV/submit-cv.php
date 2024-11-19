<!DOCTYPE html>
<html dir="ltr">
    <head >
        <meta charset="UTF-8" />
        <title>Cv Submission Form</title>
        <link rel="stylesheet" type="text/css" href="hedader.css">
        <link rel="stylesheet" href="cv.css">
         
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        
    </head>
    <body>
<header class="header-sections">
    
<?php
        include '..\contentsHeaderALL\header.php';
        ?>
</header>       <!--header area end-->

<div class="body-section"> 
    <div class="left">
        <!--navigation import-->
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

            <div class="signup">
                <h1 class="signup-title">Submit your cv</h1>
                <form action="cv create.php" method="post" enctype="multipart/form-data" class="cv-form" onsubmit="return validateForm()">
                   <table class="signup-form">
                       <tr>
                           <td><label for="email">Email*:</label><div id="emailError" style="color: red;"></div></td>
                           <td><input type="email" id="email" name="email"></td>
                       </tr>
               
                       <tr>
                           <td><label for="first_name">First Name*:</label><div id="firstNameError" style="color: red;"></div></td>
                           <td><input type="text" id="first_name" name="first_name"></td>
                       </tr>
               
                       <tr>
                           <td><label for="last_name">Last Name*:</label><div id="lastNameError" style="color: red;"></div></td>
                           <td><input type="text" id="last_name" name="last_name"></td>
                       </tr>
               
                       <tr>
                           <td><label for="age">Age*:</label><div id="ageError" style="color: red;"></div></td>
                           <td><input type="tel" id="age" name="age"></td>
                       </tr>
               
                       <tr>
                           <td><label for="phone">Phone Number*:</label><div id="phoneError" style="color: red;"></div></td>
                           <td><input type="tel" id="phone" name="phone"></td>
                       </tr>
               
                       <tr>
                           <td><label for="address">Address*:</label><div id="addressError" style="color: red;"></div></td>
                           <td><input type="text" id="address" name="address"></td>
                       </tr>
               
                       <tr>
                           <td><label for="post-code">Post-Code*:</label><div id="postCodeError" style="color: red;"></div></td>
                           <td><input type="text" id="post-code" name="post_code"></td>
                       </tr>
               
                       <tr>
                           <td><label for="additional_information">Additional Information:</label><div id="additionalInfoError" style="color: red;"></div></td>
                           <td><input type="text" id="additional_information" name="additional_information"></td>
                       </tr>
               
                       <tr>
                           <td><br><label for="cv">Upload CV: </label><div id="cvError" style="color: red;"></div></td>
                           <td><input type="file" id="cv" name="cv" ></td>
                       </tr>
               
                       <tr>
                           <td colspan="2"><input type="submit" value="Submit" class="signup-submit" ></td>
                           </tr>
                   </table>
                </form>
            </div>
               
               <script src="validation.js"></script>
               
               <a href="../submitCV/updateDCv.php"><button type="submit" class="update" name="update">Update</button></a> 
               <a href="../submitCV/updateDCv.php"><button type="submit" class="update" name="delete">Delete</button></a>
               <a href="../submitCV/display.php"><button type="button" class="update">view all</button></a>
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