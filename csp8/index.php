<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css">
<title>CSP8</title>
<!--Everything in the head tags is not part of the challange and can be ignored-->
</head>

<body class="container content">
<h1>Login</h1>
	Please Login
	<form method="post">
		<input placeholder="Username" name="Username" autocomplete="off" type="text"><br>
		<input placeholder="Password" name="Password" type="password" maxlength="10"> <input name="submit" type="submit">
	</form>
	<?php
	if(array_key_exists("submit", $_POST)) {
		if(strlen($_POST['Username'])==0){
			echo "Please enter a username to login to";
		}
		else if(strlen($_POST['Password'])>10){
			echo "Buffer Overflow Error";
			echo "<br>";
			echo "Flag:z7F9mWcGLs";
		}
		else if($_POST['Password']){
			echo "Incorrect Password";
		}
	}
	?>
</body>
</html>