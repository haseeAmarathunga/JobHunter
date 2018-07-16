<?php
   //connecting database
   $db = mysqli_connect("localhost","root", "","jobhunter") or die("Error connecting to database");
   session_start();
   $error = "";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM jobseekers WHERE email='$myusername' and pass = '$mypassword'";
      $result = mysqli_query($db,$sql);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $message=$myusername;
      $_SESSION["message"]=$message;
      
      // If result matched $myusername and $mypassword, table row must be 1 row
	//userName = admin    password=clash
	
      if(mysqli_num_rows($result) == 1) {
            header("location:seekersHome.php");
           

      }else {
         $sql = "SELECT * FROM jobemployers WHERE email='$myusername' and pass = '$mypassword'";
         $result = mysqli_query($db,$sql);
         while($row = $result->fetch_assoc()) 
         {
            $name=$row["firstName"];
            $_SESSION["name"]=$name;
         }

         if(mysqli_num_rows($result) == 1) {
            header("location:employersHome.php");
         }
         else{
            $error = "Your Login Name or Password is invalid";
            $_SESSION["error"]=$error;
            header("location:index.php");
         }
      }
   }
   
?>