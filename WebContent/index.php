<?php
include("connect.php");

   session_start();

   if(array_key_exists("id", $_SESSION)) {
       header("location: main.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="SignIn.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">

    <title>SignIn</title>

</head>
<body class="text-center">
 
<form action="login.php" method="post" class="form-signin">
       
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

        <label for="inputEmail" class="sr-only">Email address</label>

        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="passwort" class="form-control" placeholder="Password" required>        

        <button class="btn btn-lg btn-primary btn-block" type="submit" value="login" form-action="login.php" method="post">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2019 PoValue</p>
    </form>
    <form action="register.html" method="post" class="form-register">
        <button class="btn btn-lg btn-primary btn-block" type="submit" value="register" form-action="register.html" method="post">Register</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2019 PoValue</p>
    </form>
     <form action="pwforgot.html" method="post" class="form-pwforgot" center>
        <button class="btn btn-lg btn-primary btn-block" type="submit" value="pwforgot" form-action="pwforgot.html" method="post">Passwort vergessen?</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2019 PoValue</p>
    </form>



   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Falls wir noch ne js Datei brauchen

        <script src="SignIn.js"></script>

    -->
</body>
</html>