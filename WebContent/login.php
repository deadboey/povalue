<?php
$connect = mysqli_connect("localhost", "root", "", "povalueuser");
$passwort = $_POST['passwort'];

   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $_email = mysqli_real_escape_string($connect,$_POST['email']);

	   $_sql = "SELECT * from user Where email='".$_email."';";

       $result = mysqli_query($connect, $_sql);

      $count = mysqli_num_rows($result);


      if($count == 1) {

          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
          $password_hash = $row['passwort'];

          if (password_verify($passwort, $password_hash)){

              $_SESSION['user'] = $_email;
              header("location: main.html");

          } else {

              echo "<div class='form'><h3>Passwort ist falsch.</h3>
                    <br/>Klicken Sie hier um sich erneut anzumelden <a href='index.html'>Login</a></div>";

          }

      }else {

          echo "<div class='form'><h3>E-Mail Adresse ist falsch.</h3>
                    <br/>Klicken Sie hier um sich erneut anzumelden <a href='index.html'>Login</a></div>";
      }
   }
?>
