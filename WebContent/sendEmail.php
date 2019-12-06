<?php
use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];



    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //SMTP Settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "povalue@gmail.com";
    $mail->Password = 'Nfcukp44';
    $mail->Port = 465; //587
    $mail->SMTPSecure = "ssl"; //tls



    //Email Settings
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("povalue@gmx.de");
    $mail->Subject = $subject;
    $mail->Body = "Absender: ".$email." - ".$name. "<br />" .$body;

    if ($mail->send()) {
        $status = "success";
        $response = "Email versendet!";
    } else {
        $status = "failed";
        $response = "Etwas ist fehlgeschlagen: <br><br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>
