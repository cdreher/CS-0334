<!--Collin Dreher-->
<!DOCTYPE html>
<html>
<head>
	<title>Search Inventory - Final Project</title>
</head>
<body>
	<?php 
	require_once 'final_login.php';
	//Get values from form
	$brand = $_POST['brand'];
	$category = $_POST['category'];
	$price = $_POST['price'];
	
	$result=mysql_query("SELECT*FROM inventory WHERE brand = '$brand' or category = '$category' or price = '$price';");
	//if successfully insert data into database, displays message "successful".
	if ($result) 
	{
		$file = fopen("qresult.txt", "w");
		fputs($file, "Brand:        Category:          Name:          Price(in USD):\n");
		while($row = mysql_fetch_array($result)) 
		{
			fputs($file, $row["brand"] . "   -   " . $row["category"]. "   -   " . $row["name"] . "   -   " . $row["price"]. "\n");
		}
		fclose($file);
		header('Location: ../final_script/qresult.txt');
	}
	else {
	echo "ERROR: No such user exists in the database";
	}
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
	
	//close mysql
	mysql_close();
	?>
	<p><a href = "http://cdreher26.x10host.com/CS0334/final_project.html">Go back to main page</a></p>
</body>
</html>
