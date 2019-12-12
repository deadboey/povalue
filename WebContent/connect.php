<?php
    if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    // Called directly
        header("location: index.php");
    } else {
    // Included
        $connect = mysqli_connect("localhost", "root", "", "povalueuser");
        // Check connection
        if (!$connect) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }
?>