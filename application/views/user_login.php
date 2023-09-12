<!DOCTYPE html>
<html id="ht1">
<head>
  <button onclick="myFunction()"></button>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">
</head>
<body id="b1">
  <header>
  <center><h1><p><strong>The Travel Warrior </strong></p></h1></center>
</header>

<div > 
    <ul>
      <li><a href="<?php echo base_url().'index.php/User_Controller/userlogin'?>">Login</a></li>
      <li><a href="<?php echo base_url().'index.php/User_Controller/savedata'?>">Register</a></li>
      <li><a href="<?php echo base_url().'index.php/User_Controller/about'?>">About Us</a></li>
      <li><a href="<?php echo base_url().'index.php/User_Controller/contact_us'?>">Contact</a></li>
      <li><a href="<?php echo base_url().'index.php/User_Controller/navigation'?>">Home</a></li>
    </ul>
    <img src="<?php echo base_url()?>image/loginfinal2.jpg"  style="width:100%;" class="bg-img">

  <form method="post" >
    <br><br><br>
    <div class="ex">
      <body>
      <center><h1>Login</h1></center><br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email1"  required><br><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br><br> 

    <input type="submit" class="btn" name="submit" value="Login">
    </div>
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
        <!--  <h3>Services</h3>
          
           <a href="#">Hotel</a><br>
            <a href="#">Food</a><br>
           <a href="#">Camping</a> -->
         
          </div>
             <div class="col-sm-4 col-md-3 item">
          <h3>Quick link</h3>
        
      <a href="<?php echo base_url().'index.php/Home_Controller/logindata'?>">Login</a><br>
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
   
  </form>
</div>
</body>
</html>


