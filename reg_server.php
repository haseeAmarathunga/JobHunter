<?php
   //connecting database
   include("dbcon.php");
   session_start();
   
   $error = "";

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      

      $firstName = mysqli_real_escape_string($db,$_POST['firstName']);
      $lastName = mysqli_real_escape_string($db,$_POST['lastName']); 
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $nic = mysqli_real_escape_string($db,$_POST['nic']); 
      $pass1 = mysqli_real_escape_string($db,$_POST['pass']); 
      $pass2 = mysqli_real_escape_string($db,$_POST['pass2']); 
      $userOption = mysqli_real_escape_string($db,$_POST['jobOption']); 
    

      
            if($firstName!="" && $lastName!="" && $nic!="" && $email!=""){
                if ($pass1==""){
                    $error = "Please enter a password";
                    $_SESSION["error"]=$error;
                    header("location:register.php");
                  }
                else if ($pass1!=$pass2){
                        $error = "password Not Match.";
                        $_SESSION["error"]=$error;
                        header("location:register.php");
                    }
                else{
                    

                    if ($userOption=="1"){
                        $sql="INSERT INTO jobseekers(NIC,firstName,lastName,email,pass) 
                        VALUES('$nic','$firstName','$lastName','$email','$pass1')";
                        header("location:index.php");
                        mysqli_query($db,$sql);
                    }
                    else{
                        $sql="INSERT INTO jobemployers(NIC,firstName,lastName,email,pass) 
                        VALUES('$nic','$firstName','$lastName','$email','$pass1')";
                        header("location:index.php");
                        mysqli_query($db,$sql);
                    }
                }
            }
            else{
                $error = "Please fill the all details.";
		        $_SESSION["error"]=$error;
		        header("location:register.php");
            }


      //$sql = "SELECT id FROM userdetails WHERE (ID = '$myusername' or email='$myusername') and password = '$mypassword'";
      //$result = mysqli_query($db,$sql);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      //$count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
	//userName = admin    password=clash
	
      /*if($count == 1) {
         if($myusername=="adminH"){
            $_SESSION['login_user'] = $myusername;
            
            header("location:home.php");
         }
         else{
            $_SESSION['login_user'] = $myusername;
            
            header("location:employer.php");
         }
      }else {
         $error = "Your Login Name or Password is invalid";
		 $_SESSION["error"]=$error;
		 header("location:index.php");
      }*/
   }
?>