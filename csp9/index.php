<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css">
<title>CSP9</title>
<!--Everything in the head tags is not part of the challange and can be ignored-->
</head>

<body class="container content">
	
<h1>Secret</h1>
	<form method="post">
		<label>Input Secret</label>
		<input placeholder="Secret" name="Secret" autocomplete="off" type="text" /><br>
		<input name="submit" type="submit" />
	</form>
		<?php
		include 'includes/secret.inc';
	
		if(array_key_exists("submit", $_POST)) {
			if($secret == $_POST['Secret']){
				echo "Secret Correct";
				echo "<br>";
				echo "Flag:H84cydXMu8";
			}
			else{
				echo "Wrong Secret";
			}
		}
	?>
		<div>
			<a href="index-source.html">View Source</a>
		</div>
</body>
</html>