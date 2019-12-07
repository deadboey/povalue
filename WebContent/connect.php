<?php
    $connect = mysqli_connect("localhost", "root", "", "povalueuser");
    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>