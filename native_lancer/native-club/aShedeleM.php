<!DOCTYPE html>
<html dir="ltr">
    <head >
        <meta charset="utf-8">
        <title>Shedule interviews</title>
        <link rel="stylesheet" type="text/css" href="contentCRUD.css">

        
        <link rel="stylesheet" type="text/css" href="../header,nav&footer/headerFooter.css">
        <script src="../native-club/validationForm1.js"></script>
        <script src="../native-club/scheduleMValid.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        

            
    </head>
    <body>
        <!--include header into html-->
    <?php 
        include_once 'bHeader.php';
    ?>
      <!--header area end-->

<div class="body-section"> 
    <div class="left">
        <!--nav panel import -->
        <?php 
            include_once 'bNavBar.php';
    ?>
            <!--navigation panel end-->

    </div>
    <div class="right">
        <div class="select-area">
            <!--separate body upper area from body -->
                <!--if any headers-->
        </div>

        <div class="content-area-sD">
            
            <form method="POST" class="interview-form" id="create-intv" action="aShedelePHP.php">
                <fieldset>
                <legend class="intew-legend">
                    Shedule an interview
                </legend>
                <label for="topic">Topic       : </label>  
                    <input type="text" name="topic" id="topic" placeholder="meeting topic" required >  <br>

                <label for="Attendee-mail">Attendees Email  :</label>
                    <input type="email" name="Attendee-mail" id="Attendee-mail" placeholder="example@nativeL.com" required><br>
      
                <label for="date&T">interview Date        :</label>
                    <input type="date" name="date" id="date" placeholder="d / m / y " required><br/>
                <label for="date&T">interview Date        :</label>
                    <input type="time" name="time" id="Time" placeholder="H:M" required> <br/>

                <label for="Meet_pwd">Create a meeting password : </label>
                    <input type="password" name="Meet_pwd" id="Meet_pwd" placeholder="000000" required><br>
                

                <button type="submit" class="intwS-submit" id="intew-Sch-Submit" onclick="valid()">Shedule</button>
                <button type="reset" class="club-reset" id="reset">Cancel</button>
            </fieldset>
            
        </form>
        
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
            <a href="index.html">return to home page</a>
        </div>

    </div>

</footer>
</body>
</html>