<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css">
<title>CSP7</title>
<!--Everything in the head tags is not part of the challange and can be ignored-->
</head>

<body class="container content">
	<h1>Who Sent You?</h1>
	<?php
		if ($_SERVER['HTTP_REFERER']=="http://10.8.26.135/csp8/"){
			echo "<b>Access Granted</b><br>flag:K8pMVxK9Q3";
		}
		else{
			echo "<b>Access Denied</b><br>Reason: You are visiting from \"".$_SERVER['HTTP_REFERER']."\". Authorised users should only be connecting from: \"10.8.26.135/csp8/\".";
		}
	?>
	<br>
	<a href="/csp7/">Reload Page</a>
	
</body>
</html>
