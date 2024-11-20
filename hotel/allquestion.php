<?php
session_start();
if (!$_SESSION['user'])
 {
	header("location:index.php");
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
        <li><a href="allorder.php">All order</a></li>
        <li><a href="allquestion.php">All Questions</a></li>
      </ul>
      <ul>

              <li>
          <a href="##"><?php
          echo $_SESSION["user"];  ?>
        </a>
        </li>
              <li><a  href="logout.php" class="logout" >Logout</a> </li>
      </ul>
    </header>
    <!-- service -->

    <section id="features">
      <h1>All Question from contact form</h1>
      <table>
        <thead>
          <tr>
            <td>N</td>
            <td>Full name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Location</td>
            <td>Message</td>
          </tr>
        </thead>
        <tbody>
     <?php
     $con=mysqli_connect("localhost","root","","hotel1");
     $id=1;
     $select="SELECT * from contact";
     $res=mysqli_query($con,$select);
     while ($row=mysqli_fetch_array($res))
     {?>
		<tr>
			<td><?php echo $id++;?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['phone'];?></td>
			<td><?php echo $row['location'];?></td>
			<td><?php echo $row['message'];?></td>
			<td>
				
				
				
			</td>

		</tr>
		<?php
		}?>
        </tbody>
      </table>
    </section>

    <!-- foooter -->
  </body>
</html>
