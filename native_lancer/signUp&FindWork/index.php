<!DOCTYPE html>
<html>
<head>



    <title>registration form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<script>
function validateForm() {
    var fName = document.getElementById("txtFName").value;
    var lName = document.getElementById("txtLName").value;
    var email = document.getElementById("txtEmail").value;
    var pass = document.getElementById("pass").value;
    var cpass = document.getElementById("cpass").value;
    var termsCheckbox = document.getElementById("termsCheckbox");

    if (fName === "" || lName === "" || email === "" || pass === "" || cpass === "") {
        alert("Please fill out all required fields.");
        return false;
    }

    if (pass !== cpass) {
        alert("Password and Confirm Password must match.");
        return false;
    }

    if (!termsCheckbox.checked) {
        alert("You must agree to the terms and conditions.");
        return false;
    }

    return true; // Form submission will proceed if all fields are valid.
}
</script>
    <section>
        <div class="container">

<h2>Sign Up</h2>
    <form action="connect.php" method="POST" id="registrationForm" onsubmit="return validateForm()">

    <label for="fName" class="labal">First Name</label><br>
    <input type="text" name="fName" id="txtFName" class="text"><br>

    <label for="lName" class="labal">Last Name</label><br>
    <input type="text" name="lName" id="txtLName" class="text"><br>

    <label for="email" class="labal">E-mail</label><br>
    <input type="text" name="email" id="txtEmail" class="text"><br>

    <label for="pass" class="labal">Password</label><br>
    <input type="password" name="pass" id="pass" class="text"><br>

    <label for="cpass" class="labal">Confirm Password</label><br>
    <input type="password" name="Cpass" id="cpass" class="text"><br>

    <input type="checkbox" name="terms" id="termsCheckbox">
    <label for="terms" class="labal">I agree to the <a href="">user conditions</a></label><br>

    <button name="signUp" id="btnSignUp" class="button" value="register"><b>Sign Up</b></button>
    <button name="signIn" id="btnSignIn" class="button"><b>Sign In</b></button>
</form>

</div>
    </section>
    <div class="container1">
        <a href="../index.html"> <img src="home1.png" class="img3"></a>
        <img src="titlep.png" class="img"><br>
        <img src="pic1.webp" class="img2">

    </div>
    <section>
        </section>
</body>
</html>