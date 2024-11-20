<?php
$conn=mysqli_connect("localhost","root","","hotel");
if (isset($_POST['order'])) 
{
	$name=$_POST['name'];
	$email=$_POST['email'];
  $phone=$_POST['phone'];
  // $date=$_POST['date'];
  $address = $_POST['address'];
	$chips=$_POST['chips'];
	$pizza=$_POST['pizza'];
	$beef=$_POST['beef'];
  $drinks=$_POST['drinks'];
  

	$insert = "INSERT INTO ordertb (name, email, phone,address,chips,pizza,beef,drinks) 
	VALUES ( '$name', '$email','$phone','$address','$chips','$pizza','$beef','$drinks')";
	
	$res=mysqli_query($conn,$insert);
	if ($res) 
	{
		echo "<script> alert('Your Order have Sent Successfull!!'); </script>";
	}
	else
	{
		echo "<script> alert('fail'); </script>";
		// echo "fail";
	}



}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>FourStep Hote</title>

    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="order.css" />
    <meta name="viewport" content="width =device-width, initial-scale=1" />
  </head>
  <body>
    <header>
      <!-- <nav> -->
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="menu.html">Menu</a></li>
        <li><a href="order.php">Order</a></li>
        <li><a href="image.html">Gallery</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="login.php">Login</a></li>
        <!-- <li><a href="register.php">Register</a></li> -->
      </ul>
      <!-- </nav> -->
    </header>
    <!-- <section id="banner">
      <div class="banner-text">
        <h1>FourStep Hotel</h1>
        <p>We provide better Service At all</p>

        <div class="banner-btn">
          <a href="#service"><span></span>Find Out</a>
          <a href="#footer"><span></span>Read More</a>
        </div>
      </div>
    </section> -->

    <!-- Gallery -->
    <section class="section">
      <h1>Order Form</h1>
      <div class="container form-container">
  <form method="POST">
            <label for="">Names</label>
            <input type="text" name="name" autocomplete="off" placeholder="full names" required>
            <label for="">Email</label>
            <input type="email" name="email"  autocomplete="off" placeholder="Email" required>
            <label for="">Phone</label>

            <input type="text" name="phone" autocomplete="off" placeholder="+xxx xxxx xxx">
            <label for="">Address</label>
            <input type="text" name="address" autocomplete="off" placeholder="Address like kacyiru Kigali, Rwanda">

			<h3>Foods</h3>
			<label for="">Chips</label>
			<select name="chips">
							<option> CHIPS </option>
                           <option>Chips masala</option> 
                           <option>Standard Cut Fries</option> 
                           <option>Waffle Fries</option> 
                           <option>Curly Fries</option> 
                           <option>Shoestring</option> 
                           <option>Steak Fries</option> 
            </select>
			<label for="">fish</label>
			 <label for="">Pizza</label>
			 <select name="pizza"> 
							<option> PIZZA </option>
                                    <option >Neapolitan Pizza</option> 
                                    <option>New York-Style Pizza</option> 
                                    <option>Chicago Style Pizza</option> 
                                    <option>Greek Pizza</option> 
                                    <option>Sicilian Pizza</option> 
                                    <option>Louis Pizza</option> 
            </select>
			<label for="">Beef</label>
			<select name="beef">
							<option> BEEF </option>
                                <option>Tender</option> 
                                <option> Tough Cuts</option> 
                                <option>Chuck</option> 
                                <option>Brisket </option> 
                                <option>Rib</option> 
                                <option>Flank </option> 
                             </select>
			<h3>Drinks</h3>
			<label for="">drinks</label>
			<select name="drinks">
							<option> DRINKS </option>
                                <option>Citrus drinks</option> 
                                <option>Fanta</option> 
                                <option>energy drinks</option> 
                                <option>milk</option> 
                                <option>soda</option> 
                                <option>fresh juice</option> 
            </select>
            <button type="submit" name="order" class="btn">Order Now</button>
        </form>
      </div>
    </section>

    <!-- foooter -->

    <section id="footer">
      <div class="title-text">
        <p>CONTACT</p>
        <h1>VIST HOTEL TODAY</h1>
      </div>

      <div class="footer-row">
        <div class="footer-left">
          <h1>Opening hours</h1>
          <p><i class="fa fa-clock-o"> </i>monday to friday - 9am to 9pm</p>
          <p><i class="fa fa-clock-o"> </i>saturday and sunday - 8am to 11pm</p>
        </div>
        <div class="footer-right">
          <h1>Get in touch</h1>
          <p>#30 abc kigali, KG456 city in <i class="fa fa-map-marker"></i></p>
          <p>FourStepHotel@gmail.com <i class="fa fa-paper-plane"></i></p>
          <p>+250 788 754 690 <i class="fa fa-phone"></i></p>
        </div>
      </div>

      <div class="sociol-media">
        <p>copyright by &copy;FourStep Hotel</p>
      </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
