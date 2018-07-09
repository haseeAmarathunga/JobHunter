<?php
   //connecting database
   $db = mysqli_connect("localhost","root", "","jobhunter") or die("Error connecting to database");
   session_start();
   
   $error = "";

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      

      $jobNum = mysqli_real_escape_string($db,$_POST['jobNum']);
      $fullName = mysqli_real_escape_string($db,$_POST['fullName']); 
      $nic = mysqli_real_escape_string($db,$_POST['nic']); 
      $address = mysqli_real_escape_string($db,$_POST['address']);
      $mobile = mysqli_real_escape_string($db,$_POST['mobile']); 
      $email = mysqli_real_escape_string($db,$_POST['email']); 
      $gender = mysqli_real_escape_string($db,$_POST['gender']); 
      $age = mysqli_real_escape_string($db,$_POST['age']); 
      $experiance = mysqli_real_escape_string($db,$_POST['experiance']); 
    
      if (isset($_SESSION["messages"])){
        $messages=$_SESSION["messages"];
    }
      
            if($nic!="" && $jobNum!="" && $fullName!="" && $email!=""){
                if ($address==""){
                    $error = "Please enter your Address";
                    $_SESSION["error"]=$error;
                    header("location:apply.php");
                  }
                else if ($experiance==""){
                        $error = "Please describe about you.";
                        $_SESSION["error"]=$error;
                        header("location:apply.php");
                    }
                else{
                    

                    if ($gender=="0"){
                        $gend="male";

                    }
                    else{
                        $gend="Female";
                        
                    }
                    $sql="INSERT INTO seekers
                         VALUES('$messages[$jobNum]','$fullName','$nic','$address','$mobile','$email',
                         '$gend','$age','$experiance')";
                        header("location:seekerSuccess.php");
                        mysqli_query($db,$sql);
                }
            }
            else{
                $error = "Please fill the all details.";
		        $_SESSION["error"]=$error;
		        header("location:apply.php");
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