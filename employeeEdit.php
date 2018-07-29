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
<body background="image/4.jpg">

	<div class="logo">
	<a href="home.php"> <img src="image/logo.png"> </a></div>
	
	<div>
	<center>
	<h1><font color="2f3637">Edit/Delete</font> <font color="#ee2742">Employee</font></h1>
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
	<a href="adminHome.php"><button class="button">Home</button></a>
	<a href="seekerEdit.php"><button class="button">Seekers</button></a>
	<a href="employeeEdit.php"><button class="button">Employers</button></a>
	<a href="index.php"><button class="button">Login</button></a>
	</div>


     <?php
	 
     $db = mysqli_connect("localhost","root", "","jobhunter") or 
     die("Error connecting to database");
     //if($_SERVER["REQUEST_METHOD"] == "POST") {
         //include 'server.php';

         $sql = "SELECT email,companyName,telephone,companyEmail,category,salary,position
          FROM jobs";
         $result = $db->query($sql);
         
         if ($result->num_rows > 0) {
             // output data of each row
             
             $emails=array();
             $num=0;
             while($row = $result->fetch_assoc()) {
                 echo "<br>JobNo : $num";
                 echo "<br> Email : ". 
                 $row["email"]. " <br>Company : ". 
                 $row["companyName"]. "<br>Telephone : " . 
                 $row["telephone"] . "<br>CompanyEmail : ".
                 $row["companyEmail"]. "<br>salary : " .
                 $row["salary"]. "<br>position : " .
                 $row["position"]. "<br>" ;
                 array_push($emails,$row['email']);
                 echo("<button class='button2' onclick=\"location.href='DeleteEmployee.php'\">Delete</button><p>");
                 echo "--------------------------------------------------------------------------------------------- ";

                 $num=$num+1;
             }
     
         } 
         else {
             echo "No job Requests";
         }
     //}
     
     $db->close();
 ?>



	</center>
	
</body>
</html>

<?php
	unset($_SESSION["error"]);
?>