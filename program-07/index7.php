<!DOCTYPE html>
<html>
    <head>
       <link rel="SHORTCUT ICON" href="/images/favicon.ico">
        <title>
            program-07 folder
        </title>
		<style>
		.error {color: #FF0000;}
		</style>
    </head>
    <body>
        <hr>
        <h1> index7.php in the program-07 folder</h1>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #01</h3>
			<a href="selfprocessor.php">selfprocessor.php</a><br>
			<a href="validatecontrols.php">validatecontrols.php</a><br>
			<br><br>
			<?php  
			if(isset($_POST['daysofweek'])) {
			    $daysofweek = $_POST['daysofweek'];
                echo $daysofweek;
            }
            if(isset($_POST['monthofyear'])) {
                $monthofyear = $_POST['monthofyear'];
                echo $monthofyear;
			}
            ?>

            <form method="post" action="daymonth.php">
                Day:<input list="daysofweek" name="daysofweek" />
                <datalist id="daysofweek">
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option> 
                </datalist>
            <br>
                Month:<input list="monthofyear" name="monthofyear" />
                <datalist id="monthofyear">
                    <option value="January">January</option>
                    <option value="Feburary">Feburary</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option> 
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="Noverber">Noverber</option>
                    <option value="December">December</option>
                </datalist><br>
                <input type="submit" name="submit" />
            </form>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #02</h3>
			<p>Placed the two datalists in a form</p>
			<p>action="daymonth.php" method="get"</p>
			
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #03</h3>
			<a href="daymonth.php">daymonth.php</a><br>
			
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #04</h3>
		<?php 
		
		$nameErr = $movieErr = $Fooderr = $SeasonErr = "";
		$name = $movie = $Food = $Season = $comment = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  if (empty($_POST["Name"])) {
			$nameErr = "Name is required";
		  } else {
			  $name = validate_input($_POST["Name"]);
		  }
		  
		  if (empty($_POST["Movie"])) {
			$movieErr = "Movie is required";
		  } else {
			  $movie = validate_input($_POST["Movie"]);
		  }
			
		  if (empty($_POST["Season"])) {
			$Season = "Season is required";
		  } else {
			  $Season = validate_input($_GET["Season"]);
		  }

		  if (empty($_GET["Food"])) {
			$FoodErr = "Food is required";
		  } else {
			  $Food = validate_input($_POST["Food"]);
		  }
		  $comment = validate_input($_POST["comment"]);
		  
		}

		function validate_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
		
	?>
			<p><span class="error">* required field.</span></p>
			<form method="post" action="favorites.php" method="POST">  
			  Name: <input type="text" name="name">
			  <span class="error">* <?php echo $nameErr;?></span>
			  <br><br>
			  Favorite Movie: <input type="text" name="Movie">
			  <span class="error">* <?php echo $movieErr;?></span>
			  <br><br>
			  Favorite Food: <input type="text" name="Food">
			  <span class="error"><?php echo $Fooderr;?></span>
			  <br><br>
			  Favorite Season:
			  <input type="radio" name="Season" value="Summer" CHECKED />Summer
			  <input type="radio" name="Season" value="Fall">Fall
			  <input type="radio" name="Season" value="Spring">Spring
			  <input type="radio" name="Season" value="Winter">Winter
			  <span class="error">* <?php echo $SeasonErr;?></span>
			  <br><br>
			  Comment: <textarea name="comment" rows="5" cols="40">(Optional)</textarea>
			  <br><br>
			  
			  <input type="submit" name="submit" value="Submit">  
			</form>
			
			
			
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #05</h3>
			<a href="favorites.php">favorites.php</a><br>

        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #06</h3>
			<form action="html.php" method="POST">  
			  Color: <br>
			  Attributes: required<br>
			  <input type="color" name="favcolor" pattern=".{3,}">
			  <br><br>
			  Date: <input type="date" name="bday">
			  <br><br>
			  E-mail: <br>
			  Attributes: required<br>
			  <input type="email" name="email" required>
			  <br><br>
			  Enter a date before 1980-01-01:<br>
			  Attributes: max<br>
				<input type="date" name="bday2" max="1979-12-31">
			  <br><br>
			  Enter a number (between 1 and 5):<br>
			  Attributes: min, max, step<br>
  				<input type="number" name="quantity" min="1" max="5" step="1">
			  <br><br>
			  <input type="submit" name="submit" value="Submit">  
			</form>
			
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #07</h3>
			<a href="html.php">html.php</a><br>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #08</h3>
			<a href="selfprocessor.php">selfprocessor.php</a><br>
        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #09</h3>
			<a href="validatecontrols.php">validatecontrols.php</a><br>
        </div>

    </body>
</html>