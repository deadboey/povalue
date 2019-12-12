<!-- Include to Restrict Subpage to Signed In Users-->
<?php
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    // Called directly    
    header("location: index.php");
} else {
    // Included
    session_start();
    if(!array_key_exists("id", $_SESSION)) {
        header("location: index.php");
    }
}
?>