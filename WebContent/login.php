<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include("connect.php");
    $passwort = $_POST['password_log'];
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $_email = mysqli_real_escape_string($connect,$_POST['email_log']);
        $_sql = "SELECT * from user Where email='".$_email."';";
        $result = mysqli_query($connect, $_sql);
        $count = mysqli_num_rows($result);
            if($count == 1) {
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $name = $row['vorname'];
            $ID = $row['ID'];
            $password_hash = $row['passwort'];
            $email = $row['email'];
                if (password_verify($passwort, $password_hash)){
                $_SESSION['user'] = $name;
                $_SESSION['id'] = $ID;
                $status = "success";
                $response = "Login Erfolgreich";
                } else {
                $status = "wrongpassword";
                $response = "Login fehlgeschlagen";
                }
            } else {
            $status = "wrongemail";
            $response = "Login fehlgeschlagen";
            }
    }
    exit(json_encode(array("status" => $status, "response" => $response)));
    } else {
    // Redirect to login or main (when signed in)
    include('geheim.php');
    if(array_key_exists("id", $_SESSION)) {
        header("location: main.php"); 
    }
}
?>