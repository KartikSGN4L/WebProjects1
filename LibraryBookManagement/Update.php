<?php
$nu=0;
function update($con,$c1,$c2,$c3,$c4){
	$r=selection($con,$c1);
	$ot=$r['title'];
	$op=$r['price'];
	$oa=$r['author'];
	if(strcmp($ot,$c2) || ($op!=$c3) || strcmp($oa, $c4)){
		$q="Update books set title='$c2',price=$c3,author='$c4' where bookid=$c1";
		mysqli_query($con,$q);
	$GLOBALS['nu']++;
	}
}
function selection($con,$bd){
	$s="Select * from books where bookid=".$bd;
	$result=mysqli_query($con,$s);
	$n=mysqli_num_rows($result);
	$row=array();
	if($n==1)
		$row=mysqli_fetch_array($result);
	return $row;
}
$total=sizeof($_POST);
$rows=$total/4;
$title=$bid=$price=$authr=array();
for ($i=1; $i<=$rows; $i++) { 
	$i1="bid".$i;
	$bid[$i]=$_POST[$i1];
	$i2="title".$i;
	$title[$i]=$_POST[$i2];
	$i3="price".$i;
	$price[$i]=$_POST[$i3];
	$i4="authr".$i;
	$authr[$i]=$_POST[$i4];
}
include('Connection.php');
for ($i=1; $i<=$rows;$i++) { 
	update($con,$bid[$i],$title[$i],$price[$i],$authr[$i]);
	}
mysqli_close($con); ?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		p{
			color: blue;
		}
	</style>
	<title>Update</title>
</head>
<body bgcolor="pink">
	<h2>Status</h2>
	<p><?php echo "All of your changes have been updated";?></p>
	<p><?php echo $nu." rows updated";?></p>
	Do you want to go back to homepage?<a href="Home.php">Click here</a>
</body>
</html>