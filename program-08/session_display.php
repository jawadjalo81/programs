<?php
//Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
       <link rel="SHORTCUT ICON" href="/images/favicon.ico">
        <title>
            program-08 
        </title>
		<style>
		.error {color: #FF0000;}
		</style>
    </head>
    <body>
    <center>
	<?php
            $_SESSION["city"] = "Austin";
            $_SESSION["state"] = "Texas";
        // Echo session variables that were set on previous page
        echo "City is " . $_SESSION["city"] . ".<br>";
        echo "State is " . $_SESSION["state"] . ".";
        ?>	
	<div>
	<h3> Go back to index.php</h3>
	<a href="index.php">index.php</a><br>
</div>
</center>
</body>
</html>