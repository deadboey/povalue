<?php
$connect = mysqli_connect("localhost", "root", "", "povalueuser"); 
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $_email = mysqli_real_escape_string($connect,$_POST['email']);
      $_password = mysqli_real_escape_string($connect,$_POST['passwort']); 
      
	   $_sql = "SELECT * FROM user WHERE
                    email='$_email' AND
                    passwort='$_password'
                LIMIT 1";

      
      $result = mysqli_query($_sql, $connect);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myemail");
         $_SESSION['login_user'] = $myemail;
         
         header("location: main.html");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>