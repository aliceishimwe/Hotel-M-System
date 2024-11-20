<?php
$msg="";
if (isset($_POST['create'])) {
$con=mysqli_connect("localhost","root","","hotel");
$username=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$insert="INSERT INTO users(name,email,password) VALUES('$username','$email','$password')";
$res=mysqli_query($con,$insert);
if($res)
{
	$msg="Signup success";
	header("location:login.php");
}
else
{
	echo "fail";
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
        <li><a href="image.html">Order</a></li>
        <li><a href="menu.html">Gallery</a></li>
         <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </header>

    <!-- service -->

    <section id="features">
      <h1>Register here</h1>

      <form method ="POST">
      <div style="color:red"><?php  if ($msg) {echo $msg;}  ?></div>
        <div>
          <label for="name">Name</label>
          <input type="text" name="name"  autocomplete="off" placeholder="Enter name here..." />
        </div>
        <div>
          <label for="email">Email</label>
          <input type="text" name="email"  autocomplete="off" placeholder="Enter email here..." />
        </div>
        <div>
          <label for="password">Password</label>
          <input type="password" name="password"  autocomplete="off" placeholder="Enter password here...." />
        </div>

        <div>
          <button name="create">Register</button>
        </div>
      </form>
      <div>
        <p>
          Login if you have account
          <a href="login.html">here</a>
        </p>
      </div>
    </section>

    <!-- foooter -->
  </body>
</html>
