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
		#d1{
			position: relative;
			left: 30%;
			top:20%;
			background-color: lightblue;
			/*width:600px;
			height: 600px;*/
		}
		#t1{

			background-color: pink;
			/*width: 600px;
			height: 190px;*/
		}
		#h1{
			color: red;
		}
		table tr{
			width:70px;
		}
		#sb{
			position: relative;
			left: 15%;
			width: 100px;
			height: 30px;
			background-color: red;
		}
	</style>
	<title>View books</title>
</head>
<body bgcolor="lightblue">
	<div id="d1">
		<form action="Deletion.php" method="post">
	<table id="t1" border="2">
		<tr>
			<th>Bookid</th>
			<th>Title</th>
			<th>Price</th>
			<th>Author</th>
			<th>Select books to delete</th>
		</tr>
		<?php for ($i=1; $i<=$n ; $i++) { 
			$row=mysqli_fetch_array($res); ?>
			<tr>
				<td><?php echo $row['bookid']; ?></td>
				<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['price']; ?></td>
				<td><?php echo $row['author']; ?></td>
				<td><input type="checkbox" value="<?php echo $row['bookid']; ?>" name="c<?php echo $row['bookid']; ?>"/></td>
			</tr>
		<?php }
		mysqli_close($con); ?>
	</table>
	<input id="sb" type="submit" value="Delete"/>
</form><br>
<h3 align="left">List of all the books available</h3>
</div>
</body>
</html>