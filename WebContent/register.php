    <?php
    include("connect.php");

    session_start();
    $passwort = $_POST['passwort'];
    $passwort_check = $_POST['passwort_check'];
    $password_hash=password_hash($_POST['passwort'], PASSWORD_DEFAULT);



if (!$connect)
	{
	die('Connection Failed: ' . mysqli_error());
	}



$user_info ="INSERT INTO USER (`email`, `passwort`, `vorname`, `nachname`)
			VALUES ('".$_POST["email"]."','".$password_hash."','".$_POST["vorname"]."','".$_POST["nachname"]."');";

if($passwort == $passwort_check) {


    if (mysqli_query($connect, $user_info))

    {
        echo "<div class='form'><h3>Registrierung Erfolgreich.</h3>
                    <br/>Klicken Sie hier um sich anzumelden <a href='index.php'>Login</a></div>";
    } else {
        echo "<div class='form'><h3>E-Mail Adresse bereits vergeben.</h3>
                    <br/>Klicken Sie hier um es erneut zu versuchen <a href='register.html'>Registrieren</a></div>";
    }

} else {

     echo "<div class='form'><h3>Passwörter stimmen nicht überein.</h3>
                    <br/>Klicken Sie hier um es erneut zu versuchen <a href='index.php'>Login</a></div>";

}



?>


