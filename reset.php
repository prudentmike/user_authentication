<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Reset Password</title>
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
</style
></head>

<body>
	<form action = "reset.php" method="post">
		<fieldset>
		<legend><b>Reset Password</b></legend>
	Enter Registered Email: <input type="email" name = your_email value =""><br><br>
	New Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="password" name = "new_password" ><br><br>
	Confirm New Password: <input type="password" name="confirm_new_password"><br><br>
	<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	<?php
	if(isset($_POST['submit']) & (!empty($_POST['new_password'])&(!empty($_POST['confirm_new_password']))))
	{
		if($_POST['new_password'] == $_POST['confirm_new_password'])
		{
			header("Location:login.php");
		}
		else
		{
			"Passwords do not match";
		}
	}
	?>
</body>
</html>