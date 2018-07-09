<?php
   //connecting database
   $db = mysqli_connect("localhost","root", "","jobhunter") or die("Error connecting to database");
   session_start();
   
   $error = "";

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      

      $email = mysqli_real_escape_string($db,$_POST['email']);
      $companyName = mysqli_real_escape_string($db,$_POST['companyName']); 
      $telephone = mysqli_real_escape_string($db,$_POST['telephone']);
      $companyEmail = mysqli_real_escape_string($db,$_POST['companyEmail']); 
      $jobCategory = mysqli_real_escape_string($db,$_POST['jobCategory']); 
      $salary = mysqli_real_escape_string($db,$_POST['salary']); 
      $position = mysqli_real_escape_string($db,$_POST['position']);
      $jobtime = mysqli_real_escape_string($db,$_POST['jobtype']);
      $website = mysqli_real_escape_string($db,$_POST['website']);  
    
      if ($email==""){
            $error = "Please enter your Email";
            $_SESSION["error"]=$error;
            header("location:employersReg.php");
      }
      else if($companyName=="" || $telephone=="" || $companyEmail==""
      || $salary=="" || $position=="" ){
            $error = "Please enter all the details";
            $_SESSION["error"]=$error;
            header("location:employersReg.php");
      }
      else{
            $sql="INSERT INTO jobs(email,companyName,telephone,companyEmail,
            category,salary,position,time,website) 
                        VALUES('$email','$companyName','$telephone',
                        '$companyEmail','$jobCategory','$salary','$position',
                        '$jobtime','$website');";
            
            mysqli_query($db,$sql);
            header("location:success.php");
            
      }

      

}
?>