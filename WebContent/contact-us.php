<?php
include("geheim.php");
?>

<!DOCTYPE html>
<html>
    <head>
    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/">
    <link rel="stylesheet" href="contact-us.css">
    <title>PotValue - Kontaktformular</title>
    </head>

    <body>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="main.php">PoValue - Nimm mit uns Kontakt auf</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarsExample01">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="main.php">Home</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="contact-us.html">Kontakt<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="impressum.html">Impressum</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
                </li>
              </ul>
            </div>
          </nav>
          
          <section>
            <div>
              <div class="header" style="background-image: url(img/background.jpg); padding: 5px; width: 100%; height: 10%;" >
                <b><h2 style="text-align:center; color:white; font-weight: bold;">Hier kannst du mit uns bei Problemen Kontakt aufnehmen!</h2></b>
                <h3 style="text-align:center; color:white;">Schreibe dein Anliegen in das Feld des Kontaktformulars und wir werden uns darum kümmern.</h3>
                <h3 style="text-align:center; color:white;">Dein PoValue-Team</h3>
              </div>
            </div>
          </section>

          <div class="container contact-form">
              <div class="contact-image">
                  <img src="img/brief.png" alt="rocket_contact"/>
              </div>
              <form method="post">
                  <h3 style="font-weight: bold;">Schreibe eine Nachricht an uns!</h3>
                 <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <input type="text" name="txtThema" class="form-control" placeholder="Thema *" value="" />
                          </div>
                          <div class="form-group" style="padding-top: 13%;">
                              <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                          </div>
                      </div>
                  </div>
              </form>
  </div>   


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </body>
</html>