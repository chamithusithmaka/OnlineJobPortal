<html>
	<head>
		
		<title>registration form</title>
		<link rel="stylesheet"type = "text/css" href="regform style.css">
		<script src="rstyle.java"></script>
	</head>
	
	<body>
		<div class="registration-form">
		  <h1>Registration Form</h1>
			<form action="register.php" method="post">
				<div class = "input box">
					<span class = "details">Full Name</span>
					<p><input type = "text"name="fname" placeholder="Enter Your Full Name" ></p>
				</div>
				<div class = "input box">
					<span class = "details">Date Of Birth</span>
					<P><input type = "date" name="birth" placeholder="Enter Birth Date" ></p>
				</div>
				<div class = "input box">
					<span class = "details">Email</span>
					<p><input type = "text"name="email" placeholder="Enter Your Email" ></p>
				</div>
				<div class = "input box">
					<span class = "details">Contact Number</span>
					<p><input type = "text"name="cno" placeholder="Enter Your Contact Number" ></p>
				</div>
				<div class = "input box">
					<span class = "details">Address</span>
					<p><input type = "text"name="Address" placeholder="Enter Your Address" ></p>
				</div>
				<div class = "input box">
					<span class = "details">Course Name</span>
					<p><input type = "text"name="cname" placeholder="Enter Course Name" ></p>
				</div>
				<div class = "button">
					<input type = "submit"name="submit" value="APPLY">
				</div>
				</div>
			</form>
			<script>

</script>
	</body>
</html>