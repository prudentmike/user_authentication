<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Authentication</title>
</head>

<body>
	<?php
	session_start();
		{
		$_SESSION['firstname'] = $_POST['firstName'];
		$_SESSION['lastname'] = $_POST['lastName'];
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['username'] = $_POST['userName'];
		$_SESSION['password'] = $_POST['passWord'];
		$_SESSION['confirm_password'] = $_POST['confirm_passWord'];
			if($_SESSION['confirm_password']==$_SESSION['password'])
				{
					$myfile = fopen("contact_details.txt","w") or
					die ("unable to open file!");
					$first_name = $_SESSION['firstname'];
					fwrite($myfile,$first_name);
					$last_name = $_SESSION['lastname'];
					fwrite($myfile,$last_name);
					$email = $_SESSION['email'];
					fwrite($myfile,$email);
					$user_name = $_SESSION['username'];
					fwrite($myfile,$user_name);
					$pass_word = $_SESSION['password'];
					fwrite($myfile,$pass_word);
					$confirmpassword = $_SESSION['confirm_password'];
					fwrite($myfile,$confirmpassword);
					fclose($myfile);
				echo file_get_contents("contact_details.txt");
				header('location:login.php');
				}
			else{
					echo "Password doesn't match";
					header("Location:signup.php");
				}
	}
	?>
</body>
</html>