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
	<center>
	<div class="btn-group">
	<a href="employershome.php"><button class="button">Home</button></a>
	<a href="employers.php"><button class="button">Profile</button></a>
	<a href="seekers.php"><button class="button">Seekers</button></a>
	<a href="about.php"><button class="button">About</button></a>
	<a href="index.php"><button class="button">Login</button></a>
    </div>

    </center>


	<div>
	<center>
	<h1><font color="2f3637">POST a</font> <font color="#ee2742">Job</font></h1>
    </center>
    
    </div>
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

    
	<div class="loginPanel">
	<form method="POST" action="postjobServer.php">
	<input type="text2" name=email placeholder="Your login email"><br>
    <input type="text2" name=companyName placeholder="Company Name "><br>
    <input type="text2" name=telephone placeholder="Telephone Number " maxlength=10><br>
	<input type="email" name=companyEmail placeholder="company e-mail"><br>
	
	<select class="select" name="jobCategory">
	<option value="3">HR/Training </option>  
    <option value="0">Banking/Insurance</option>
	<option value="1">Logistic/Warehouse/Transport</option>
	<option value="2">Hospital/Nursing/Healthcare</option>
	<option value="4">Supervision/Quality Control </option>
	<option value="5">Teaching/Academic/Library </option>
	<option value="6">Acounting/Auditing/Finance </option>
	<option value="7">Civil Engineer/Architecture </option>
	<option value="8">Engineer machanicle/Auto/Electical </option>
	<option value="9">Programmers/Designers </option>
	<option value="10">Security </option>
	<option value="11">Legal/Law </option>
	<option value="12">Media/Advert/Communication </option>
	<option value="13">Technicians/Mechanics </option>
	<option value="14">Musicians </option>


	
  	</select>




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