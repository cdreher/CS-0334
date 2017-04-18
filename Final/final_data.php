<!--Collin Dreher-->
<!DOCTYPE html>
<html>
<head>
	<title>Data - Final Project</title>
</head>
<body>
	<?php 
	require_once 'final_login.php';
	//Get values from form
	$Fname = $_POST['firstName'];
	$Lname = $_POST['lastName'];
	$sex = $_POST['sex'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$handicap = $_POST['handicap'];
	//insert data into mysql
	$sql = "INSERT INTO customers(firstName, lastName, sex, city, state, handicap)
	VALUES ('$Fname','$Lname','$sex','$city','$state','$handicap')";
	$result=mysql_query($sql);
	//if successfully insert data into database, displays message "successful".
	if($result) {
	header('Location: ../final_thankyou.php');
	}
	else {
	echo "ERROR";
	}
	//close mysql
	mysql_close();
	?>
</body>
</html>
