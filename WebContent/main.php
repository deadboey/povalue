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
	<title>PoValue - Get your Post evaluated</title>

  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/gallery/style.css">
</head>

  <body>
    <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="main.php">PoValue <?php echo "heißt dich Willkommen ", $_SESSION['user'], "!" ; ?>  </a>
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

<section>
  <div>
    <div class="header" style="background-image: url(img/background.jpg); padding: 5px; width: 100%; height: 10%;" >
      <b><h2 style="text-align:center; color:white; font-weight: bold;">WILLKOMMEN BEI POVALUE</h2></b>
      <h3 style="text-align:center; color:white;">Werden Sie Teil unserer Community und bewerten Bilder anderer Mitglieder!</h3>
    </div>
  </div>
</section>

<section class="mbr-gallery mbr-slider-carousel cid-rJFQcPPPSH" id="gallery3-7">
  <div>
      <div>
        <div class="mbr-gallery-row">
          <div class="mbr-gallery-layout-default">
            <div>
              <div>
                <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false">
                  <div href="#lb-gallery3-7" data-slide-to="0" data-toggle="modal">
                    <img src="img/DSC_0306.JPG" alt="" title="">
                    <span class="icon-focus"></span>
                  </div>
                </div>
                <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false">
                  <div href="#lb-gallery3-7" data-slide-to="1" data-toggle="modal">
                    <img src="img/DSC_0490.JPG" alt="" title="">
                    <span class="icon-focus"></span>
                  </div>
                </div>
                <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false">
                  <div href="#lb-gallery3-7" data-slide-to="2" data-toggle="modal">
                   <img src="img/DSC_0500.JPG" alt="" title="">
                    <span class="icon-focus"></span>
                  </div>
                </div>
                <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false">
                  <div href="#lb-gallery3-7" data-slide-to="2" data-toggle="modal">
                   <img src="img/DSC_0501.JPG" alt="" title="">
                    <span class="icon-focus"></span>
                  </div>
                </div>
                <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false">
                  <div href="#lb-gallery3-7" data-slide-to="4" data-toggle="modal">
                    <img src="img/DSC_0731.JPG" alt="" title="">
                    <span class="icon-focus"></span>
                  </div>
                </div>
                <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false">
                  <div href="#lb-gallery3-7" data-slide-to="5" data-toggle="modal">
                  <img src="img/DSC_0733.JPG" alt="" title="">
                  <span class="icon-focus"></span>
                  </div>
                </div>
                <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false">
                  <div href="#lb-gallery3-7" data-slide-to="6" data-toggle="modal">
                    <img src="img/DSC_0754.JPG" alt="" title="">
                    <span class="icon-focus"></span>
                  </div>
                </div>
                <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false">
                  <div href="#lb-gallery3-7" data-slide-to="7" data-toggle="modal">
                    <img src="img/DSC_0755.JPG" alt="" title="">
                    <span class="icon-focus"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix">
            </div>
          </div>
        </div><!-- Lightbox -->
        <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery3-7">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/DSC_0306.JPG" alt="" title="">
                  </div>
                  <div class="carousel-item">
                    <img src="img/DSC_0490.JPG" alt="" title="">
                  </div>
                  <div class="carousel-item">
                    <img src="img/DSC_0500.JPG" alt="" title="">
                  </div>
                  <div class="carousel-item">
                    <img src="img/DSC_0501.JPG" alt="" title="">
                  </div>
                  <div class="carousel-item">
                    <img src="img/DSC_0731.JPG" alt="" title="">
                  </div>
                  <div class="carousel-item">
                    <img src="img/DSC_0733.JPG" alt="" title="">
                  </div>
                  <div class="carousel-item">
                    <img src="img/DSC_0754.JPG" alt="" title="">
                  </div>
                  <div class="carousel-item">
                    <img src="img/DSC_0755.JPG" alt="" title="">
                  </div>
                </div>
                <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery3-7">
                  <span class="mbri-left mbr-iconfont" aria-hidden="true"></span>
                  <span class="sr-only">Rückwärts</span>
                </a>
                <a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery3-7">
                  <span class="mbri-right mbr-iconfont" aria-hidden="true"></span>
                  <span class="sr-only">Vorwärts</span>
                </a>
                <a class="close" href="#" role="button" data-dismiss="modal">
                  <span class="sr-only">Schließen</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>

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
 
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/gallery/player.min.js"></script>
  <script src="assets/gallery/script.js"></script>
  <script src="assets/slidervideo/script.js"></script>

</body>
</html>