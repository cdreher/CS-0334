<!--Collin Dreher-->
<!DOCTYPE html>
<html>

<head>
	<title>Midterm Coding Exercise</title>
</head>

<body>
	<?php
		$monthsArr = array('January' => 31,'February' => 28,'March' => 31,'April' => 30,'May' => 31,'June' =>30,'July'=>31,'August'=>31,'September'=>30,'October'=>31,'November'=>30,'December'=>31); 
		
		ksort($monthsArr);		//sort months alphabetically
		
	?>
	
	<table border="1" cellpadding="2" cellspacing="2" align="center" width="400">
		<th colspan='2'><?php echo "Months of the Year<br>";?></th>
	
	<?php
		echo "<tr>";
		echo '<td align="center">Month</td>';
		echo '<td align="center">Days</td>';
		echo "</tr>";
		
		foreach ($monthsArr as $month => $days)
		{
			echo "<tr>";
			echo '<td align="center">'. $month .'</td>';
			echo '<td align="center">'. $days .'</td>';
			echo "</tr>";
		}
	?>
	<p><a href = "midterm.txt">PHP Source Code</a></p>
	<p><a href="http://cdreher26.x10host.com/CS0334/">Return to directory</a></p>
</body>
</html>
