<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Updating</title>
</head>
<body>
<?php
$x=$_GET['id'];
$con=mysqli_connect("localhost","root","","hotel");
$q=mysqli_query($con,"select* from ordertb where id='$x'");
while($fetch=mysqli_fetch_array($q)){
?>	

<form method="POST">
Name<input type="text" name="c" value="<?php echo $fetch['name'];?>"><br>
Email<input type="text" name="n" value="<?php echo $fetch['email'];?>"><br>
Phone<input type="number" name="o" value="<?php echo $fetch['phone'];?>"><br>
Address<input type="text" name="f" value="<?php echo $fetch['address'];?>"><br>
Chips<input type="text" name="l" value="<?php echo $fetch['chips'];?>"><br>
Pizza<input type="text" name="e" value="<?php echo $fetch['pizza'];?>"><br>
Beef<input type="text" name="m" value="<?php echo $fetch['beef'];?>"><br>
Drinks<input type="text" name="p" value="<?php echo $fetch['drinks'];?>"><br>
<input type="submit" value="update" name="up">
</form>
<?php
}
?>

<?php
if(isset($_POST['up'])){
$a=$_POST['c'];
$b=$_POST['n'];
$c=$_POST['o'];
$d=$_POST['f'];
$e=$_POST['l'];
$f=$_POST['e'];
$g=$_POST['m'];
$h=$_POST['p'];
$con=mysqli_connect("localhost","root","","hotel");
$update=mysqli_query($con,"update ordertb SET name='$a' , email='$b' , phone='$c' , address='$d' , chips='$e' , pizza='$f' , beef='$g', drinks='$h' where id='$x'");
if($update){
	header("location:allorder.php");
}
}
?>
</body>
</html>