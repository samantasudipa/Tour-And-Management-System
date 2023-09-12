<!DOCTYPE html>
<html id="ht1">
<title>Booking</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">
</head>
<body id="b1">
<header>
  <center><h1>The Travel Warrior</h1></center>
</header>

     <ul>
      <li><a href="<?php echo base_url().'index.php/User_Controller/logout'?>">Logout</a></li>
      <li><a href="<?php echo base_url().'index.php/User_Controller/feedbackdata'?>" >Feedback</a></li>
      <li><a href="<?php echo base_url().'index.php/User_Controller/enquirydata'?>">Enquiry</a></li>
      <li><a href="<?php echo base_url().'index.php/User_Controller/changepassword'?>">Change Password</a></li>
      <li><a href="<?php echo base_url().'index.php/User_Controller/my_profile'?>">My Profile</a></li>
      <li><a href="<?php echo base_url().'index.php/User_Controller/user_routedisp'?>">Route</a></li>
       <li><a href="<?php echo base_url().'index.php/User_Controller/user_hotel_disp'?>">Hotels</a></li>
       <li><a href="<?php echo base_url().'index.php/User_Controller/user_booking'?>">Booking</a></li>
       <li><a href="<?php echo base_url().'index.php/User_Controller/view_my_booking'?>">My Booking details</a></li>
       <li><a href="<?php echo base_url().'index.php/User_Controller/user_food_display'?>">Food booking</a></li>
       <li><a href="<?php echo base_url().'index.php/User_Controller/userhome'?>">Home</a></li>
    </ul>
    <img src="<?php echo base_url()?>image/xps-7ZWVnVSaafY-unsplash.jpg"  style="width:100%;" class="bg-img">

  <form method="post" >

    <br><br><br>
    <div class="ex">
      <center><h2>Booking</h2></center><br>
       <?php
  foreach ($data as $row)
  {
    ?>
    <center><h2>Create Booking</h2></center><br>
    <label for="hotel_name"><b>Hotel Name</b></label>
    <input type="text"  name="hotel" value="<?php echo $row->hotel_name?>" required><br><br> 

    <label for="mobile"><b>Contact Number</b></label>
    <input type="text" placeholder="Enter Contact Number" name="mobile" value="<?php echo $row->phone_no?>" required><br><br> 

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter your register email id" name="email" value="<?php echo $row->phone_no?>" required><br><br>

    <label for="room_type"><b>Room type</b></label><br>
    <select id="q1" name="room_type">
      <option>Select</option>
      <option value="AC"  <?php if($row->room_type=='AC'){echo "selected";}?>>AC</option>
      <option value="NON AC"  <?php if($row->room_type=='NON AC'){echo "selected";}?>>NON AC</option>
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
          
              <a href="<?php echo base_url().'index.php/User_Controller/user_food_display'?>">Food</a><br>
           <a href="<?php echo base_url().'index.php/User_Controller/userhome'?>">Home</a><br>
           <a href="<?php echo base_url().'index.php/User_Controller/feedbackdata'?>" >Feedback</a>
         
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
