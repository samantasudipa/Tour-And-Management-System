<!DOCTYPE html>
<html id="ht1">
<head>
  <title>Food</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">
</head>
<body id="b1">
<header>
  <center><h1>Food Information</h1></center>
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
    <img src="<?php echo base_url()?>image/brooke-lark-HlNcigvUi4Q-unsplash.jpg"  style="width:100%;" class="bg-img">

    <br><br><br>

    <div style="background-color: #ebf593;">
    <center><h1>Food Details</h1></center><br>

  <center><table border="1" cellpadding="20" bgcolor="cyan">
  <tr>
    <th>Hotel name</th>
    <th>Address</th>
    <th>location</th>
    <th>Phone number</th>
    <th>Food type</th>
  
  </tr>
  <?php
  foreach($data as $row)
  {
    ?>
    <tr>
      <td><?php echo $row->hotel_name?></td>
      <td><?php echo $row->address?></td>
      <td><?php echo $row->location?></td>
      <td><?php echo $row->phone_no?></td>
      <td><?php echo $row->food_type?></td>
      </td>
    </tr>
  <?php
   }
  ?>
</table></center>

 <br><br><br>

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
    
      <p>Call us: 8695736620,8293397262</p>
     <p>Email: nainital@gmail.com</p>
    <p>Address: Nainital Tours & Package,The Mall, Mallital,The Mall, Mallital  Nainital - 263001,Uttarakhand, India</p>
   

        </div>
      <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
      <p class="copyright">Tour & Travels © 2021</p>
         </div>
     </div>
    </div>
   </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script></body>
</head>


</body>
</html>
