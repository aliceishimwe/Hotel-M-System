<?php
$a=$_GET['id'];
$con=mysqli_connect("localhost","root","","hotel");
$q=mysqli_query($con,"delete from ordertb where id='$a'");
if($q){
	header("location:allorder.php");
}
else
	header("location:index.php");

echo "<script>alter('Fails')</script>"

?>
