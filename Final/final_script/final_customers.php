<!--Collin Dreher-->
<!DOCTYPE html>
<html>
<head>
	<title>Customer List - Final Project</title>
</head>
<body>
	<?php 
	require_once 'final_login.php';
	
	$print = mysql_query("SELECT*FROM customers");
	//if successfully insert data into database, displays message "successful".
	if($print) 
	{
		$file = fopen("customers1.txt", "w");
		fputs($file, "First Name:        Last Name:          Sex:          City       State:       Handicap:\n");
		while($row = mysql_fetch_array($print)) 
		{
			fputs($file, $row["firstName"] . "   -   " . $row["lastName"]. "   -   " . $row["sex"] . "   -   " . $row["city"]. "   -   " . $row["state"]. "   -   " . $row["handicap"]."\n");
		}
		fclose($file);
		header('Location: ../final_script/customers1.txt');
	}
	
	else {
	echo "ERROR";
	}
	
	//close mysql
	mysql_close();
	?>
	<p><a href = "http://cdreher26.x10host.com/CS0334/final_project.html">Go back to main page</a></p>
</body>
</html>
