<!--Collin Dreher -->
<!DOCTYPE html>
<html>

<head>
	<title>Lab 7 - Grade Calculator</title>
</head>

<body>
	<style>
		body{
			background-color: #c4fff1;
			color: #540c99;
		}
	</style>
	<?php 
		$grade1 = filter_input(INPUT_GET, "grade1");
		$grade2 = filter_input(INPUT_GET, "grade2");
		$grade3 = filter_input(INPUT_GET, "grade3");
		$grade4 = filter_input(INPUT_GET, "grade4");
		$grade5 = filter_input(INPUT_GET, "grade5");

			$arr = array($grade1,$grade2,$grade3,$grade4,$grade5);
			$total=0;
			for($i = 0; $i < 5; $i++)
				$total = $total + $arr[$i];
			$average = $total / 5;
			print "<h1>Total Points Entered: $total<br></h1>";
			print "<h1>Average Grade (Out of 100): $average<br></h1>";
	?>
	<p><a href = "grade.txt">PHP Source Code</a></p>
	<p><a href = "lab7.php">Go Back!</a></p>
</body>
</html>
