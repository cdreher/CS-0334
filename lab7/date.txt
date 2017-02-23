<!--Collin Dreher -->
<!DOCTYPE html>
<html>

<head>
	<title>Lab 7 - Date of Birth Form Output</title>
</head>

<body>
	<style>
		body{
			background-color: #c4fff1;
			color: #540c99;
		}
	</style>
	<h1>Your Date of Birth:</h1>
	<?php 
		$month = filter_input(INPUT_GET, "month");
		$day = filter_input(INPUT_GET, "day");
		$year = filter_input(INPUT_GET, "year");

		echo "You were born $month/$day/$year...which was on a ".date("l", mktime(0,0,0,$month,$day,$year))."<br>";

	?>
	<table border="1" cellpadding="2" cellspacing="2" align="center" width="400">
		<th colspan='7'><?php echo date("M-Y", mktime(0,0,0,$month, $day, $year)). "<br>";?></th>
		<tr>
			<th>Sun</th>
			<th>Mon</th>
			<th>Tue</th>
			<th>Wed</th>
			<th>Thu</th>
			<th>Fri</th>
			<th>Sat</th>
		</tr>
		<?php
			echo "<tr>";
			$numMonths = date("t", mktime(0,0,0,$month, $day, $year));
			$i = 1;
			
			$date = date("l", mktime(0,0,0,$month, $i, $year));		//find position of first day
			if($date == "Sunday")
				echo '<td align="center">'. $i .'</td>';
			else if($date == "Monday")
			{
				echo '<td></td>';
				echo '<td align="center">'. $i .'</td>';
			}
			else if($date == "Tuesday")
			{
				echo '<td></td>';
				echo '<td></td>';
				echo '<td align="center">'. $i .'</td>';
			}
			else if($date == "Wednesday")
			{
				echo '<td></td>';
				echo '<td></td>';
				echo '<td></td>';
				echo '<td align="center">'. $i .'</td>';
			}
			else if($date == "Thursday")
			{
				echo '<td></td>';
				echo '<td></td>';
				echo '<td></td>';
				echo '<td></td>';
				echo '<td align="center">'. $i .'</td>';
			}
			else if($date == "Friday")
			{
				echo '<td></td>';
				echo '<td></td>';
				echo '<td></td>';
				echo '<td></td>';
				echo '<td></td>';
				echo '<td align="center">'. $i .'</td>';
			}			
			else if($date == "Saturday")
			{
				echo '<td></td>';
				echo '<td></td>';
				echo '<td></td>';
				echo '<td></td>';
				echo '<td></td>';
				echo '<td></td>';
				echo '<td align="center">'. $i .'</td>';
				echo '<tr></tr>';
			} 
			
			$i++;
			while($i <= $numMonths)			//print rest of month
			{
				$date = date("l", mktime(0,0,0,$month, $i, $year));
				
				if($date == "Saturday")
				{
					echo '<td align="center">'. $i .'</td>';
					echo '<tr></tr>';
				} 
				else
					echo '<td align="center">'. $i .'</td>';
				$i++;
			}
			
			
			
			
			echo "</tr>";
		?>
	<p><a href = "date.txt">PHP Source Code</a></p>
	<p><a href = "lab7.php">Go Back!</a></p>
</body>
</html>
