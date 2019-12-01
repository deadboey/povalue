<?php
include("connect.php");

session_start();

$password_hash=password_hash($_POST['passwort'], PASSWORD_DEFAULT);

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $_sql = "UPDATE user SET passwort = '".$password_hash."' WHERE email='".$_SESSION['email']."';";

    header("location:index.php");
}
?>
