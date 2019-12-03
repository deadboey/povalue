<?php
include("connect.php");
$passwort = $_POST['passwort'];

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

          if (password_verify($passwort, $password_hash)){

              $_SESSION['user'] = $name;
              $_SESSION['id'] = $ID;


              header("refresh:1;main.php");

          } else {

              echo ("<script LANGUAGE='JavaScript'>
    window.alert('Das Passwort ist Falsch. Bitte versuchen Sie es erneut.');
    window.location.href='index.php';
    </script>");

          }

      }else {

          echo ("<script LANGUAGE='JavaScript'>
    window.alert('Die E-Mail Adresse ist leider nicht vergeben. Bitte versuchen Sie es erneut.');
    window.location.href='index.php';
    </script>");
      }
   }
?>
