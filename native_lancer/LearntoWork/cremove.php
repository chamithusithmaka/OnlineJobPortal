<html>
	<head>
		
		<title>Course remove form</title>
		<link rel="stylesheet"type = "text/css" href="crstyle.css">
	</head>
	
	<body>
		<div class="course registration-form">
		  <h1>Remove Course</h1>
			<form action="delete.php" method="post">
				<div class = "input box">
					<span class = "details">Course Name</span>
					<p><input type = "text" placeholder="Enter Your Course Name" required></p>
				</div>
				<div class = "input box">
					<span class = "details">Course ID</span>
					<P><input type = "text"name="cid" placeholder="Enter Course ID" required></p>
				</div>
				<div class = "input box">
					<span class = "details">Course catogery</span>
					<p><input type = "text" placeholder="Enter Course catogery" required></p>
				</div>
				<div class = "input box">
					<span class = "details">Reason</span>
					<p><input type = "text" placeholder="Enter The Reason For Removing The Course" required></p>
				</div>
				
				<div class = "button">
					<input type = "submit"name="submit"value="SUBMIT">
				</div>
				
				
				</div>
				</form>
	</body>
</html>