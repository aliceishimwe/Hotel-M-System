
<?php
$msg="";
$conn=mysqli_connect("localhost","root","","hotel");
session_start();
if (isset($_POST['login'])) 
{
	$email=$_POST['email'];
	$password=$_POST['password'];

$sql="SELECT name,email,password FROM users WHERE email='$email' AND password='$password'";
$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res)) 
{
  if($result = mysqli_query($conn,$sql)){
    while ($row=mysqli_fetch_row($result)){ 
	$_SESSION['user']=$row[0];
}
}
	header("location:index.php");
}
else
{
	$msg="Incorrect email or password";
}
}


?>


<!DOCTYPE html>
<html>
  <head>
    <title>FourStep Hote</title>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="auth.css" />
    <meta name="viewport" content="width =device-width, initial-scale=1" />
  </head>
  <body>
    <header>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="menu.html">Menu</a></li>
        <li><a href="order.php">Order</a></li>
        <li><a href="image.html">Gallery</a></li>
         <!-- <li><a href="register.php">Register</a></li> -->
        <li><a href="login.php">Login</a></li>
       
      </ul>
    </header>
    <!-- <section id="banner"> -->
    <!-- <div class="banner-text">
        <h1>FourStep Hotel</h1>

        <div class="banner-btn">
          <a href="#service"><span></span>Find Out</a>
          <a href="#footer"><span></span>Read More</a>
        </div>
      </div> -->
    <!-- </section> -->

    <section id="features">
      <h1>Login here</h1>
      <form method="POST">
      <div style="color:red"><?php  if ($msg) {echo $msg;}  ?></div>

        <div>
          <label for="email">Email</label>
          <input type="text" name="email" autocomplete="off" placeholder="Enter email here..." />
        </div>
        <div>
          <label for="password">Password</label>
          <input type="password" name="password"  autocomplete="off"placeholder="Enter password here...." />
        </div>

        <div>
          <button name="login">Login</button>
        </div>
      </form>

      <div>
        <p>
          <!-- Create free account here -->
          <!-- <a href="register.php">here</a> -->
        </p>
      </div>
    </section>
    <!-- service -->

    <!-- foooter -->
  </body>
</html>
