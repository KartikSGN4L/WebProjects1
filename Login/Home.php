<?php
session_start();
$un=$_SESSION['uname'];
$nr=$_SESSION['nr'];
if(!isset($un))
	header('location:ErrLogin.php'); ?>
<?php if(isset($_SESSION['reff'])&&isset($_SESSION['uname'])) {?>
	<html>
	<head>
		<style type="text/css">
			#a1{
			
				color:red;
			}
			#d1{
				background-color: lightblue;
				width:550px;
			}
			#d2{
				background-color: pink;
				width:350px;
			}
		</style>
	</head>
	<body bgcolor="gray">
		<div id="d1">
	<h3><?php echo "Hello ".$un."!. Welcome to zealvibes";?></h3><br>
	<p>Just sit back and relax. Also dont forget to code everyday</p><br>
	<p>You were referred by <?php echo $_SESSION['reff'] ?></p>
	<p>Did you know that if you are a super user you can even remove users from zealvibe?</p><br>
	<p>(Note: A superuser is one who has referred at least 5 users)</p><br><br>
	<p>So far you have made <?php echo $nr; ?> referrals</p>
	<?php if($nr>=5){
		echo "<p>Yay ".$un.". You are indeed a superuser.</p>";
		echo "<p>Do you want to remove any user?Then type his/her name below and do so";
		echo "<form action=\"Supr.php\" method=\"post\"><table>
				<tr>
				<td>Name</td>
				<td><input type=\"text\" name=\"uname\" required/></td>
			</tr><tr>
				<td>&nbsp</td>
				<td><input type=\"submit\" value=\"Delete\"/></td>
			</tr>
			</table></form>";
	}
	else{
		echo "<p>Still ".(5-$nr)." more referrals are required to become a superuser.</p>";
		echo "<p>Dont worry Keep on referring</p>";
	}?>
	<p>Do you want to add your friends to zealvibes? if yes please fill the details below</p><br>
			<form action="Addoth.php" method="post">
				<table>
				<tr>
				<td>Name</td>
				<td><input type="text" name="uname" required/></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="pwd" required/></td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td><input type="submit" value="Add"/></td>
			</tr>
			</table>
		</form>
		</div>
		<div id="int1">
			<tr></tr>
		</div>>
		<br>
		<div id="d2">
		<p id="a1">Please don't forget to logout when you are done.</p>
			<a href="Logout.php">Logout</a>
		</div>

	</body>
	</html>
<?php }
else {
	header('location:ErrLogin.php');
}
?>