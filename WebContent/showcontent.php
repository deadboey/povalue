 <!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="main.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/4.4/">
</head>
<body>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">


        <?php

       include "connect.php";


       // Check connection
       if (!$connect) {
           die("Connection failed: " . mysqli_connect_error());
       }

       $sql = "SELECT id AS id, image AS image FROM images ORDER BY id";

       $result = mysqli_query($connect, $sql);

       while($row = mysqli_fetch_assoc($result)){

           $image_src = $row['image'];
           $image_id = $row['id'];



        ?>

        <div class="carousel-item">
            <img class="d-block w-100" src='<?php echo $image_src; ?>' alt='<?php echo $image_id; ?>' >
        </div>

        <?php

       }
       mysqli_close($connect);

        ?>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>