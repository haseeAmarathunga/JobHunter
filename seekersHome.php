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
	<a href="employers.php"><button class="button">EmployersMessage</button></a>
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
	<form method="POST">	
	<h3>Select job Category you Find </h3></font>
	
	</div>
	<div class="container">
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
	<br>
	
	<input type="submit" name="Search" value=Search class="button2">
</form>
	
  	</select>

	
		<h2 class="cat_title"><span id="redlight">Posted</span> Job Vacancies</h2>
		<h3><font face="calibri">Please Remeber the job Number you apply</font><h3>

    <h2>
    <font color="2f3637" face="calibri">
	<?php
	 
		$db = mysqli_connect("localhost","root", "","jobhunter") or 
		die("Error connecting to database");
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			$jobCategory=mysqli_real_escape_string($db,$_POST['jobCategory']);
			//include 'server.php';

			$sql = "SELECT email,companyEmail, companyName, telephone,position,salary
			FROM jobs WHERE category='$jobCategory'";
			$result = $db->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				$emails=array();
				$num=0;
				while($row = $result->fetch_assoc()) {
					echo "job Number : $num";
					echo "<br> Owner Email : ". 
					$row["email"]. " <br>Company Email: ".
					$row["companyEmail"]. " <br>Company Name: ". 
					$row["companyName"]. "<br>Telephone No : " . 
					$row["telephone"] . "<br>Job Position : ".
					$row["position"]. "<br>Salary : Rs." .
					$row["salary"]."<br>" ;
					echo("<button class='button2' onclick=\"location.href='apply.php'\">ApplyNow</button><p>");
					array_push($emails,$row['email']);

					$num=$num+1;
				}
				$messages=$emails;
				$_SESSION["messages"]=$messages;

			} 
			else {
				echo "No job Found";
			}
		}
		
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