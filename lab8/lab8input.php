<!--Collin Dreher-->
<!DOCTYPE html>

<html>

<head>
	<title>Lab 8 Input file</title>
	<link href="lab8style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?PHP

 print <<<HERE

  <form action = "lab8Output.php" method = "post">
        
    <fieldset>
      <label>First Name</label>
      <input type = "text"
             name = "firstName" />
             <br />
      <label>Last Name</label>
      <input type = "text"
             name = "lastName"/>
			<br/>
	  <label>Address</label>
      <input type = "text"
             name = "address"/>
			<br/>
      <label>School Attending</label>
      <input type = "text"
             name = "schoolAttend"/>
			<br/> 
	  <label>Intended Major</label>
      <input type = "text"
             name = "major"/>
			<br/>
	  <label>Graduation Year</label>
      <input type = "text"
             name = "gradYear"/>
			<br/>
	  <label>Current GPA</label>
      <input type = "text"
             name = "gpa"/>
			<br/>
	  <label>Favorite class</label>
      <input type = "text"
             name = "favClass"/>
			<br/>
      <textarea name = "comments" rows = "20" cols = "60">If you could eat dinner with one famous person from any time period, who would it be and why?
		</textarea>            

      <button type = "submit">
        Submit Information
      </button>
    </fieldset>
  </form>
HERE;

?>
<br/>
<p><a href="lab8input.txt">Main PHP code</a></p>
<p><a href="lab8Output.txt">Output PHP code</a></p>
<p><a href="http://cdreher26.x10host.com/CS0334/">Back to directory</a></p>
</body>
</html>
