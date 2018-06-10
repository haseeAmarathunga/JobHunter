<?php
   //connecting database
   $db = mysqli_connect("localhost","root", "","jobhunter") or die("Error connecting to database");
   session_start();
   
   $error = "";

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM userdetails WHERE name = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
	//userName = admin    password=clash
	
      if($count == 1) {
         
         $_SESSION['login_user'] = $myusername;
         
         header("location:home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
		 $_SESSION["error"]=$error;
		 header("location:index.php");
      }
   }
?>