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
	<a href="seekersProfile.php"><button class="button">profile</button></a>
	<a href="employers.php"><button class="button">employersMessage</button></a>
	<a href="index.php"><button class="button">Login</button></a>
	<br>
	<h3><font color="#ee2742">Hellow</font>
	<font color="2f3637">
	<?php
		if (isset($_SESSION["message"])){
			$message=$_SESSION["message"];
			echo "<span>$message</span>";
		}
	?>
	</h3>
	</font>
	
	</div>
	<div class="container">
	
		<h2 class="cat_title"><span id="redlight">Employers</span> Messages</h2>

    <h2>
    <font color="2f3637" face="calibri">
	<?php
	 
		$db = mysqli_connect("localhost","root", "","jobhunter") or 
        die("Error connecting to database");
		//if($_SERVER["REQUEST_METHOD"] == "POST") {
			//include 'server.php';

			$sql = "SELECT status,description,company
			  FROM messages WHERE email='$message'";
			$result = $db->query($sql);
            
			if ($result->num_rows > 0) {
                // output data of each row
				while($row = $result->fetch_assoc()) {
                    echo "<br>From : ".
                    $row["company"]."<br>You are ". 
					$row["status"]. " <br>". 
					$row["description"]."<br>" ;
				}
			} 
			else {
				echo "No Messages";
			}
		//}
		
		$db->close();
	?>

</font>
	</h2>
	</div>


	</center>
	
	
	
	
	
</body>
</html>

<?php
	unset($_SESSION["error"]);
?>