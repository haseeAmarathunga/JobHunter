<?php
session_start();
?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css" >
<head>
	<title>JobHunter</title>
</head>
<body>
	<div class="logo">
	<img src="image/logo.png">
	</div>
	<div>
	<center>
	<h1><font color="2f3637">Welcome to</font> <font color="#ee2742">JobHunter</font></h1>
	</center>
	</div>
	<div class="loginPanel">
	<form method="POST" action="server.php">
	<input type="text" name=username placeholder="username"><br>
	<input type="password" name=password placeholder="password"><br>
	<font color="ff0000">
	<?php
		if (isset($_SESSION["error"])){
			$error=$_SESSION["error"];
			echo "<span>$error</span>";
		}
	?>
	</font>
	<br>
	<center>
	
	<input type="image" value="submit" src="image/login.png" alt="submit" /><br>
	
	<br>
	<font color="ccccff">New To Job Hunter.</font><br>
	
	</center>
	</form>
	</div>
	<center>
	<a href="register.php"><button class="button2"><span>Register>></span></button></a></center>
	
	
</body>
</html>
<?php
	unset($_SESSION["error"]);
?>
