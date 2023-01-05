<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <?php 
include('connection.php');
extract($_REQUEST);
if(isset($send))
{
mysqli_query($con,"insert into feedback values('','$n','$e','$mob','$msg')"); 
$msg= "<h4 style='color:green;'>feedback sent successfully</h4>";
}
?>
<!-- Footer1 Start Here-->

<footer style="background-color: #393939;">
    <div class="container-fluid">
  <div class="col-sm-4 hov">
    <img src="logo/logo.png"width="200px"height="50px"/><br><br>
    <p class="text-justify">Broadly speaking, a hotel is a managed building or establishment, which provides guests with a place to stay overnight – on a short-term basis – in exchange for money. The precise features and services provided to guests can vary quite drastically from one hotel to another, and hotel owners generally aim to attract a particular type of customer through their pricing model and marketing strategy, or via the range of services they offer.</p><br>
      <center><a href="about.php" class="btn btn-danger"><b>Read More..</b></a></center><br><br><br>
 <?php
  include('Social ican.php')
?>
  </div>&nbsp;&nbsp;
  <div class="col-sm-4 text-justify">
         <h3 style="color:#cdd51f;">Contact Us</h3>
      <p style="color:white;"><strong>Address:&nbsp;</strong>Khokana Rd, Karyabinayak, Nepal</p>
      <p style="color:white;"><strong>Email-Id:&nbsp;</strong>hotelroadstar@gmail.com</p>
      <p style="color:white;"><strong>Contact Us:&nbsp;</strong>987654321</p><br><br><br>
  </div>&nbsp;

  <!--Feedback Start Here-->
  <div class="col-sm-4 text-center">
      <div class="panel panel-primary">
        <div class="panel-heading">Feedback</div>
          <div class="panel-body">
            <?php echo @$msg; ?>
      <div class="feedback">
      <form method="post"><br>
        <div class="form-group">
          <input type="text" name="n" class="form-control" id="#"placeholder="Enter Your Name"required>
        </div>
        <div class="form-group">
          <input type="Email" name="e" class="form-control" id="#"placeholder="Email"required>
        </div>
        <div class="form-group">
          <input type="Number" name="mob" class="form-control" id="#"placeholder="Mobile Number"required>
        </div>
        <div class="form-group">
          <textarea type="Text" name="msg" class="form-control" id="#"placeholder="Type Your Massage"required></textarea>
        </div>
        
          <input type="submit" value="send" name="send" class="btn btn-primary btn-group-justified"required>
      </form>     
        </div>
       </div>
      </div>
    </div>

    <!--Feedback Panel Close here-->

  </div>
</footer>
<!--Footer1 Close Here-->


  </body>
</html>