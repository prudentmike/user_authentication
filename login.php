<!doctype html>
<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
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
	<div id = "form">
	<form action="login.php" method="post">
		<fieldset>
			<legend><b>Login</b></legend>
			<b>Username:</b> <input type="text" name="user_name" value=""><br><br>
			<b>Password:&nbsp;  </b><input type="password" name="pass_word" value=""><br><br>
			<input type="submit" name="login" value="Login">
			<input type="submit" name="logout" value="Logout"><br><br>
			New User? <input type="submit" value="Register" name ="register"><br><br>
			Forgot password? <input type="submit" value="Reset" name="reset">
	</form>
	</div>
	<?php
		 
	if (isset($_POST['login']))
 		{
			 if (($_POST['user_name'] == $_SESSION['username']) & ($_POST['pass_word'] == $_SESSION['password']))
			 {
				 echo "Success, you are logged in.";
			 }
			 else
			 {
				 echo "Incorrect username and Password";
			 }
		echo "logged in";
		}
	elseif(isset($_POST['register']))
	{
		header("location:register.php");
	}
	elseif(isset($_POST['reset']))
	{
		header('location:reset.php');
	}
	elseif(isset($_POST['logout']))
	{
		unset($_SESSION['username']);
	unset($_SESSION['password']);
	header('location:login.php');
	}
	

	?>
</body>
</html> 