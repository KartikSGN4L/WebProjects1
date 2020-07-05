<?php
include('Connection.php');
$q="Select * from books";
$res=mysqli_query($con,$q);
$n=mysqli_num_rows($res);
?>
<!DOCTYPE html>
<html>
<head>
	<h1 align="center" id="h1">View Books</h1>
	<style type="text/css">
		#t1{
			position: relative;
			left: 30%;
			background-color: pink;
			width: 600px;
			height: 190px;
		}
		#h1{
			color: red;
		}
		h2{
			color: pink;
		}
		table tr{
			width:70px;
		}
	</style>
	<title>View books</title>
</head>
<body bgcolor="indigo">
	<div id="d1">
	<table id="t1" border="2">
		<tr>
			<th>Bookid</th>
			<th>Title</th>
			<th>Price</th>
			<th>Author</th>
		</tr>
		<?php for ($i=1; $i<=$n ; $i++) { 
			$row=mysqli_fetch_array($res); ?>
			<tr>
				<td><?php echo $row['bookid']; ?></td>
				<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['price']; ?></td>
				<td><?php echo $row['author']; ?></td>
			</tr>
		<?php }
		mysqli_close($con); ?>
	</table><br>
<h2 align="center">List of all the books available</h2>
</div>
</body>
</html>