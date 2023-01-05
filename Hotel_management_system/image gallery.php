<!DOCTYPE html>
<html lang="en">
<head><!--Head Open  Here-->
  <title>RoadStar Hotel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
    body  {
  background-image: url("image/bg2.jpg");
  margin-top: 150px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.slide {
  position: relative;
  text-align: center;
  color: white;
}

/* Bottom left text */
.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 160px;
}
.bottom-right {
  position: absolute;
  bottom: 8px;
  right: 160px;
}

  </style>
</head> <!--Head Open  Here-->
<body style="margin-top:50px;"> 
  <?php
      include('Menu Bar.php')
  ?>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/slider/slider2.jpg" alt="First slide" style="height: 450px; width: 100%;">
      <div class="bottom-left">
        <h1>GALLARY</h1>
      </div>
      <div class="bottom-right">
        <div style="float: left;"><a href="index.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Home</a>> Gallary</div>
      </div>
    </div> 
  </div>
</div>

<div class="container">
  <h2>Image Gallery</h2><hr>
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="image/image gallery/1.jpg" target="_blank">
          <img src="image/image gallery/1.jpg" alt="img1 Not Show" style="width:100%;height:160px;">
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="image/image gallery/2.jpg" target="_blank">
          <img src="image/image gallery/2.jpg" alt="img2 Not Show" style="width:100%;height:160px;">
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="image/image gallery/3.jpg" target="_blank">
          <img src="image/image gallery/3.jpg" alt="img3 Not Show" style="width:100%;height:160px;">
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="image/image gallery/4.jpg" target="_blank">
          <img src="image/image gallery/4.jpg" alt="img4 Not Show" style="width:100%;height:160px;">
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="image/image gallery/5.jpg" target="_blank">
          <img src="image/image gallery/5.jpg" alt="img5 Not Show" style="width:100%;height:160px;">
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="image/image gallery/6.jpg" target="_blank">
          <img src="image/image gallery/6.jpg" alt="img6 Not Show" style="width:100%;height:160px;">
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="image/image gallery/7.jpg" target="_blank">
          <img src="image/image gallery/7.jpg" alt="img7 Not Show" style="width:100%;height:160px;">
        </a>
      </div>
    </div>
  </div>
</div>

</body>
</html>


