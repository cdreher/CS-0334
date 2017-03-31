<!--Collin Dreher-->
<!DOCTYPE html>
<html>
<head>
	<title>Lab 10 Login</title>
</head>
<body>
	<?php 
	$db_hostname = 'localhost';
	$db_database = 'cdreher2_lab10';
	$db_username = 'cdreher2_user1';
	$db_password = 'collin';
	//connect to server
	$db_server = mysql_connect($db_hostname, $db_username, $db_password)
	 or die("Unable to connect to MySQL: ".mysql_error());

	//select the database
	mysql_select_db($db_database)
	 or die("Unable to select database: ".mysql_error());
	 
	 error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
	?>
</body>
</html>
