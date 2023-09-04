<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Login</title>
</head>
<body>
    

    <div class="login" id="section5">


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


<div class="loginbg">
        <h1 class="head1">Login form </h1>
        <form  class="last" method="post" action="login.php">
        <?php include('errors.php'); ?>

            <!-- Headings for the form -->
            <div class="headingsContainer">
                <h2>Sign in</h2>
                <p class="signin">Sign in with your username and password</p>
            </div>
    
            <!-- Main container for all inputs -->
            <div class="mainContainer">
                <!-- Username -->
                <div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" placeholder="Enter your username">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" placeholder="Enter your password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
    </div>
        </form>
      </div>
    </div>

    



</body>
</html>