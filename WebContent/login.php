<?php
$connect = mysqli_connect("localhost", "root", "", "povalueuser");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {


      $_email = mysqli_real_escape_string($connect,$_POST['email']);
      $_password = mysqli_real_escape_string($connect,$_POST['passwort']);

	   $_sql = "SELECT * from user Where email='".$_email."' AND passwort='".$_password."';";

       $result = mysqli_query($connect, $_sql);

      $count = mysqli_num_rows($result);
      echo $count;
      
      if($count == 1) {
          
      

          header("location: main.html");
      }else {
          // header("location: index.html");
          $error = 'Your Login Name or Password is invalid';
          
      }
   }
?>
