<?php
include("connect.php");
$passwort = $_POST['password'];

   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $_email = mysqli_real_escape_string($connect,$_POST['email']);

	   $_sql = "SELECT * from user Where email='".$_email."';";

       $result = mysqli_query($connect, $_sql);

      $count = mysqli_num_rows($result);


      if($count == 1) {

          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
          $name = $row['vorname'];
          $ID = $row['ID'];
          $password_hash = $row['passwort'];
          $email = $row['email'];

          if (password_verify($passwort, $password_hash)){

              $_SESSION['user'] = $name;
              $_SESSION['id'] = $ID;

              $status = "success";
              $response = "Login Erfolgreich";

          } else {

              $status = "wrongpassword";
              $response = "Login fehlgeschlagen";

          }

      }else {

          $status = "wrongemail";
          $response = "Login fehlgeschlagen";

      }
      exit(json_encode(array("status" => $status, "response" => $response)));
   }
?>
