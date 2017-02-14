<!-- Collin Dreher -->
<!DOCTYPE html>
<html>

<head>
	<title>Lab 6</title>
	
</head>

<body>
	<style>
		body{
			background-color: #c4fff1;
			color: #540c99;
		}
	</style>
	<h1>For Loop:</h1>
	
	<?php
		for($i = 1; $i < 101; $i++)
		{
			if($i % 15 == 0)
				print "GoPitt <br />\n";
			else if($i % 5 == 0)
				print "Pitt <br />\n";
			else if($i % 3 == 0)
				print "Go <br />\n";
			else
				print "$i <br />\n";
		}
	?>
	<p><a href="lab6.txt">PHP Source Code</a></p>
	<p><a href="http://cdreher26.x10host.com/CS0334/">Return to directory</a></p>
</body>

</html>
