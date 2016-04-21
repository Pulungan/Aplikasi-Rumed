<?php
session_start();
if (isset($_SESSION['kunci'])) {
	header('location: dashboard.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<center>
	<form method="POST" action="cek_login.php">
		<div class="login">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr> 			 
			<tr>
				<td><input type="submit" value="kirim" name="kirim"></td>
			</tr>
			
		</table>			
		</div>
	</form>
</center>
</body>
</html>