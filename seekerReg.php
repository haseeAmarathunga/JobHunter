<?php
session_start();
?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="registerStyle.css" >
<head>
	<title>JobHunter</title>
</head>
<body>
	<div class="logo">
	<img src="image/logo.png">
	</div>
	<div>
	<center>
	<h1><font color="2f3637">POST a</font> <font color="#ee2742">Job</font></h1>
    </center>
    
    </div>
    
	<div class="loginPanel">
	<form method="POST" action="connector.php">
    <input type="text2" name=companyName placeholder="Company Name "><br>
    <input type="text2" name=telephone placeholder="Telephone Number "><br>
    <input type="email" name=companyEmail placeholder="company e-mail"><br>
    <input type="text" name=salary placeholder="Salary Range "><br>
    <input type="text2" name=position placeholder="Job Potision"><br>

    <select class="select" name="jobtype">  
    <option value="0">Full time</option>
    <option value="1">Part time</option>
    <option value="2">Internship</option>
  </select>
   <input type="text2" name=website placeholder="Website Link"><br>

	<font color="ff0000">
	</font>
    <br>
    <center>
        <font color="FF0000">
    
    </font>
    </center>
	<center>
	<a href="register.php"><button class="button2"><span>Next</span></button></a></center>
	
	</center>
</body>
</html>
<?php
	unset($_SESSION["error"]);
?>