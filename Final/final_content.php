<!--Collin Dreher-->
<!DOCTYPE html>
<html>

<head>
	<title>Enter Customer Info - Final Project</title>
</head>

<body>
	<h3>Enter a your information:</h3>
   <form action="final_script/final_data.php" method="post">
		<p>
			 <label>First Name:</label>
			 <input name="firstName" required="required" placeholder="John" type="text">
		</p>
		<p>
			 <label>Last Name:</label>
			 <input name="lastName" required="required" placeholder="Doe" type="text">
		</p>
		<p>
			 <label>Gender:</label>
			 <input type="radio" name="sex" value="male" checked="checked" /><label>male</label>
			 <input type="radio" name="sex" value="female" /><label>female</label>
		</p>
		<p>
			 <label>City:</label>
			 <input name="city" required="required" placeholder="Pittsburgh" type="text">
		</p>
		<p>
			 <label>State:</label>
			 <input name="state" required="required" placeholder="PA" type="text">
		</p>
		<p>
			 <label>Handicap:</label>
			 <input name="handicap" required="required" placeholder="10" type="text">
		</p>
		<p>
			 <input value="Submit" type="submit">
		</p>
	</form>
	<p><a href = "http://cdreher26.x10host.com/CS0334/final_project.html">Go back to main page</a></p>

	
</body>
</html>
