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
			left: 25%;
			top:20%;
			background-color: lightblue;
			width:740px;
			height: 300px;
		}
		#t1{

			background-color: pink;
			width: 740px;
			height: 190px;
		}
		#h1{
			color: red;
		}
		table tr{
			width:70px;
			height: 15px;
		}
		input{
			background-color: khaki;
			height : 25px;
		}
		#sb{
			position: relative;
			left:40%;
			width: 80px;
			height: 45px;
		}
	</style>
	<title>View books</title>
	<script type="text/javascript">
		function Chng(str){
			var org=document.getElementById(str);
			alert(st);
			var st=org.innerHTML;
			org.innerHTML="<input type=\"text\" value="+st+"/>";
			
		}
	</script>
</head>
<body bgcolor="lightblue">
	<div id="d1">
		<form action="Update.php" method="post">
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
				<td><input type="hidden" name="bid<?php echo $row['bookid']; ?>" value="<?php echo $row['bookid']; ?>"/><?php echo $row['bookid']; ?></td>
				<td><input type="text" name="title<?php echo $row['bookid']; ?>" value="<?php echo $row['title']; ?>"/></td>
				<td><input type="text" name="price<?php echo $row['bookid']; ?>" value="<?php echo $row['price']; ?>"/></td>
				<td><input type="text" name="authr<?php echo $row['bookid']; ?>" value="<?php echo $row['author']; ?>"/></td>
			</tr>
		<?php }
		mysqli_close($con); ?>
	</table>
	<input id="sb" type="submit" value="Update"/></form>
<h3 align="center">List of all the books available</h3>
</div>
</body>
</html>
<!--id="c<?php echo $row['bookid']; ?>" onclick="Chng(this.id)">