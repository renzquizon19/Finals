<?php
require_once('open_connection.php');
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];
	$duplicate = mysqli_query($con, "SELECT * FROM tbl_user WHERE username = '$username'");
	if(mysqli_num_rows($duplicate)) > 0{
		echo
		"<script> alert('Username Has Already Taken') </script>"
	}
	else{
		if($password == $confirmPassword){
			$query = "INSERT INTO tbl_user VALUES('', '$name', '$username', '$password')";
			mysqli_query($con, $query);
			echo
			"<script> alert('Registration Successful!'); </script>";
		}
		else{
			echo
			"<script> alert('Password Does Not Match!'); </script>";
		}
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<body>
	<h2>Registration Form</h2>
	<form class="" action="" method="" autocomplete="off">
		<label for="name">Name : </label>
		<input type="text" name="name" id="name" required value=""> <br>

		<label for="username">Username : </label>
		<input type="text" name="username" id="username" required value=""> <br>

		<label for="password">Password : </label>
		<input type="password" name="password" id="password" required value=""> <br>
		<button type="submit" name="submit">Register</button>
	</form>
	<br>
	<a href="login.php">Login</a>
</body>
</html>