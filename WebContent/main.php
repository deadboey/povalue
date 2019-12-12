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
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/">
    
    <title>PoValue - Get your Post evaluated</title>

    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/gallery/style.css">
    <link rel="stylesheet" href="main.css">
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
            <a class="nav-link" href="contact.php">Kontakt</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="impressum.php">Impressum</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <section>
      <div class="header">
        <h2><?php echo  $_SESSION['user'], ", hier kannst du Bilder von dir hochladen und bewerten lassen!" ; ?></h2>
        <h3>Entdecke neue Bilder von anderen Usern und gib deine Meinung dazu ab :)</h3>
        <h3>Dein PoValue-Team</h3>
      </div>
    </section>

    <section id="row">
      <div style="height: 10%; background: #343a40; max-height: 20%">
        <!-- [POPUP BOX] -->
        <div id="pop-up">
          <div id="pop-box">
            <div id="pop-close" onclick="pop.close()">X</div>
            <h1 id="pop-title"></h1>
            <br>
            <div id="pop-text"></div>
            <hr>
            <form method="post" action="" enctype='multipart/form-data'>
              <input type="text" style="background: whitesmoke;" name="image_name" id="image_name" placeholder="Geben Sie einen Bildtitel ein" />
              <br>
              <input type="file" id="file" value="Bild auswählen" name="file"/>
              <hr>
              <input type="submit" class="btn btn-dark" value="Hochladen" name="but_upload"/>
            </form>
          </div>
        </div>
        <input type="button" class="btn btn-colors" value="Klicke hier um Bilder hochzuladen (max. 1MB)" onclick="pop.open('Bilder hochladen', 'Wir freuen uns über neue Bilder. Beachten Sie die festgelegte maximale Göße von 1MB pro Bild. Danke!')"/>
      </div>
    </section>

<!-- Upload to DB - PHP Script -->
<?php
  include("connect.php");
  if(isset($_POST['but_upload'])){
    $name = $_FILES['file']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES['file']['name']);
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");
    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){
      $image_name = $_POST['image_name'];
      // Convert to base64
      $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
      $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
      // Insert record
      $query = "insert into images(image, image_name) values('".$image."', '".$image_name."')";
      mysqli_query($connect,$query);
      header("location: main.php");
    }
  }
?>

    <!-- Content Section -->
    <section id="contentarea">
      <div class="galleryrow">
        <!-- Image Galery Creation PHP Script -->
        <?php
          include("connect.php");
          $sql = "SELECT A.id, A.image_name, A.image FROM images as A where A.id ORDER BY id DESC";
          $result = mysqli_query($connect, $sql);
          $itemno = 0;
          // Do for each Data Set:
          while($row = mysqli_fetch_assoc($result)){
            $image_src = $row['image'];
            $image_name = $row['image_name'];
            ?>
            <div class="gallerycolumn" data-video-url="false">
              <a href="#gallerysliderContainer" data-slide-to='<?php echo $itemno; ?>' data-toggle="modal">
                <img class="galleryitem" src='<?php echo $image_src; ?>' title='<?php echo $image_name; ?>' />
                <span class="icon-focus"></span>
              </a>
            </div>
            <?php
            $itemno++;
          }
          mysqli_close($connect);
        ?>
        <div class="clearfix"></div>
      </div>
      <!-- Lightbox -->
      <div data-app-prevent-settings="" class="content-slider modal carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="gallerysliderContainer">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <div class="carousel-inner">
              <!-- Carousel Creation PHP Script -->
              <?php
                include("connect.php");
                // Generate HTML Block for Active Element
                $sql = "SELECT A.id, A.image_name, A.image, A.likes FROM images as A where A.id = (select MAX(B.id) from images as B)";
                $result = mysqli_query($connect, $sql);
                while($row = mysqli_fetch_assoc($result)){
                  $image_src = $row['image'];
                  $image_name = $row['image_name'];
                  $image_likes = $row['likes'];
                  ?>
                  <div class="carousel-item active">
                    <img src='<?php echo $image_src; ?>' title='<?php echo $image_name; ?>'/>
                    <!-- Form for the Like Button & Counter -->    
                    <form class="likeContainer">
                      <button type="button" class="btn-danger formitem" style="margin: 0px;" onClick="like(0)" id="plusfresh">
                        <img src="img/fresh.png" alt="Fresh" width="15px" height="15px">
                      </button>
                      <output class="formitem output" id="clicks-0"><?php echo $image_likes; ?></output>
                      <button type="button" class="btn-danger formitem" style="margin: 0px;" onClick="dislike(0)">
                        <img src="img/dislike.png" alt="Gefällt mir nicht!" width="15px" height="15px">
                      </button>
                    </form>
                  </div>
                <?php
                }
                // Generate HTML Blocks for other Elements
                $sql = "SELECT A.id, A.image_name, A.image, A.likes FROM images as A where A.id <> (select MAX(B.id) from images as B) ORDER BY id DESC";
                $result = mysqli_query($connect, $sql);
                $itemno = 1;
                while($row = mysqli_fetch_assoc($result)){
                  $image_src = $row['image'];
                  $image_name = $row['image_name'];
                  $image_likes = $row['likes'];
                  ?>
                  <div class="carousel-item">
                    <img src='<?php echo $image_src; ?>' title='<?php echo $image_name; ?>'/>
                    <!-- Form for the Like Button & Counter -->
                    <form class="likeContainer">
                      <button type="button" class="btn btn-danger formitem" style="margin: 0px;" onClick="like(<?php echo $itemno?>)" id="plusfresh">
                        <img src="img/fresh.png" alt="Fresh" width="15px" height="15px">
                      </button>
                      <output class="formitem output" id="clicks-<?php echo $itemno ?>"><?php echo $image_likes; ?></output>
                      <button type="button" class="btn btn-danger formitem" style="margin: 0px;" onClick="dislike(<?php echo $itemno?>)"id="plusfresh">
                        <img src="img/dislike.png" alt="Gefällt mir nicht!" width="15px" height="15px">
                      </button>
                    </form>
                  </div>
                  <?php
                  $itemno++;
                }
                mysqli_close($connect);
              ?>
              </div>
              <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#gallerysliderContainer">
                <span class="mbri-left mbr-iconfont" aria-hidden="true"></span>
              </a>
              <a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#gallerysliderContainer">
                <span class="mbri-right mbr-iconfont" aria-hidden="true"></span>
              </a>
              <a class="close" href="#" role="button" data-dismiss="modal">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

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
    <script src="functions.js"></script>
    <script src="popup.js"></script>
  </body>
</html>