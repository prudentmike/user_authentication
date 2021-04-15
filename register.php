<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
</head>
<style>
fieldset {
  background-color: #eeeeee;
  border:solid;
  width: 500px;
  margin: 0px 0px 0px 400px;
}
legend {
  background-color: gray;
  color: white;
  padding: 5px 10px;
}
input {
  margin: 5px;
}
</style>

</head>

<body>
	
	<form action="authenticate.php" method="post">
		<fieldset>
			<legend><b>Register</b></legend>
			<b>First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> <input type="text" name="firstName" value="" required><br><br> <!-- &nbsp; is an html tag used for spacing -->
			<b>Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> <input type="text" name="lastName" value="" required><br><br><b>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="email" name="email" value = ""><br><br>
			<b>Username:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="userName" value = ""><br><br>
			<b>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="password" name="passWord" value = ""><br><br>
			<b>Confirm Password:&nbsp;</b><input type="password" name="confirm_passWord" value = ""><br><br>
			<input type="submit" value="Register" name = "register">
			<p><b>Already registered? <a href="login.php">Login here</a></b></p>
			</fieldset>
	</form>
	
	
</body>
</html>