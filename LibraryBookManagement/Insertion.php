<?php
include('Connection.php');
$title=$_POST['title'];
$price=$_POST['price'];
$authr=$_POST['authr'];
$q="insert into books(title,price,author) values('$title','$price','$authr')";
$r=mysqli_query($con,$q);
$msg=null;
if($r)
	$msg="Inserted Successfully";
else
	$msg="Insertion failed";
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insertion</title>
</head>
<body bgcolor="pink">
<h2>Insertion Status</h2><br><hr>
<p><?php echo $msg;?></p>
Do you want to go back to home page?<a href="Home.php">Click here</a>
</body>
</html>