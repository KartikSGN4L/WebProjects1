<?php
$n=sizeof($_POST);
$j=1;
$i=0;
$set=array();
while ($i<$n) {
	$index="c".$j;
	if(isset($_POST[$index])){
		$set[$i]=$_POST[$index];
		$i++;
	}
	$j++;
}
include('Connection.php');
for ($j=0; $j<$n; $j++) { 
$q="Delete from books where bookid=".$set[$j];
mysqli_query($con,$q);
}
mysqli_close($con); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Deletion</title>
</head>
<body>
<div>
	<h2>Deletion</h2><br><br>
	<p><?php echo $n." Records deleted";?></p>
	Do you want to go back to home page ?<a href="Home.php">Click here</a>
</div>
</body>
</html>