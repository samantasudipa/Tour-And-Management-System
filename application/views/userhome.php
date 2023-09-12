 
<!DOCTYPE html>
<html id="ht1">
<title>Home Page</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">
</head>

<body id="b1">
<header>
  <center><h1>The Travel Warrior</h1></center>
</header>
<div style="background-color: grey;">
    <marquee behavior="scroll" direction="right" style="color: yellow;">Welcome to The Tour Warrior</marquee>
  </div><br>

  <div > 
    <ul>
      <?php 
      if($email == "") {
        ?>
        <li><a href="<?php echo base_url().'index.php/User_Controller/userlogin'?>">Login</a></li>
      <li><a href="<?php echo base_url().'index.php/User_Controller/savedata'?>">Register</a></li>
      <?php
      } else {
        ?>
         <li><a href="<?php echo base_url().'index.php/User_Controller/logout'?>">Logout</a></li>
         <?php
      }
      ?>
      <li><a href="<?php echo base_url().'index.php/User_Controller/feedbackdata'?>" >Feedback</a></li>
      <li><a href="<?php echo base_url().'index.php/User_Controller/changepassword'?>">Change Password</a></li>
      <li><a href="<?php echo base_url().'index.php/User_Controller/navigation'?>">Home</a></li>
    </ul>

    <img src="<?php echo base_url()?>image/abhishek-kumar-KWebCVJNvRU-unsplash.jpg"  style="width:100%;">
    <br><br>
      <form method="post" >
     <div class="split">
    <p style="background-color: #616a85;color: black;"></p>
    </div>
 <div style="background-color:white;"><b><center>ALL PLACES</center></b></div><br>
    <center><img src="<?php echo base_url()?>image/CORBETT-NATIONAL-PARK (1).jpg" height="250" width="300">
    <img src="<?php echo base_url()?>image/naini 4.jpg" height="250" width="300">
    <img src="<?php echo base_url()?>image/naini 5 - Copy.jpg" height="250" width="300">
    <img src="<?php echo base_url()?>image/naini 8.jpg" height="250" width="300">
    <img src="<?php echo base_url()?>image/abdullah-alam-PbJka16Byf0-unsplash.jpg" height="250" width="300"></center>
    <br><br>

    
   
    <div style="background-color:#d3dae3;"><b><center>ROUTE DETAILS</center></b></div><br>
    <p id="p1">You can reach Kathgodam Railway Station by train and it is 23 km away from Nainital. Any Major city of India has trains to Kathgodam railway station. A popular Train called Ranikhet Express runs from New Delhi & Kathgodam. After reaching there you can take a bus to reach Nainital.
There are many renowned personalities who are either born here or have been associated with Nainital. Jim Corbett, author, and conservationist, was born in Nainital and was also educated here. Jim Corbett National Park in the vicinity is named after him, which is also the first National Park of India. Anoop Jalota, a popular classical singer and cricketer Manish Pandey were born in Nainital. Major Somnath Sharma, India’s first Param Vir Chakra awardee as well as legendary actor Amitabh Bachchan were educated at Sherwood College of Nainital.</p>
<br><br>

   <div style="background-color:#dcd5e0;"><b><center>HOW TO REACH</center></b></div><br>
     <center><img src="<?php echo base_url()?>image/Train_Image.jpg" height="300" width="500">
     <img src="<?php echo base_url()?>image/Flight_Image.jpg" height="300" width="500">
     <img src="<?php echo base_url()?>image/Bus_Image (1).jpg" height="300" width="500"></center>
</div>
<br><br>
<p id="p2"><b>Nearest Airport</b>: Pantnagar Airport, Pantnagar

How to reach Nainital by Rail
Nainital has also The nearest Railway Station from Nainital is Kathgodam Railway Station, located at a distance of 24 Kms from the city. Kathgodam Railway Station is connected to the major cities of Uttrakhand. It is linked with the cities like New Delhi, Dehradun, Lucknow, Kanpur, Jammu and Kolkata via Anvt Kgm Sht, Utr Samprk K Express, Bagh Express and Kgm Garib Rath.

How to reach Nainital by Road
Nainital is 23 Kms from Kathgodam, 34 Kms from Ramgarh, 55 Kms from Ranikhet, 62 Kms from Almora, 63 Kms from Ramnagar, 165 Kms from Chandpur, 196 Kms from Kotdwara, 223 Kms from Haridwar, 242 Kms from Rishikesh, 275 Kms from Dehradun and is linked through Uttrakhand State Road Transport Corporation (USRTC) and some private travel services.</p>
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
        
      <a href="<?php echo base_url().'index.php/User_Controller/logindata'?>" >Login</a><br>
     <a href="<?php echo base_url().'index.php/User_Controller/about'?>">About us</a><br>
     <a href="<?php echo base_url().'index.php/User_Controller/savedata'?>">Register</a>
         
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

   </form>
</div>
</body>
</html>
