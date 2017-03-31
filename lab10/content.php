<!--Collin Dreher-->
<!DOCTYPE html>
<html>

<head>
	<title>Lab 10 Content</title>
</head>

<body>
	<h3>Enter a new user:</h3>
   <form action="script/data.php" method="post">
		<p>
			 <label>First Name:</label>
			 <input name="first_name" required="required" placeholder="John" type="text">
		</p>
		<p>
			 <label>Last Name:</label>
			 <input name="last_name" required="required" placeholder="Doe" type="text">
		</p>
		<p>
			 <label>Gender:</label>
			 <input type="radio" name="sex" value="male" checked="checked" /><label>male</label>
			 <input type="radio" name="sex" value="female" checked="checked" /><label>female</label>
		</p>
		<p>
			 <label>Your Mail:</label>
			 <input name="email" required="required" placeholder="random@mail.com" type="email">
		</p>
		<p>
			 <label>Password:</label>
			 <input name="password" rquired="required" placeholder="eg. X8df190EO" type="password">
		</p>
		<p>
			 <input value="Submit" type="submit">
		</p>
	</form>
	<h1>--OR--</h1>
	<h3>Search for a user:</h3>
	<form action="script/query.php" method="post">
		<p>
			 <label>First Name:</label>
			 <input name="first_name2" required="required" placeholder="John" type="text">
		</p>
		<p>
			 <input value="Submit" type="submit">
		</p>
	</form>
	<p><a href = "http://cdreher26.x10host.com/CS0334/script/login.txt">LOGIN.TXT</a></p>
	<p><a href = "http://cdreher26.x10host.com/CS0334/content.txt">CONTENT.TXT</a></p>
	<p><a href = "http://cdreher26.x10host.com/CS0334/script/data.txt">DATA.TXT</a></p>
	<p><a href = "http://cdreher26.x10host.com/CS0334/thankyou.txt">THANKYOU.TXT</a></p>
	<p><a href = "http://cdreher26.x10host.com/CS0334/script/query.txt">QUERY.TXT</a></p>
	<p><a href = "http://cdreher26.x10host.com/CS0334">Back to directory</a></p>
	
</body>
</html>
