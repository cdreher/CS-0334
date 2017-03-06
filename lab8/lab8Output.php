<!--Collin Dreher-->
<!DOCTYPE html>

<html>

<head>
	<title>Lab 8 Output</title>
</head>

<body>

<?PHP

$firstName = filter_input(INPUT_POST, "firstName");
$lastName = filter_input(INPUT_POST, "lastName");
$address = filter_input(INPUT_POST, "address");
$schoolAttend = filter_input(INPUT_POST, "schoolAttend");
$major = filter_input(INPUT_POST, "major");
$gradYear = filter_input(INPUT_POST, "gradYear");
$gpa = filter_input(INPUT_POST, "gpa");
$favClass = filter_input(INPUT_POST, "favClass");
$comments = filter_input(INPUT_POST, "comments");

//open the output file
$fileBase = customer;
$htmlFile = $fileBase . ".html";
$masFile = $fileBase . ".mas";

$htfp = fopen($htmlFile, "w");
$htData = buildHTML();
fputs($htfp, $htData);
fclose($htfp);

$msfp = fopen($masFile, "a");
$msData = buildMas();
fputs($msfp, $msData);
print <<<HERE
<pre>
$msData
</pre>

HERE;

fclose ($msfp);

function buildMas(){
  //builds the master file
  global $firstName, $lastName, $address, $schoolAttend, $major, $gradYear, $gpa, $favClass, $comments;
  $msData = $firstName . "\n";
  $msData .= $lastName . "\n";
  $msData .= $address . "\n";
  $msData .= $schoolAttend . "\n";
  $msData .= $major . "\n";
  $msData .= $gradYear . "\n";
  $msData .= $gpa . "\n";
  $msData .= $favClass . "\n";
  $msData .=  $comments. "\n\n";
  return $msData;
} // end buildMas

function buildHTML(){
  //builds the master file
  global $firstName, $lastName, $address, $schoolAttend, $major, $gradYear, $gpa, $favClass, $comments;
  $htData = $firstName . "\n";
  $htData .= $lastName . "\n";
  $htData .= $address . "\n";
  $htData .= $schoolAttend . "\n";
  $htData .= $major . "\n";
  $htData .= $gradYear . "\n";
  $htData .= $gpa . "\n";
  $htData .= $favClass . "\n";
  $htData .=  $comments. "\n\n";
  
  //print $htData;
  return $htData;
} // end buildHTML


?>

<p><a href="customer.html">customer.html</a></p>
<p><a href="customer.mas">customer.mas</a></p>
<p><a href="lab8input.php">Back</a></p>
</body>
</html>
