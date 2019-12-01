<?php
include("connect.php");

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $_email = mysqli_real_escape_string($connect,$_POST['email']);

    $_sql = "SELECT * from user Where email='".$_email."';";

    $result = mysqli_query($connect, $_sql);

    $count = mysqli_num_rows($result);
    $_SESSION['email'] = $_email;

    if($count == 1) {
      
   header("location:pwsetback.html");

        }

    }else {
        echo "<div class='form'><h3>E-Mail Adresse ist falsch.</h3>
                    <br/>Klicken Sie hier um es erneut zu versuchen <a href='pwforgot.html'>Passwort zurücksetzen</a></div>";
    }

?>
