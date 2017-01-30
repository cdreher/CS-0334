<!--Collin Dreher -->
<!DOCTYPE html>
<html>

<head>
	<title>Nursery Rhyme PHP Script</title>
</head>

<body>

	<?php 
		$mainSubject = filter_input(INPUT_GET, "mainSubject");
		$object = filter_input(INPUT_GET, "object");
		$noun1 = filter_input(INPUT_GET, "noun1");
		$pastTenseVerb = filter_input(INPUT_GET, "pastTenseVerb");
		$noun2 = filter_input(INPUT_GET, "noun2");
		$pastTenseVerb2 = filter_input(INPUT_GET, "pastTenseVerb2");

			print "<h1>The Itsy Bitsy $mainSubject Song - Lyrics</h1>";
			print "<p>The Itsy Bitsy $mainSubject went up the $object<br/>
			Down came the $noun1 and $pastTenseVerb the $mainSubject out<br/>
			Out came the $noun2 and $pastTenseVerb2 up all the $noun1<br/>
			And the Itsy Bitsy $mainSubject went up the $object again!";

	?>

</body>
</html>
