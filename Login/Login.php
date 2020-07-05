<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#d1{
			position: relative;
			align-content: center;
			padding-right: 10px;
			padding-left: 10px;
			padding-bottom: 10px;
			background-color: gray;
			width:300px;
			height: 200px;
		}
		table #p1{
			color:red;

		}
	</style>
	<title>Welcome to ZealVibes</title>
	<h1 align="center">Welcome to ZealVibes</h1>
</head>
<body bgcolor="pink">
	<h2>Please Login First</h2>
	<div id="d1">
	<form action="Validation.php" method="post">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="uname"/></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="pwd"/></td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td><input type="submit" value="Login"/></td>
			</tr>
			<tr>
				<td>New member?</td>
				<td><p id="p1">Please click on Register link below</p></td>
			</tr>
			<tr>
				<td><a href="Register.html">Register</a></td>
				<td></td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>