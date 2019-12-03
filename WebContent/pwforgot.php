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

    } else {

        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Entschuldigung. Die E-Mail Adresse ist falsch.');
    window.location.href='pwforgot.html';
    </script>");
    }

}

?>
