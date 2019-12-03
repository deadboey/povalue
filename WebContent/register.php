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

    if(strlen($passwort) >= 7) {

        if (mysqli_query($connect, $user_info))

        {


            echo ("<script LANGUAGE='JavaScript'>
    window.alert('Vielen Dank! Ihre Registrierung war erfolgreich.');
    window.location.href='index.php';
    </script>");
        }
        else {
            echo ("<script LANGUAGE='JavaScript'>
    window.alert('Entschuldigung. Die E-Mail Adresse ist bereits vergeben.');
    window.location.href='index.php';
    </script>");

        }

    } else {
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Das Passwort ist leider zu kurz. Es muss mindestens 7 Zeichen lang sein.');
    window.location.href='index.php';
    </script>");

    }

} else {

    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Die Passwörter stimmen leider nicht überein. Bitte versuchen Sie es erneut.');
    window.location.href='index.php';
    </script>");

}



?>


