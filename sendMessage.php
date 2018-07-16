<?php
   //connecting database
   $db = mysqli_connect("localhost","root", "","jobhunter") or die("Error connecting to database");
   session_start();
   
   $error = "";

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      

      $jobNum = mysqli_real_escape_string($db,$_POST['jobNum']);
      $status = mysqli_real_escape_string($db,$_POST['status']); 
      $descript = mysqli_real_escape_string($db,$_POST['message']); 
      $company = mysqli_real_escape_string($db,$_POST['company']);
      if (isset($_SESSION["messages"])){
        $messages=$_SESSION["messages"];
        }
      
            if($jobNum!="" && $descript!="" &&$company!=""){
                    if ($status=="0"){
                        $sta="Accepted";

                    }
                    else{
                        $sta="Rejected";
                        
                    }
                    $sql="INSERT INTO messages
                         VALUES('$messages[$jobNum]','$sta','$descript','$company')";
                        header("location:employersHome.php");
                        mysqli_query($db,$sql);
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