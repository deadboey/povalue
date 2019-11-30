<?php
session_start();
if(!isset($_SESSION['user'])) {
    die('Bitte zuerst <a href="index.html">einloggen</a>');
}

//Abfrage der Nutzer ID vom Login
$userid = $_SESSION['user'];

echo "Hallo User: ".$userid;
?>