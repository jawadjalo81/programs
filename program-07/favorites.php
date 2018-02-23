<!DOCTYPE HTML> 
<html> 
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 
<?php
function validate_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;		}
        echo "	<h3> Requirement #05</h3>";	
		echo "<h2>Welcom to the favorites PHP page</h2>";		
		$Name = validate_input($_POST["Name"]);
	    $Movie = validate_input($_POST["Movie"]);
        $Food = validate_input($_POST["Food"]);
	    $Season = validate_input($_POST["Season"]);
		$Comment = validate_input($_POST["comment"]);
		echo "Thank you for filling this out";
		echo " Your name: ", $Name, "<br>";
		echo "Your favorite movie is: ", $Movie, "<br>";
		echo "Your favorite food is: ", $Food, "<br>";
		echo "Your favorite season is: ", $Season, "<br>";	
		echo "Your comment was: ", $Comment, "<br>";
	?>
		<div>
			<h3> Go back to index.php</h3>
			<a href="index.php">index.php</a><br>
        </div>
</body>
</html>