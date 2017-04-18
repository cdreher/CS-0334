<!--Collin Dreher-->
<!DOCTYPE html>
<html>
<head>
	<title>Lab 10 Query Search</title>
</head>
<body>
	<?php 
	require_once 'login.php';
	//Get values from form
	$Fname = $_POST['first_name2'];
	
	$result=mysql_query("SELECT*FROM users WHERE first_name = '$Fname'");
	//if successfully insert data into database, displays message "successful".
	if ($result) 
	{
		$file = fopen("qresult.txt", "w");
		while($row = mysql_fetch_array($result)) 
		{
			
			fputs($file, "First Name: ". $row["first_name"]. " " .$row["last_name"]. "\nSex: " . $row["sex"] . "\nEmail: " . $row["email"]. "\nRegistration Date: " . $row["registration_date"]. "\n\n");
		}
		fclose($file);
		header('Location: ../script/qresult.txt');
	}
	else {
	echo "ERROR: No such user exists in the database";
	}
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
	
	//close mysql
	mysql_close();
	?>
	<p><a href = "http://cdreher26.x10host.com/CS0334/content.php">Go back to submission page</a></p>
</body>
</html>
