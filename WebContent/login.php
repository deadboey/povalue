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

              echo "Hallo ", $_SESSION['user'], "!" ;
              echo "<br/>Solltest du nicht innerhalb 5 Sekunden weitergeleitet werden, klicke hier: <a href='main.php'>Startseite</a></div>";
              header("refresh:4;main.php");

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
