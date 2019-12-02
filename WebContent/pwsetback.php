<?php
include("connect.php");

session_start();
$passwort = $_POST['passwort'];
$passwort_check = $_POST['passwort_check'];
$password_hash=password_hash($_POST['passwort'], PASSWORD_DEFAULT);

if($passwort == $passwort_check) {

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $_sql = "UPDATE user SET passwort = '".$password_hash."' WHERE email='".$_SESSION['email']."';";

        if (mysqli_query($connect, $_sql))

        {
            header("location: index.php");
        } else {
            echo "<div class='form'><h3>E-Mail Adresse bereits vergeben.</h3>
                    <br/>Klicken Sie hier um es erneut zu versuchen <a href='register.html'>Registrieren</a></div>";
        }

    }

} else {
    echo "<div class='form'><h3>Passwörter stimmen nicht überein.</h3>
                    <br/>Klicken Sie hier um es erneut zu versuchen <a href='pwsetback.html'>Passwort zurücksetzen</a></div>";
}

?>
