<!DOCTYPE html>
<html id="ht1">
<title>Route Details Update</title>
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
    <img src="<?php echo base_url()?>image/nainital-city-map.gif"  style="width:100%;" class="bg-img">

  <form method="post" >

    <br><br><br>
    <div class="ex">
       <?php
  foreach ($data as $row)
  {
    ?>
      <h2>Route Details modification</h2><br><br>
      <label for="hotel"><b>Hotel name</b></label>
    <label for="from"><b>From</b></label>
    <input type="text" placeholder="From" name="from" value="<?php echo $row->from?>" required><br><br>

    <label for="to"><b>To</b></label>
    <input type="text" placeholder="To" name="to" value="<?php echo $row->to?>"  required><br><br>

    <label for="fare"><b>Fare</b></label>
    <input type="text" placeholder="Fare" name="fare" value="<?php echo $row->fare?>"  required><br><br>

    <label for="rev"><b>Reservation type</b></label><br> 
    <select id="q1" name="rev">
      <option>Select</option>
      <option value="Car" <?php if($row->reserv_type=='Car'){echo "selected";}?>>Car</option>
      <option value="Bus" <?php if($row->reserv_type=='Bus'){echo "selected";}?>>Bus</option>
    </select><br><br>

    <label for="pick"><b>Pick up</b></label>
    <input type="text" placeholder="pick up" name="pick"  value="<?php echo $row->pickup_point?>" required><br><br>

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
