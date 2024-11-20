<?php
$msg="";
if (isset($_POST['send'])) {
$con=mysqli_connect("localhost","root","","hotel");
$names=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$location=$_POST['location'];
$message=$_POST['message'];
$insert="INSERT INTO contact(name,email,phone,location,message) VALUES('$name','$email','$phone','$location','$message')";
$res=mysqli_query($con,$insert);
if($res)
{
	$msg="Message send success";
	header("location:index.php");
}
else
{
  echo "alert('not send')";
	// echo "fail";
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
        <li><a href="contact.php">Contact Us</a></li>

        
        
        <?php
         session_start();
        //  if($_SESSION["user"]){
           ?>
        <li><a href="allorder.php">All order</a></li>
        <li><a href="allquestion.php">All Questions</a></li>
        <?php
        //  }
        ?>
      </ul>
      <ul>

       <?php
            if($_SESSION["user"]) {
            ?>
              <li>
          <a href="##"><?php
          echo $_SESSION["user"];  ?>
        </a>
        </li>
              <li><a  href="logout.php" class="logout" >Logout</a> </li>
            <?php 
            }
            else
            {
            ?>
              <li><a href="login.php">Login</a></li>
              <!-- <li><a href="register.php">Register</a></li> -->
              <?php
            }
            ?>
       
      </ul>
    </header>

    <!-- service -->

    <section id="features">
      <h1>Contact Us</h1>

      <form  method="POST">
        <div>
          <label for="name">Full name</label>
          <input type="text"  name="name"  autocomplete="off" placeholder="Enter name here..." />
        </div>
        <div>
          <label for="email">Email</label>
          <input type="text" name="email"   autocomplete="off" placeholder="Enter email here..." />
        </div>
        <div>
          <label for="phone">Phone</label>
          <input type="text"  name="phone"  autocomplete="off" placeholder="+xxxxxxxxxxxx" />
        </div>
          <div>
            <label for="password">Location</label>
            <input type="text" name="location"  autocomplete="off" placeholder="Enter like kacyiru, Kigali Rwanda" />
          </div>
          <div>
            <label for="message">Message</label>
            <textarea name="message" id="message" ></textarea>
          </div>
          <br />
        <div>
          <input type="submit" name="send" value="send" />
        </div>
      </form>
      <div>
        <p>
          Login if you have account
          <a href="login.php">here</a>
        </p>
      </div>
    </section>

    <!-- foooter -->
  </body>
</html>
