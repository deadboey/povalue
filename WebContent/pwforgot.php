<?php
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include("connect.php");

    $_email = mysqli_real_escape_string($connect,$_POST['email']);
    $password_hash=password_hash($_POST['password'], PASSWORD_DEFAULT);

    $_abfrage = "SELECT * from user Where email='".$_email."';";
    $result = mysqli_query($connect, $_abfrage);
    $count = mysqli_num_rows($result);
    $status = "wrongemail";
    $response = "email nicht vorhanden";

    if($count == 1) {


        $_sql = "UPDATE user SET passwort = '".$password_hash."' WHERE email='".$_POST['email']."';";

        if (mysqli_query($connect, $_sql)) {

            $status = "success";
            $response = "Email vorhanden";

        }
    }
    exit(json_encode(array("status"=>$status,"response"=>$response)));
    } else {
    // Redirect to login or main (when signed in)
    include('geheim.php');
    if(array_key_exists("id", $_SESSION)) {
        header("location: main.php"); 
    }
}
?>
