<?php

session_start();

if(!array_key_exists("id", $_SESSION)) {

    header("location: index.html");

}


$ID = $_SESSION['id'];

$sql = "SELECT * FROM user
			WHERE ID ='".$ID."';";
$ret = mysqli_query($connect, $sql);
if(mysqli_num_rows($ret) > 0){
    $login = true;
}
?>