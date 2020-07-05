<?php
session_start();
if (isset($_SESSION['uname'])) {
$name=$_SESSION['uname'];
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="orange">
	<h3>Until next time. GoodBye. Let's Meet Again Soon <?php echo "$name";?></h3>
	<a href="Login.php">Click here to go to Login Page</a>
</body>
</html>
<?php }
else
	header('location:ErrLogin.php');
?>