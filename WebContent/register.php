<html>
<body>
<?php


$connect = mysqli_connect("localhost", "root", "", "povalueuser"); 
if (!$connect) 
	{ 
	die('Connection Failed: ' . mysqli_error()); 
	}


$user_info ="INSERT INTO USER (`email`, `passwort`) 
			VALUES ('".$_POST["email"]."', 
			'".$_POST["passwort"]."');"; 

if (!mysqli_query($connect, $user_info))
	
	{
	die('Error: ' . mysqli_error()); 
	}

header("location: main.html");

mysqli_close($connect); 

?>
</body>
</html>
