<html>
<head>
	<title>PHP Form Design</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link rel = "shortcut icon" type = "image/png"  href = "images/favicon.png">
</head>
<body>
		<div id = "main">
			<hr>
			<?php
			//Pull links from the nav.php page and places them in the navigation bar div
			require("nav.php")//'require' is 100% needed fpr tje sote tp rim
			?>
			<br><br><hr>
			<?php
			//Get the connection to the data base in phpMyAdmin
				require_once("13dit_iterationproject_MJessil_mysqli.php");
			?>
<br>
	
<!-- Add my Notepad++ form.html code here... -->		

			
		<div class = "logo">
			
			<!--<a href ="index.php">
				<img src = "images/logo.png" width = "140px" height = "140px" >
			</a>-->
			<h3> Contact Us! </h3>
		</div>
			
			
	<!-- Form -->
	<div class = "contact_container">
		<form action ="connect.php" method="post">
	
		<!-- Name Field -->

		<div class ="row">
	
			<div class ="column">
				<input type ="text" id="name" name="name" placeholder ="Your First Name">
			</div> 
		</div>
			
		<!-- Email Field -->
	
		<div class = "row">
	
			<div class = "column">
				<input type = "text" id="email" name="email" placeholder = " Your Email Address">
			</div>
		</div>
	
		<!-- Subject Field -->
		
		<div class = "row">
		
		<div class ="column">
		<textarea	 id ="message" name="message" placeholder="Enter Your Message" style="height:200px"></textarea>
			</div>
		</div>
		
		
		<br>
		<!-- Submit Field -->
		
		<div class = "row">
			<input type="submit" value ="Submit">
			</div>
	
			</form>
	
	
		
	</div>
		<!-- copyright statement -->
		<hr>	
		<div id ="footer">
			<h2>&copy; Copyright Melvin Jessil, all rights reserved, Tawa College 2023</h2>
		</div>
			
	<body>
<html>
		