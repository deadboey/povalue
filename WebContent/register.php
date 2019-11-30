<html>
<body>
    <?php
    $password_hash=password_hash($_POST['passwort'], PASSWORD_DEFAULT);

$connect = mysqli_connect("localhost", "root", "", "povalueuser");
if (!$connect)
	{
	die('Connection Failed: ' . mysqli_error());
	}



$user_info ="INSERT INTO USER (`email`, `passwort`)
			VALUES ('".$_POST["email"]."',
			'".$password_hash."');";

if (!mysqli_query($connect, $user_info))

	{
	die('Error: ' . mysqli_error($connect));
	}

header("location: index.html");

mysqli_close($connect);

    ?>
</body>
</html>
