<!DOCTYPE html>
<html id="ht1">
<head>
  <title>Admin Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body id="b1">
<header>
  <center><h1>User Details</h1></center>
</header>
<br><br>
<table id="customers">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Contact No.</th>
    <th>Gender</th>
    <th>Role</th>
    <th>Options</th>
  </tr>
  
    <?php foreach($userDetails as $user) {
      ?><tr><td><?php echo $user->name; ?></td><?php
      ?><td><?php echo $user->email; ?></td><?php
      ?><td><?php echo $user->address; ?></td><?php
      ?><td><?php echo $user->contact_no; ?></td><?php
      ?><td><?php echo $user->gender; ?></td><?php
      ?><td><?php if($user->role == 1) { echo "Admin"; } else {echo "User"; } ?></td>
      <td><div class="dropdown">
  <button class="dropbtn">Options</button>
  <div class="dropdown-content">
    <a onclick="deleteUser(<?php echo $user->serial_no; ?>)">Delete</a>
  </div>
</div></td>
      </tr><?php
    }
?>
  
</table>
<br><br>

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


  </form>


<script type="text/javascript">
  function deleteUser(userID) {
    if (confirm('Are you sure you want to Delete this User?')) {
      window.location.href = "<?php echo site_url('admin_controller/deleteUser/'); ?>"+userID;
    } else {
      location.reload();
    }
  }
</script>

</body>
</html>
