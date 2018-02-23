<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
		<h2>PHP Form Validation Example</h2>
		<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">  
		  Name: <input type="text" name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>"/>
		  <br><br>
		  E-mail: <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"/>
		  <br><br>
		  Website: <input type="url" name="website" value="<?php if (isset($_POST['website'])) echo $_POST['website']; ?>"/>
		  <br><br>
		  Devoper Type:<br>
		  <input type="radio" name="Devoper" value="Front End" value="<?php if (isset($_POST['Front End'])) echo $_POST['Front End']; ?>"/>Front End
		  <input type="radio" name="Devoper" value="Server Side" value="<?php if (isset($_POST['Server Side'])) echo $_POST['Server Side']; ?>"/>Server Side
		  <input type="radio" name="Devoper" value="Full Stack" value="<?php if (isset($_POST['Full Stack'])) echo $_POST['Full Stack']; ?>"/>Full Stack
		  <br><br>
		  	  <input type="submit" name="submit" value="Submit">		 
		</form>
		<?php
		function validate_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
$nameErr = $emailErr = $Devopererr = $websiteErr = "";
$name = $email = $Devoper = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
	echo $nameErr;
	exit;
  } else {
      $name = validate_input($_POST["name"]);
	  if (!preg_match('/^[a-zA-Z ]+$/', $name)){
		  $nameErr = "only letter and space allowed";
		  echo $nameErr;
		  exit;
	  }	  
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
	echo $emailErr;
	exit;	
  } else {
      $email = validate_input($_POST["email"]);
  } 
  if (empty($_POST["website"])) {
    $websiteErr = "Websit is required";
	echo $websiteErr;
	exit;
  } else {
      $website = validate_input($_POST["website"]);
  }
  if (empty($_POST["Devoper"])) {
    $Devopererr = "Devoper is required";
	echo $Devopererr;
	exit;
  } else {
      $Devoper = validate_input($_POST["Devoper"]);
  }
  echo "<h2>Submitted form</h2>";
		echo "<h2>Your Input:</h2>";
		echo $name;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $website;
		echo "<br>";
		echo $Devoper;
}	
		?>
		<div>
			<h3> Go back to index.php</h3>
			<a href="index.php">index.php</a><br>
        </div>
</body>
</html>
