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
	<a href="home.php"> <img src="image/logo.png"> </a></div>
	
	<div>
	<center>
	<h1><font color="2f3637">Welcome to</font> <font color="#ee2742">JobHunter</font></h1>
	<br>
	
	</center>


	</div>
	
	<!--
	<a href="home.php"><img src="image/home.png"></a>
	<a href="employers.php"><img src="image/employers.png"></a>
	<a href="vacancy.php"><img src="image/vacancy.png"></a>
	<a href="about.php"><img src="image/about.png"></a>
	-->
	<center>
	<div class="btn-group">
	<a href="seekershome.php"><button class="button">Home</button></a>
	<a href="seekers.php"><button class="button">Seekers</button></a>
	<a href="employers.php"><button class="button">Employers</button></a>
	<a href="about.php"><button class="button">About</button></a>
	<p>
    <center>	
	<div>
		<font color="ff0000">
	<?php
		if (isset($_SESSION["error"])){
			$error=$_SESSION["error"];
			echo "<span>$error</span>";
		}
	?>
	</font>
	</div>
	</center>
    <p>
    </div>
   <div class="loginPanel">
	<form method="POST" action="postseeker.php">
    <input type="text2" name=jobNum placeholder="job Number (You clicked)"><br>
	<input type="text2" name=fullName placeholder="Full Name"><br>
    <input type="text2" name=nic placeholder="NIC" maxlength=10><br>
    <input type="text2" name=address placeholder="Address "><br>
    <input type="text2" name=mobile placeholder="Mobile Number " maxlength=10><br>
	<input type="email" name=email placeholder="e-mail"><br>

    <select class="select" name="gender">  
    <option value="0">Male</option>
    <option value="1">Female</option>

  </select>
  <input type="text" name=age placeholder="Age"><br>

   <textarea rows=4 cols=39 name=experiance placeholder="Working Experiance & Describe who are you?"
   maxlength=250></textarea><br>
   

	<font color="ff0000">
	</font>
    <br>
    <center>
        <font color="FF0000">
    
    </font>
    </center>
	<center>
	<a href="postseeker.php"><button class="button2"><span>Apply</span></button></a></center>
	</form>

	</center>






    </center>


</body>
</html>