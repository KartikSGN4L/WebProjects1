<?php session_start();
$un=$_POST['uname'];
$pwd=$_POST['pwd'];
if($un!=null && $pwd!=null){
$con=mysqli_connect('localhost','','');
mysqli_select_db($con,'test');
$q="select * from user where username='".$un."' and password='".$pwd."'";
$res=mysqli_query($con,$q);
$n=mysqli_num_rows($res);
$row=mysqli_fetch_array($res);
if(($n==1) && strcmp(row['ref_by'],'none')){
	$_SESSION['reff']=$row['ref_by'];
}
else
	$_SESSION['reff']='none';
$_SESSION['nr']=$row['no_ref'];
mysqli_close($con);
if($n==1){
	$_SESSION['uname']=$un;
	header('location:Home.php');
}
else{	
	header('location:ErrLogin.php');
}
}
else
	header('location:ErrLogin.php');
?>