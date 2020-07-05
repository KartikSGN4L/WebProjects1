<?php session_start();
$un=$_POST['uname'];
$pwd=$_POST['pwd'];
$ref=strcmp($_POST['reff'],'')?$_POST['reff']:'none';
if($un!=null && $pwd!=null){
$con=mysqli_connect('localhost','','');
mysqli_select_db($con,'test');
$temp='none';
$q="insert into user(username,password,ref_by) values('".$un."','".$pwd."','".$ref."')";
$res=mysqli_query($con,$q);
mysqli_close($con);
if($res){
 $msg="Added ".$un." Successfully";
 $_SESSION['uname']=$un;
 $_SESSION['pwd']=$pwd;
 $_SESSION['reff']=$ref;
 $_SESSION['nr']=0;
}
else 
	$msg="Error adding the user. Please try again";
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
	<a href="Home.php">Click here to go to your homepage</a><br>
	<p>Or else you can directly logout <a href="Logout.php">here</a></p>
</body>
</html>