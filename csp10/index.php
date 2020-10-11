<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css">
<title>CSP10</title>
<!--Everything in the head tags is not part of the challange and can be ignored-->
</head>

<body class="container content">
	
<h1>Encoded</h1>
	<form method="post">
		<label>Input Secret</label>
		<input placeholder="Secret" name="Secret" type="text" /><br>
		<input name="submit" type="submit" />
	</form>
	<?php
	$encodedSecret = "3d3d674d6b6c7a6475523262796f474d";
 
	function encodeSecret($secret) {
		return bin2hex(strrev(base64_encode($secret)));
	}
	
	if(array_key_exists("submit", $_POST)) {
		if(encodeSecret($_POST['Secret']) == $encodedSecret){
			echo "Secret Correct";
			echo "<br>";
			echo "Flag:EpWhmh48mM";
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