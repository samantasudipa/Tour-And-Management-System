<!DOCTYPE html>
<html id="ht1">
<title>Admin Login Page</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">
</head>
<body id="b1">

<header>
  <center><h1>The Travel Warrior</h1></center>
</header>

  <div > 
    <ul>
      <li><a href="<?php echo base_url().'index.php/Home_Controller/logindata'?>" >Login</a></li>
    </ul>
    <img src="<?php echo base_url()?>image/loginfinal.jpg"  style="width:100%;" class="bg-img">

  <form method="post">
    
    <br><br><br>
    <center><h1>Admin login</h1></center><br>

    <div class="ex">
      <h1>Login</h1>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email"  required><br><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br><br>

    <input type="submit" class="btn" name="submit" value="Login">
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
         <!-- <h3>Services</h3>
          
           <a href="#">Hotel</a><br>
            <a href="#">Food</a><br>
           <a href="#">Camping</a> -->
         
          </div>
             <div class="col-sm-4 col-md-3 item">
          <h3>Quick link</h3>
        
      <a href="<?php echo base_url().'index.php/User_Controller/logindata'?>" >Login</a><br>
     <a href="<?php echo base_url().'index.php/User_Controller/about'?>">About us</a><br>
     <a href="<?php echo base_url().'index.php/User_Controller/savedata'?>">Register</a>
         
         </div>
       <div class="col-sm-4 col-md-3 item">
       <h3>Contact Us</h3>
    
      <p>Call us: 033 12345678</p>
     <p>Email: tour&management@gmail.com</p>
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
  


</div>

</body>
</html>
