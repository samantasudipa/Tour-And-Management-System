<!DOCTYPE html>
<html id="ht1">
<title>Hotel Details Update</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">
</head>
<body id="b1">
<header>
  <center><h1>The Travel Warrior</h1></center>
</header>

     <ul>
      <li><a href="<?php echo base_url().'index.php/Home_Controller/logout'?>" >Logout</a></li>
      <li><a href="<?php echo base_url().'index.php/Home_Controller/feedback_display'?>" >Feedback details</a></li>
      <li><a href="<?php echo base_url().'index.php/Home_Controller/enquiry_display'?>">Enquiry details</a></li>
      <li><a href="<?php echo base_url().'index.php/Home_Controller/routedata'?>">Route details insert</a></li>
       <li><a href="<?php echo base_url().'index.php/Home_Controller/route_display_data'?>">Route details</a></li>
       <li><a href="<?php echo base_url().'index.php/Home_Controller/hoteldata'?>">Hotel details insert</a></li>
       <li><a href="<?php echo base_url().'index.php/Home_Controller/hotel_display'?>">Hotel details</a></li>
       <li><a href="<?php echo base_url().'index.php/Home_Controller/booking_details_update'?>">User Booking details</a></li>
       <li><a href="<?php echo base_url().'index.php/Home_Controller/Fooddata'?>">Food details insert</a></li>
       <li><a href="<?php echo base_url().'index.php/Home_Controller/food_display'?>">Food Booking details</a></li>
       <li><a href="<?php echo base_url().'index.php/Home_Controller/adminprofile'?>">My profile</a></li>
       <li><a href="<?php echo base_url().'index.php/Home_Controller/homedata'?>">Home</a></li>
    </ul>
    <img src="<?php echo base_url()?>image/waldemar-brandt-yzwKXsjYyDk-unsplash.jpg"  style="width:100%;" class="bg-img">

  <form method="post" >

    <br><br><br>
    <div class="ex">
       <?php
  foreach ($data as $row)
  {
    ?>
      <h2>Hotel Details modification</h2><br><br>
      <label for="hotel"><b>Hotel name</b></label>
    <input type="text" placeholder="Enter Name" name="hotel" value="<?php echo $row->hotel_name?>" required><br><br>

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" value="<?php echo $row->address?>" required><br><br>
    <label for="loc"><b>Location</b></label>
    <input type="text" placeholder="Location" name="loc" value="<?php echo $row->location?>" required><br><br>

    <label for="mobile"><b>Contact Number</b></label>
    <input type="text" placeholder="Enter Contact Number" name="mobile" value="<?php echo $row->phone_no?>" required><br><br> 

    <label for="room_type"><b>Room type</b></label><br>
    <select id="q1" name="room_type">
      <option>Select</option>
      <option value="AC"  <?php if($row->room_type=='AC'){echo "selected";}?>>AC</option>
      <option value="NON AC"  <?php if($row->room_type=='NON AC'){echo "selected";}?>>NON AC</option>
    </select><br><br>
    <label for="room_avl"><b>Room available</b></label><br>
    <select id="q1" name="room_avl">
      <option>Select</option>
      <option value=12  <?php if($row->room_available==12){echo "selected";}?>>12</option>
      <option value=23 <?php if($row->room_available==23){echo "selected";}?>>23</option>
      <option value=51 <?php if($row->room_available==51){echo "selected";}?>>51</option>
      <option value=30 <?php if($row->room_available==30){echo "selected";}?>>30</option>
    </select><br><br>

   <input type="submit" class="btn" name="submit" value="submit">
    <?php
  }
  ?>
    </div>
    <br><br><br>


    
   </form>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="footer-clean">
    <footer>
      <div class="container">
      <div class="row justify-content-center">
       <div class="col-sm-4 col-md-3 item">
         <h3>Services</h3>
          
            <a href="<?php echo base_url().'index.php/Home_Controller/adminprofile'?>">My profile</a><br>
          <a href="<?php echo base_url().'index.php/Home_Controller/homedata'?>">Home</a><br>
           <a href="<?php echo base_url().'index.php/Home_Controller/feedback_display'?>" >Feedback details</a>
         
          </div>
             <div class="col-sm-4 col-md-3 item">
          <h3>Quick link</h3>
        
      <a href="<?php echo base_url().'index.php/Home_Controller/logindata'?>" >Login</a><br>
     <a href="<?php echo base_url().'index.php/Home_Controller/about'?>">About us</a><br>
     <a href="<?php echo base_url().'index.php/Home_Controller/savedata'?>">Register</a>
         
         </div>
       <div class="col-sm-4 col-md-3 item">
       <h3>Contact us</h3>
    
      <p>Call us: 033 12345678</p>
     <p>Email:tour&management@gmail.com</p>
    <p>Address: Kolkata, Westbengal, India</p>
   

        </div>
      <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
      <p class="copyright">The Travel Warrior © 2022</p>
         </div>
     </div>
    </div>
   </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>
</html>
