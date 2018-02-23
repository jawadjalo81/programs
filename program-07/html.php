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
		  return $data;
   }
		  echo "<h3> Requirement #07</h3>";
      $favcolor = validate_input($_POST["favcolor"]);
      $bday = validate_input($_POST["bday"]);
      $email = validate_input($_POST["email"]);
      $bday2 = validate_input($_POST["bday2"]);
      $quantity = validate_input($_POST["quantity"]);
		echo "<h2>Submitted form</h2>";
		echo "<h2>Your Input:</h2>";
		echo $favcolor;
		echo "<br>";
		echo $bday;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $bday2;
		echo "<br>";
		echo $quantity;
 ?>
		<div>
	<h3> Go back to index.php</h3>
	<a href="index.php">index.php</a><br>
       </div>
</body>
</html>