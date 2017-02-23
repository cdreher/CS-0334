<!-- Collin Dreher -->
<!DOCTYPE HTML>
<html>

<head>
	<title>Lab 7</title>
	
</head>

<body>
	<style>
		body{
			background-color: #c4fff1;
			color: #540c99;
		}
	</style>
	<h1>PART 1:</h1>
	
	<?php
		print "The days of the week in sequence are: </br>\n";
		$numARR = array(1,2,3,4,5,6,7);
		$ar = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
		for($i = 0; $i < 7; $i++)
		{
			print "$numARR[$i]. $ar[$i] </br>\n";
		}
		
		print <<<HERE
	<h3>Date of Birth:</br></h3>
	<form method="get" action="dateBirth.php">
		<fieldset>
			<label>Month: </label>
			<select name="month">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
			</select><br/>
			<label>Day: </label>
			<select name="day"> 
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
			</select><br/>
			<label>Year: </label>
			<input type="text" name="year" size="30"/><br/>
			<input type="submit"/>
		</fieldset>
	</form> 
HERE;
	
	print "<h1>PART 2:<br></h1>";
	print <<<HERE
	<h3>Grade Calculator (Out of 100):</br></h3>
	<form method="get" action="gradeCalc.php">
		<fieldset>
			<label>Grade 1: </label>
			<input type="text" name="grade1" size="30"/><br/>
			<label>Grade 2: </label>
			<input type="text" name="grade2" size="30"/><br/>
			<label>Grade 3: </label>
			<input type="text" name="grade3" size="30"/><br/>
			<label>Grade 4: </label>
			<input type="text" name="grade4" size="30"/><br/>
			<label>Grade 5: </label>
			<input type="text" name="grade5" size="30"/><br/>
			<input type="submit"/>
		</fieldset>
	</form> 
HERE;
	?>
	<p><a href = "lab7.txt">PHP Source Code</a></p>
</body>

</html>
