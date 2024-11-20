
<!DOCTYPE html>
<html>
  <head>
    <title>FourStep Hote</title>
    <link rel="stylesheet" href="index.css" />
    <meta name="viewport" content="width =device-width, initial-scale=1" />
  </head>
  <style type="text/css">
    .lgos{
      display: flex;
      margin-left: 60%;
    }
    .lgos img{
      margin-left: 20px;
    }
    .video-container{
      position: relative;
    }
    .video-logo{
      position: absolute;
      top: 10px;
      left: -10px;
      width: 200px;
      height: 10px;
      margin-left: 10px;
      margin-top: 10px;
    }
    .nav{
/*      height:auto;*/
    }
  </style>
  <body>
    <header>

    <div class="video-container">
    <!-- <video width="50px" height="50px" controls> -->
      <!-- <source src="f.mp4" type="video/mp4"> -->
    <!-- </video> -->
   
  </div>
      <ul class="nav" style="">
      <img src="image/A.png" class="" alt="" width="100" height="60" >
        <li><a href="#banner">Home</a></li>
        <li><a href="menu.html">Menu</a></li>
        <li><a href="order.php">Order</a></li>
        <li><a href="image.html">Gallery</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="allorder.php">All order</a></li>
        <li><a href="allquestion.php">All Questions</a></li>

        
             
        
        <?php
         session_start();
         if($_SESSION["user"]){
           ?>
        <li><a href="allorder.php">All order</a></li>
        <li><a href="allquestion.php">All Questions</a></li>
        <?php
         }
        ?>
        
        <!-- <div style="margin-left:-50px;"> -->
        <!-- <li><a href="register.php">Register</a></li> -->
              
        </div>
        <div style="margin-left:-500px;">
        <li><a href="login.php">Login</a></li>
        </div>
      
  
  

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
            
              <?php
            }
            ?>
       
      </ul>
    </header>

    <section id="banner">
      <div class="banner-text">
        <h1>FourStep Hotel</h1>

        <div class="banner-btn">
          <a href="#service"><span></span>Find Out</a>
          <a href="#footer"><span></span>Read More</a>
        </div>
      </div>
    </section>

    <section id="features">
      <div class="title-text">
        <p>FEATURES</p>
        <h1>WHY YOU CHOOSE US</h1>
      </div>
      <div class="feature-box">
        <div class="features">
          <h1>Affordable cost</h1>
          <div class="features-desc">
            <div class="features-icon">
              <i class="fa fa-inr"></i>
            </div>
            <div class="features-text">
              <p>
                Hotels Under US$30 Hotels Under US$20 Hotels Under US$10 Las
                Vegas hotels New York hotels Orlando hotels Myrtle Beach hotels
                Nashville hotels Chicago hotels New Orleans hotels Los Angeles
                hotels Miami hotels Maui hotels Book hotels internationally Cabo
                San Lucas hotels London hotels Paris hotels Barcelona hotels
                Cancun hotels Dubai hotels
              </p>
            </div>
          </div>
        </div>

        <div class="features-img">
          <img src="image/manuel-moreno-DGa0LQ0yDPc-unsplash.jpg" />
        </div>
      </div>
    </section>
    <!-- service -->

    <section id="service">
      <div class="title-text">
        <p>SERVICES</p>
        <h1>WE PROVIDE BETTER</h1>
      </div>
      <div class="service-box">
        <div class="single-service">
          <img src="image/food.jpeg" />
          <div class="overjohn"></div>
          <div class="service-desc">
            <h1>FOOD STAFF</h1>
            <hr />
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere,
              ut.
            </p>
          </div>
        </div>
        <div class="single-service">
          <img src="image/food1.jpeg" />
          <div class="overjohn"></div>
          <div class="service-desc">
            <h1>BED STAFF</h1>
            <hr />
            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
          </div>
        </div>
        <div class="single-service">
          <img src="image/food2.jpeg" />
          <div class="overjohn"></div>
          <div class="service-desc">
            <h1>FAST FOOD</h1>
            <hr />
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Aspernatur iste ipsam nostrum eos.
            </p>
          </div>
        </div>
        <div class="single-service">
          <img src="image/food6.jpeg" />
          <div class="overjohn"></div>
          <div class="service-desc">
            <h1>CHAMBERS</h1>
            <hr />
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Repellendus dolorem molestias voluptatem facere dicta.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- foooter -->

    <section id="footer">
      <div class="title-text">
        <p>CONTACT</p>
        <h1>VISIT HOTEL TODAY</h1>
      </div>

      <div class="footer-row">
        <div class="footer-left">
          <h1>Opening hours</h1>
          <p><i class="fa fa-clock-o"></i>monday to friday - 9am to 9pm</p>
          <p><i class="fa fa-clock-o"></i>saturday and sunday - 8am to 11pm</p>
        </div>
        <div class="footer-right">
          <h1>Get in touch</h1>
          <p>#30 abc kigali, KG456 city in <i class="fa fa-map-marker"></i></p>
          <p>FourStepHotel@gmail.com <i class="fa fa-paper-plane"></i></p>
          <p>+250 780809666 <i class="fa fa-phone"></i></p>
           <h1>Follow Us</h1>

           <!-- logos -->

         
          <div class="lgos">
              <div><a href="https://www.facebook.com/"><img src="image/fb.png" style="width:20px; height:20px;" /></a></div>
              <div><a href="https://www.twitter.com/"><img src="image/twitter.png" style="width:20px; height:20px;" /></a></div>
              <div><a href="https://www.youtube.com/"> <img src="image/youtube.png" style="width:20px; height:20px;" /></a></div>
              <div> <a href="https://www.instagram.com/"><img src="image/ig.jpg" style="width:20px; height:20px;" /></a></div>
            </div>
           <!-- <p><img src="image/fb.png" style="width:20px; height:20px;" /><i class="fa fa-map-marker"></i></p> -->
        </div>

      </div>

      <div class="sociol-media">
        <p>copyright by &copy;FourStep Hotel</p>
      </div>
    </section>
  </body>
</html>
