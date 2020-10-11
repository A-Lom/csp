<?php
	$cookie_name = "showFlag";
	$cookie_value = "False";
	if(!isset($_COOKIE[$cookie_name])){
	setcookie($cookie_name, $cookie_value, time() + (86400), "/csp5");
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css">
<title>CSP5</title>
<!--Everything in the head tags is not part of the challange and can be ignored-->
</head>

<body class="container content">
	<h1>Searching. . .</h1>
	<p>Sometimes what you are looking for is easier to find than you expect</p>
	<?php
	if($_COOKIE[$cookie_name]!="True") {
		return;
	} else {
	  echo "flag:79BSpRPkaB";
	}
	?>
</body>
</html>
