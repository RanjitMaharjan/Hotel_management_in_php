<!DOCTYPE html>
<html lang="en">
<head>
  <title>RoadStar Hottel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
    .*{
      margin: 0px;
    }
    body  {
  background-image: url("image/bg2.jpg");
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
</head>
<body >
<?php
      include('Menu Bar.php')
  ?><br>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/slider/slider2.jpg" alt="First slide" style="height: 450px; width: 100%;">
      <div class="bottom-left">
        <h1>ABOUT US</h1>
      </div>
      <div class="bottom-right">
        <div style="float: left;"><a href="index.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Home</a>> About us</div>
      </div>
    </div> 
  </div>
</div>

<div class="container-fluid text-center">
<div class="container"> 
  <div class="row content">
    <div class="col-sm-6">
      <h1 id="font"> RoadStar Hotel </h1><hr>
      <p class="text-justify">Broadly speaking, a hotel is a managed building or establishment, which provides guests with a place to stay overnight – on a short-term basis – in exchange for money. The precise features and services provided to guests can vary quite drastically from one hotel to another, and hotel owners generally aim to attract a particular type of customer through their pricing model and marketing strategy, or via the range of services they offer.

The precursor to the modern hotel was the inn of medieval Europe. For a period of about 200 years from the mid-17th century, coaching inns served as a place for lodging for coach travelers. Inns began to cater to richer clients in the mid-18th century. One of the first hotels in a modern sense was opened in Exeter in 1768. Hotels proliferated throughout Western Europe and North America in the early 19th century, and luxury hotels began to spring up in the later part of the 19th century.
Hotel operations vary in size, function, complexity, and cost. Most hotels and major hospitality companies have set industry standards to classify hotel types. An upscale full-service hotel facility offers luxury amenities, full service accommodations, an on-site restaurant, and the highest level of personalized service, such as a concierge, room service, and clothes pressing staff. Full service hotels often contain upscale full-service facilities with a large number of full service accommodations, an on-site full service restaurant, and a variety of on-site amenities. Boutique hotels are smaller independent, non-branded hotels that often contain upscale facilities. Small to medium-sized hotel establishments offer a limited amount of on-site amenities. Economy hotels are small to medium-sized hotel establishments that offer basic accommodations with little to no services. Extended stay hotels are small to medium-sized hotels that offer longer-term full service accommodations compared to a traditional hotel.</p>
</div>
 <div class="col-sm-6"><hr>
  <img src="image/rooms/room6.jpg" alt="img1 Not Show" style="height: 500px; width: 100%; float: right; z-index: 100; border: none; border-radius: 25%; margin-top:  30px;">
  </div>
  </div><br><br>


    
  <div class="row"align="center">
    <div class="contact">
      <h1 align="center"id="font"> Contacts </h1><br>
    </div>
    <hr>
  <!--map Start Here-->
  <div class="col-sm-2"style="background-color:#27303b;height:80px;width:100px;">
      <a href="#" type="button" data-toggle="modal" data-target="#myModal"><img src="image/icon/icon-01.png"width="60px;"height="50px;"style="margin-top:15px;"></a>
  </div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <iframe class="frame"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4952.903368838241!2d85.29678101752!3d27.637711010474497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb17963566b139%3A0x5686b1fc6d201acf!2sKhokana%20Bus%20Park!5e0!3m2!1sen!2sus!4v1652783741295!5m2!1sen!2sus" width="550"height="300" frameborder="0" style="border:1" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>     

<!--Map Close Here-->
        <div class="col-sm-2">
          <h4><b>Address</b></h4>
          <b>Khokana Rd, Karyabinayak, Nepal</b>
        </div>
        <div class="col-sm-2"style="background-color:#27303b;height:80px;width:100px;">
            <a href="#"><img src="image/icon/icon-02.png"width="60px;"height="50px;"style="margin-top:15px;"></a>
        </div>
         <div class="col-sm-2">
          <h4><b>Phone</b></h4>
              <b>987654321</b>
        </div>
        <div class="col-sm-2"style="background-color:#27303b;height:80px;width:100px;">
            <a href="#"><img src="image/icon/icon-03.png"width="60px;"height="50px;"style="margin-top:15px;"></a>
        </div>
         <div class="col-sm-2">
          <h4><b>Email-Id</b></h4>
              <b>hotelroadstar@gmail.com</b>
        </div>
  </div><br><br>
</div>
</div>
<?php
  include('Footer.php')
?>
</body>
</html>
