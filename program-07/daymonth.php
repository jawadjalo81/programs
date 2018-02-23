<!DOCTYPE HTML>  
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
		  return $data;
	}
        $daysofweek = $_GET["day"];
		$monthofyear = $_GET["month"];
		$daysofweek = validate_input($daysofweek);
		$monthofyear = validate_input($monthofyear);
        echo "<h3> Requirement #03</h3>";
		echo "<h2>Welcom to the day of month PHP page</h2>";	
		echo "You chose ", $daysofweek, " and ", $monthofyear;
	?>
		<div>
			<h3> Go back to index.php</h3>
			<a href="index.php">index.php</a><br>
        </div>
</body>
</html>