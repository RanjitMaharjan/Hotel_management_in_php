<?php 
include('Menu Bar.php');
include('connection.php');
if($eid=="")
{
header('location:Login.php');
}
$sql= mysqli_query($con,"select * from room_booking_details where email='$eid'  "); 
$result=mysqli_fetch_assoc($sql);
//print_r($result); 
extract($_REQUEST);
error_reporting(1);
if(isset($saverate))
{
  $sql= mysqli_query($con,"select * from rating where email='$email' and room_type='$room_type' ");
  if(mysqli_num_rows($sql)) 
  {
  $msg= "<h1 style='color:red'>You have already rated</h1>";    
  }
  else
  {
   $sql="insert into rating(email,room_type,ratings) 
  values('$email','$room_type','$ratings')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:blue'>You have Successfully rated</h1>"; 
   }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>RoadStar Hotel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
 <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body  {
  background-image: url("image/bg2.jpg");
  margin-top: 150px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
  </style>

</head>
<body style="margin-top:50px;">
 
<div class="container-fluid text-center"><!--Primary Id-->
  
  <div class="container">
    <div class="row">
      <?php echo @$msg; ?>
      <!--Form Containe Start Here-->
     <form class="form-horizontal" method="post">
       <div class="col-sm-6">
         
      

        <div class="form-group">
          <h1 class="text-center text-primary"> Rating </h1><br>
          <div class="row">
           <div class="control-label col-sm-4"><h4>Email :</h4></div>
          <div class="col-sm-7">
              <input type="email" value="<?php echo $result['email']; ?>"  class="form-control" name="email"  placeholder="Enter Your Email-Id"required/>
          </div>
        </div>
        </div>
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-4"><h4>Room Type:</h4></div>
                  <div class="col-sm-7">
                <select class="form-control" name="room_type"required>
                  <option>---------</option>
                  <?php
            include('connection.php');
            $sql1=mysqli_query($con,"select * from room_booking_details where email='$eid' ");
           while($result1= mysqli_fetch_assoc($sql1))
           {

            ?><option>
            <a href="room_booking_details?room_type=<?php echo $result1['room_type']; ?>"><?php echo $result1['room_type']; ?></a><hr></option>
            <?php } ?>
               </select>
              </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-4"><h4>ratings</h4></div>
                  <div class="col-sm-7">
                  <input type="number" name="ratings" min="1" max="5" class="form-control"required>
                  </div>
              </div>
            </div>
            <input type="submit"value="rated" name="saverate" class="btn btn-danger center">
           </div>
          </form>
          <br>
          <br>
        </div>
      </div>
    </div>



</body>
</html>
