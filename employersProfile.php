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
	<a href="Employershome.php"><button class="button">Home</button></a>
	<a href="employersProfile.php"><button class="button">Profile</button></a>
	<a href="seekers.php"><button class="button">jobRequests</button></a>
	<a href="login.php"><button class="button">Login</button></a>
	</div>

    <div class="container">
		<h2 class="cat_title"><span id="redlight">My</span> Advertisements</h2>

    <h2>
    <font color="2f3637" face="calibri">
    <?php
    include 'server.php';
    if (isset($_SESSION["message"])){
        $message=$_SESSION["message"];
        $db = mysqli_connect("localhost","root", "","jobhunter") or die("Error connecting to database");
       
        $sql = "SELECT companyEmail, companyName, telephone,position,salary
         FROM jobs WHERE email='$message'";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<br> Company Email : ". 
                $row["companyEmail"]. " <br>Company Name: ". 
                $row["companyName"]. "<br>Telephone No : " . 
                $row["telephone"] . "<br>Job Position : ".
                $row["position"]. "<br>Salary : Rs." .
                $row["salary"]."<p>" ;
                
            }
        } 
        else {
            echo "No job posted";
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

