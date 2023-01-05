<?php 
session_start();
error_reporting(1);
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head><!--Head Open  Here-->
  <title>RoadStar Hotel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
  <link href="css/style.css"rel="stylesheet"/>
</head> <!--Head Open  Here-->
<body style="margin-top:50px;">
  <?php
      include('Menu Bar.php')
  ?>


<?php
	
include('connection.php');
include('recommend.php');

$rooms=mysqli_query($con,"select * from rating");
$matrix = array();
while($room = mysqli_fetch_array($rooms)){


	$matrix[$room['email']][$room['room_type']]=$room['ratings'];
}



// echo "<pre>";
// print_r($matrix);
// echo "</pre>";

  ?>

  <div class="container-fluid"id="red"><!--Id Is Red--> 
<div class="container text-center">    
  <h1>These are  <font color="#a6e22b;"><b>Recomendation for you</b></font></h1><hr><br>
  <div class="row">
    <div class="hov"><!--Hov is Class-->
    
  
  <?php 
    $recomendation= array();

    $recomendation=getRecomendation($matrix,"$eid");
      foreach($recomendation as $rooms=>$ratings){
        $sql=mysqli_query($con,"select * from rooms where type='$rooms'");
  while($r_res=mysqli_fetch_assoc($sql)){

  ?>
  <div class="col-sm-4">
      <img src="image/rooms/<?php echo $r_res['image']; ?>"class="img-responsive thumbnail"alt="Image"id="img1"> <!--Id Is Img-->
      <h4 class="Room_Text">[ <?php echo $r_res['type']; ?>]</h4>
      <p class="text-justify"><?php echo substr($r_res['details'],0,100); ?></p><br>
      <a href="room_details.php?room_id=<?php echo $r_res['room_id']; ?>" class="btn btn-danger text-center">Read more</a><br><br>
            </div>
          <?php } ?>
          <?php } ?>
  </div>
  </div>
</div>
</div>
<?php
  include('Footer.php')
?>

  </body>
</html>