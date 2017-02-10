<!-- Collin Dreher -->
<!DOCTYPE html>
<html>

<head>
	<title>Dice Game</title>
    <link href = "diceGameStyle.css" rel= "stylesheet"/>
</head>

<body>
    <h1>Dice Game</h1><br/>


    <?php
		printBeginning();
		printForm();
		
		
function printBeginning() 
{
	global $total;
	$guess = filter_input(INPUT_POST,"guess");
	$dice = filter_input(INPUT_POST,"dice"); 

	printDice($dice);

	if (!filter_has_var(INPUT_POST, "guess")) 
	{
		print "<h2>Welcome to my Dice Game</h2>";
	} 
	else if ($guess == $total) 
	{
		print "<h2>Good Guess. You Win!</h2>";
	} 
	else 
	{
		print 
			"<h3>Sorry, you're wrong. Guess again!</h3>
			<p>Your guess: $guess <br/>Correct Total: $total</p>";
	}
		
} 


function showDie($value){
  print <<<HERE
  <img src = "die$value.png"
	   height = "100"
	   width = "100"
	   alt = "die: $value" />
 
HERE;
} 


function printDice($dice) 
{
	global $total;
	print "<h3>New Roll:</h3> \n";
	$total = 0;
  
	for($i=1; $i<=$dice; $i+=1)
	{
	$value = rand(1,6);
	showDie($value);
	$total=$total+$value;
	}
	return $total;
} 
	  
function printForm() 
{ 
  global $total;

  print <<<HERE
	<form method="post" action="">
		<fieldset>
			<label> Choose the number of dice you would like to roll:</label>
			<select name="dice">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select><br/>
			<label>What do you think the number will be?:</label>
			<select name="guess"> 
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
			</select><br/>
			<input type="submit"/>
		</fieldset>
	</form> 
HERE;
}
    
    ?>
	<p><a href="result.txt">PHP Source Code</a></p>   
</body>
</html>
