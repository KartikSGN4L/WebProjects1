<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#d1{
			position: relative;
			left: 30%;
			width: 500px;
			height:350px;
			background-color: gray;
		}
		#t1 #r2{

			background-color: pink;
			width: 100px;
			height: 100px;
			align-items: center;

		}
		#t1 #r1{
			background-color: violet;
			width: 50px;
			height: 70px;
		}

		input{
			width: 150px;
			height: 40px;
			background-color: black;
			color: white;
		}
		#sb{
			position: relative;
			left: 35%;
			background-color: lightgreen;
		}
	</style>
	<title>InsertionForm</title>
</head>
<body bgcolor="orange">
<h2 align="center">Add a new book</h2><br>
<hr>
<div id="d1">
<form action="Insertion.php" method="post">
	<table id="t1" border="1">
		<tr id="r1">
			<th>Book Title</th>
			<th>Price(in Rs)</th>
			<th>Author</th>
		</tr>
		<tr id="r2">
			<td><input type="text" name="title" required/></td>
			<td><input type="number" name="price" required/></td>
			<td><input type="text" name="authr" required/></td>
		</tr>
	</table>
	<input id="sb" type="submit" value="Add"/>
</form>
</div>
</body>
</html>