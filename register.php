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
	<a href="home.php"> <img src="image/logo.png"> </a>
	</div>
	<center>
	<div class="btn-group">
	<a href="home.php"><button class="button">Home</button></a>
	<a href="index.php"><button class="button">Seekers</button></a>
	<a href="index.php"><button class="button">Employers</button></a>
	<a href="about.php"><button class="button">About</button></a>
	<a href="index.php"><button class="button">Login</button></a>
	</div>
	</center>

	<div>
	<center>
	<h1><font color="2f3637">SIGNUP to</font> <font color="#ee2742">JobHunter</font></h1>
    </center>
    
    </div>
    
	<div class="loginPanel">
	<form method="POST" action="Reg_server.php">
	<input type="text" name=firstName placeholder="First Name">
    <input type="text" name=lastName placeholder="Last Name"><br>
    <input type="text2" name=nic placeholder="NIC Number" maxlength=10><br>
    <input type="email" name=email placeholder="email"><br>
	<input type="password" name=pass placeholder="password"><br>
    <input type="password" name=pass2 placeholder="Re-Enter"><br>
    <select class="select" name="jobOption">  
    <option value="0">JobEmployer</option>
    <option value="1">JobSeeker</option>
  </select>

	<font color="ff0000">
	</font>
    <br>
    <center>
        <font color="FF0000">
    <?php
		if (isset($_SESSION["error"])){
			$error=$_SESSION["error"];
			echo "<span>$error</span>";
		}
    ?>
    </font>
    </center>
	<center>
	<a href="register.php"><button class="button2"><span>Register</span></button></a>
	
	</center>
</body>
</html>
<?php
	unset($_SESSION["error"]);
?>