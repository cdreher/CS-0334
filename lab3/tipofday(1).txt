<!--Collin Dreher -->
<!DOCTYPE HTML>
<html>

<head>
	<link href="lab3style.css" rel="stylesheet" type="text/css" />
	<title>Tip of the Day!</title>
</head>

<body>
	<h1>Tip of the day!</h1>
	<?php
		print "<h3>Here's your tip:</h3>";
	?>
	<div id = "border">
	<?php
		readfile("tip.txt");
	?>
	</div>
	<p><a href = "tipofday(1).txt">Source Code</a></p>
</body>

</html>
