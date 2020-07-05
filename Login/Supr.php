<?php session_start();
$nd=$_POST['uname'];
$nr=$_SESSION['nr'];
$un=$_SESSION['uname'];
if(isset($_SESSION['uname']) && $nr>=5){
$con=mysqli_connect('localhost','','');
mysqli_select_db($con,'test');
$s="select * from user where username='".$nd."'";
$q="delete from user where username='".$nd."'";
$res2=mysqli_query($con,$s);
$res1=mysqli_query($con,$q);
$n=mysqli_num_rows($res2);
if($res1 && $n==1)
echo "Deleted $nd successfully";
else
echo "Deletion operation failed.Maybe username doesnt exist? Try again<br>";
mysqli_close($con);
}
else
header('location:Home.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="red">
	<?php echo "<h3>".$un." Using the Clout</h3><br>"; ?>
	<!-- <p><?php echo $msg;?></p> -->
	<p><a href="Home.php">Click here to go back to your homepage </a> and maybe continue removing users?</p>
	<p>Or else you can directly logout <a href="Logout.php">here</a></p>
</body>
</html>