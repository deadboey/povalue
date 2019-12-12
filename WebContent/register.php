<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include("connect.php");
    session_start();

    $password_hash=password_hash($_POST['password'], PASSWORD_DEFAULT);

    $_email = mysqli_real_escape_string($connect,$_POST['email']);
    $_sql = "SELECT * from user Where email='".$_email."';";
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
    exit(json_encode(array("status"=>$status,"response"=>$response)));
    } else {
        // Redirect to login or main (when signed in)
        include('geheim.php');
        if(array_key_exists("id", $_SESSION)) {
            header("location: main.php"); 
        }
    }
?>

