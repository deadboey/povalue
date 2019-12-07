<?php
include("connect.php");




$_email = mysqli_real_escape_string($connect,$_POST['like']);

$_sql = "SELECT * from images Where id='".$_email."';";

$result = mysqli_query($connect, $_sql);
$count = mysqli_num_rows($result);
$status = "mailexists";
$response = "E-Mail ist bereits vergeben";
if($count == 0) {

    $user_info ="INSERT INTO USER (`email`, `passwort`, `vorname`, `nachname`) VALUES ('".$_POST["email"]."','".$password_hash."','".$_POST["firstname"]."','".$_POST["lastname"]."');";

    if (mysqli_query($connect, $user_info))

    {

        $status = "success";
        $response = "Registrierung Erfolgreich";

    }
}