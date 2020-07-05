<?php session_start();
$rt=$_SESSION['uname'];
$un=$_POST['uname'];
$pwd=$_POST['pwd'];
$nr=$_SESSION['nr'];
if(isset($_SESSION['uname']) && $un!=null && $pwd!=null){
$con=mysqli_connect('localhost','','');
mysqli_select_db($con,'test');
$q="insert into user values('".$un."','".$pwd."','".$rt."',0)";
$u="update user set no_ref=".($nr+1)." where username='".$rt."'";
$res=mysqli_query($con,$q);
$res2=mysqli_query($con,$u);
mysqli_close($con);
if($res)
 $msg="Added ".$un." Successfully";
else 
	$msg="Error adding the user. Please try again";
if($res2)
$_SESSION['nr']=$nr+1;	
}
else
header('location:ErrLogin.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Adding User</title>
</head>
<body bgcolor="magenta">
	<h3>Giving privilages to others. Yay! </h3><br>
	<p><?php echo $msg;?></p>
	<a href="Home.php">Click here to go back to your homepage</a><br>
	<p>Or else you can directly logout <a href="Logout.php">here</a></p>
</body>
</html>