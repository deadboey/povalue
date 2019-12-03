<?php

include("connect.php");
include("geheim.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="main.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/4.4/">
	<title>PotValue - Get your Post evaluated</title> 
</head>

  <body>
    <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="main.html">PoValue <?php echo "heißt dich Willkommen ", $_SESSION['user'], "!" ; ?>  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact-us.html">Kontakt</a>
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

<div class="jumbotron">
  <div class="container">
    <h1 class="headline">Hello, DomB!</h1>
    <p>Wir hoffen dein Dünnschiss hat sich beruhigt und du musst jetzt nicht nur noch kacken, sondern kannst endlich mit uns coden. In Liebe, dein Team :)</p>
  </div>
</div>

<!--- Altes Karusell
<div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
            <img src="img/DSC_0306.JPG" class="d-block w-100" alt="0">
      </div>
      <div class="carousel-item">
         <img src="img/metin-1.jpeg" class="d-block w-100" alt="1">
      </div>
      <div class="carousel-item">
          <img src="img/metin-2.jpeg" class="d-block w-100" alt="2">
      </div>
      <div class="carousel-item">
          <img src="img/musicianjoke.png" class="d-block w-100" alt="3">
    </div>
      <div class="carousel-item">
           <img src="img/00A292A1-C663-4B4A-A67B-B6133412838F.jpeg" class="d-block w-100" alt="4">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Zurück</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Vorwärts</span>
    </a>
  </div>
</div>
--->

<!---Gallerie--->
<!---Reihe 1--->
    <div>
      <div class="column">
        <img src="img/DSC_0306.JPG" alt="0">
        <span class="icon-focus"></span>
      </div>
      <div class="column">
      <img src="img/DSC_0490.JPG" alt="0">
        <span class="icon-focus"></span>
      </div>
      <div class="column">
      <img src="img/DSC_0500.JPG" alt="0">
        <span class="icon-focus"></span>
      </div>
      <div class="column">
      <img src="img/DSC_0501.JPG" alt="0">
        <span class="icon-focus"></span>
      </div>
    </div>
    <!---Reihe 2--->
    <div>
      <div class="column">
      <img src="img/DSC_0731.JPG" alt="0">
        <span class="icon-focus"></span>
      </div>
      <div class="column">
      <img src="img/DSC_0733.JPG" alt="0">
        <span class="icon-focus"></span>
      </div>
      <div class="column">
      <img src="img/DSC_0754.JPG" alt="0">
        <span class="icon-focus"></span>
      </div>
      <div class="column">
      <img src="img/DSC_0755.JPG" alt="0">
        <span class="icon-focus"></span>
      </div>
    </div>

<!--- Slider???
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false" data-keyboard="true">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
    </ol>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Zurück</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Vorwärts</span>
      </a>
      <a class="close" role="button" href="#" data-dismiss="modal">
        <span class="sr-only">Close</span>
      </a>
    </div>
  </div>
</div>
--->

<span class="likebtn-wrapper" data-theme="custom" data-btn_size="30" data-f_size="25" 
data-icon_size="25" data-icon_l="thmb4-u" data-icon_d="thmb4-d" data-icon_l_c="#000000" 
data-icon_l_c_v="#23ca53" data-icon_d_c="#000000" data-icon_d_c_v="#ff0000" data-label_c="#000000" 
data-label_c_v="#000000" data-counter_l_c="#23ca53" data-counter_d_c="#ff0000" data-bg_c="#ffffff" 
data-bg_c_v="#eaeaea" data-brdr_c="#000000" data-f_family="Impact" data-label_fs="r" data-lang="de" 
data-i18n_like="Mag ich" data-ef_voting="buzz" data-identifier="rating" data-show_dislike_label="true" 
data-counter_type="percent" data-i18n_dislike="Mag ich nicht" data-i18n_after_like="Find i echd guad" 
data-i18n_after_dislike="Sau bled" data-i18n_like_tooltip="Klick auf mich!" 
data-i18n_dislike_tooltip="Klick auf mich!" data-i18n_unlike_tooltip="Andere Meinung?" 
data-i18n_undislike_tooltip="Andere Meinung?"></span>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>