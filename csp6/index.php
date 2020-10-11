<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css">
<title>CSP6</title>
<!--Everything in the head tags is not part of the challange and can be ignored-->
</head>

<body class="container content">
	<h1>Names</h1>
	<p>We found a database of names. You can search by first name with the search bar below</p>
	<form method="POST"> 
		<input type="text" name="name" autocomplete="off" placeholder="Name">
		<input type="submit", name="submit", value="Search">
	</form>
	<?php
		
		$servername = "localhost";
		$database = "CSP";
		$username = "csp";
		$password = "kiwi123";

		// Create connection

		$conn = mysqli_connect($servername, $username, $password, $database);

		// Check connection

		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
		if(array_key_exists("submit", $_POST)) {
			if ($result = $conn -> query("SELECT * FROM csp6 WHERE firstn LIKE '%".$_POST['name']."%'")){
				
				if ($result->num_rows > 0) {
					echo "<ul>";
					while ($row = mysqli_fetch_row($result)) {
						printf ("<li>%s (%s)</li>", $row[0], $row[1]);
					}
					echo "</ul>";
				}else{
				echo "No rows returned";
				}
			}else{
				echo "No rows returned";
			}
		}

		mysqli_close($conn);

	?>
	
</body>
</html>
