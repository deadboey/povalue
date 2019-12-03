<?php
include("connect.php");

session_start();
$passwort = $_POST['passwort'];
$passwort_check = $_POST['passwort_check'];
$password_hash=password_hash($_POST['passwort'], PASSWORD_DEFAULT);

if($passwort == $passwort_check) {

    if(strlen($passwort) >= 7) {


        if($_SERVER["REQUEST_METHOD"] == "POST") {

            $_sql = "UPDATE user SET passwort = '".$password_hash."' WHERE email='".$_SESSION['email']."';";

            if (mysqli_query($connect, $_sql))

            {
                echo ("<script LANGUAGE='JavaScript'>
    window.alert('Ihre Passwortänderung war Erfolgreich.');
    window.location.href='index.php';
    </script>");

            } else {
                echo ("<script LANGUAGE='JavaScript'>
    window.alert('Entschuldigung. Es ist ein Fehler aufgetreten.');
    window.location.href='pwsetback.html';
    </script>");
            }

        }

    } else {
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Das Passwort ist leider zu kurz. Es muss mindestens 7 Zeichen lang sein.');
    window.location.href='pwsetback.html';
    </script>");

    }
} else {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Die Passwörter stimmen leider nicht überein. Bitte versuchen Sie es erneut.');
    window.location.href='pwsetback.html';
    </script>");
}

?>
