<?php
//  include("connect.php");
 include("server.php");
 
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/register.css">
    <script defer src="script/script.js"></script>

    <title>Register</title>
</head>
<body>




      <div class="topleft">Petal by Post</div>

      <nav>
              <img src="images/logo.png"  class="logo" >
          <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="index.php#section2">Products</a></li>
              <li><a href="about.html">About Us</a></li>
              <li><a href="register.php">Register</a></li>
              <li><a href="login.php">Login</a></li>
          </ul>
      </nav>
  </div>


 
 <form method="post" action="register.php" id="section4">
 <div class="container">


 <?php include('errors.php'); ?>
<div class="input-group">
   <h1>Register</h1>
   <label>Full name</label>
   <input type="full_name" name="full_name" placeholder="Enter your full name" value="<?php echo $full_name; ?>">
 </div>
<div class="input-group">
   <label>Phone Number</label>
   <input type="phone_number" name="phone_number" placeholder="Enter your phone number" value="<?php echo $phone_number; ?>">
 </div>
 <div class="input-group">
   <label>Username</label>
   <input type="text" name="username" placeholder="Enter your username" value="<?php echo $username; ?>">
 </div>
 <div class="input-group">
   <label>Email</label>
   <input type="email" name="email" placeholder="Enter your Email ID" value="<?php echo $email; ?>">
 </div>
 <div class="input-group">
   <label>Password</label>
   <input type="password" name="password_1" placeholder="Enter your password">
 </div>
 <div class="input-group">
   <label>Confirm password</label>
   <input type="password" name="password_2" placeholder="Confirm your password">
 </div>


 <div class="input-group">
   <button type="submit" class="btn" name="reg_user">Register</button>
 </div>
 <p>
   Already a member? <a href="login.php">Sign in</a>
 </p>
</form>



</body>
</html>