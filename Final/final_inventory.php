<!--Collin Dreher-->
<!DOCTYPE html>
<html>
<head>
	<title>Inventory List - Final Project</title>
</head>
<body>
	<?php 
	require_once 'final_login.php';
	
	$create = "CREATE TABLE inventory(id int PRIMARY KEY, brand CHAR(20), category CHAR(20), name CHAR(50), price DECIMAL(10,2));";
	mysql_query($create);
	
	$sql = "INSERT INTO inventory(id,brand,category,name,price) VALUES('1','Taylormade','Drivers','R15 Tour Driver','239.99');";
	$sql2 = "INSERT INTO inventory(id,brand, category, name, price) VALUES('2','Srixon','Golf Balls','Z-Star Balls','39.99');";
	$sql3 = "INSERT INTO inventory(id,brand, category, name, price) VALUES('3','Nike','Footwear','Nike Lunar Control Vapor','175.00');";
	$sql4 = "INSERT INTO inventory(id,brand, category, name, price) VALUES('4','Cleveland','Wedges','Tour RTX 2.0 Wedge','129.99');";
	$sql5 = "INSERT INTO inventory(id,brand, category, name, price) VALUES('5','Titleist','Irons','AP2 Irons','899.99');";
	$sql6 = "INSERT INTO inventory(id,brand, category, name, price) VALUES('6','Titleist','Drivers','915 D2 Tour Driver','339.99');";
	$sql7 = "INSERT INTO inventory(id,brand, category, name, price) VALUES('7','Titleist','Golf Balls','Pro V1 Balls','49.99');";
	$sql8 = "INSERT INTO inventory(id,brand, category, name, price) VALUES('8','Footjoy','Footwear','Hyperflex Shoes','109.99');";
	
	$result=mysql_query($sql);
	$result2=mysql_query($sql2);
	$result3=mysql_query($sql3);
	$result4=mysql_query($sql4);
	$result5=mysql_query($sql5);
	$result6=mysql_query($sql6);
	$result7=mysql_query($sql7);
	$result8=mysql_query($sql8);
	
	$print = mysql_query("SELECT*FROM inventory");
	//if successfully insert data into database, displays message "successful".
	if($print) 
	{
		$file = fopen("inventoryFINAL.txt", "w");
		fputs($file, "Brand:        Category:          Name:          Price(in USD):\n");
		while($row = mysql_fetch_array($print)) 
		{
			fputs($file, $row["brand"] . "   -   " . $row["category"]. "   -   " . $row["name"] . "   -   " . $row["price"]. "\n");
		}
		fclose($file);
		header('Location: ../final_script/inventoryFINAL.txt');
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
