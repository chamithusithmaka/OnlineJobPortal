<html>
	<head>
		
		<title>Course add form</title>
		<link rel="stylesheet" type="text/css" href="hedader.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
			integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
			
			
		<link rel="stylesheet"type = "text/css" href="caddstyle.css">
	</head>
	
	<body>
	<nav>
		<ul>
			<a href="..\index.html" class="nav-button"  id="nav-button"><li><i class="fa-solid fa-home"></i></li></a>
			<a href="cremove.php" class="nav-button"  id="nav-button"><li><i class="fa-solid fa-home"></i>Remove course</li></a>
			<a href="display.php" class="nav-button"  id="nav-button"><li><i class="fa-solid fa-home"></i>Display course</li></a>
			<a href="updateWORK.php" class="nav-button"  id="nav-button"><li><i class="fa-solid fa-home"></i>Update course</li></a>
	
	
		</ul>
		</nav>
		<div class="course registration-form">
		  <h1>Add Course Details</h1>
			<form action="cadd.php" method="post">
				<div class = "input box">
					<span class = "details">Course Name</span>
					<p><input type = "text"name="cname" placeholder="Enter Your Course Name" ></p>
				</div>
				<div class = "input box">
					<span class = "details">Course catagory</span>
					<P><input type = "text"name="ccat" placeholder="Enter Course catagory" ></p>
				</div>
				<div class = "input box">
					<span class = "details">Institute name</span>
					<p><input type = "text"name="iname" placeholder="Enter Institute name" ></p>
				</div>
				<div class = "input box">
					<span class = "details">Contact Number</span>
					<p><input type = "text"name="cn" placeholder="Enter Your Contact Number"></p>
				</div>
				<div class = "input box">
					<span class = "details">Address</span>
					<p><input type = "text"name="Address" placeholder="Enter Your Address"></p>
				</div>
				<div class = "input box">
					<span class = "details">Course starting date</span>
					<p><input type = "date"name="cst" placeholder="Enter Course starting date"></p>
				</div>
				<div class = "button">
					<input type = "submit"name="submit"value="ADD">
				</div>
				<br></form>
				
				
				
			
				</div>
	</body>
</html>