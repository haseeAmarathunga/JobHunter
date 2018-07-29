<?php
   //connecting database
   include("dbcon.php");
   session_start();
   $error = "";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      

      $email = mysqli_real_escape_string($db,$_POST['email']);
      
      $sql = "DELETE FROM jobs WHERE email='$email'";
      $result = mysqli_query($db,$sql);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
	//userName = admin    password=clash

        header("location:employeeEdit.php");

   }
   
?>