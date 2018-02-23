<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<div>
			<h3> Day and month</h3>
			<br><br>
            <form method="POST" action="selfprocessor.php">
             Day:   <input list="daysofweek" name="daysofweek" />
                <datalist id="daysofweek">
                    <option value="Monday">"Monday"</option>
                    <option value="Tuesday">"Tuesday"</option>
                    <option value="Wednesday">"Wednesday"</option>
                    <option value="Thursday">"Thursday"</option>
                    <option value="Friday">"Friday"</option>
                    <option value="Saturday">"Saturday"</option>
                    <option value="Sunday">"Sunday"</option> 
                </datalist>
            <br>
              month:  <input list="monthofyear" name="monthofyear" />
                <datalist id="monthofyear">
                    <option value="January">"January"</option>
                    <option value="Feburary">"Feburary"</option>
                    <option value="March">"March"</option>
                    <option value="April">"April"</option>
                    <option value="May">"May"</option>
                    <option value="June">"June"</option>
                    <option value="July">"July"</option> 
                    <option value="August">"August"</option>
                    <option value="September">"September"</option>
                    <option value="October">"October"</option>
                    <option value="Noverber">"Noverber"</option>
                    <option value="December">"December"</option>
                </datalist>
                <h3> Favorites</h3>
			  <form method="post" action="favorites.php" >  
			  Name: <input type="text" name="Name">			  
			  <br><br>
			  Favorite Movie: <input type="text" name="Movie">			  
			  <br><br>
			  Favorite Food: <input type="text" name="Food">			  
			  <br><br>
			  Favorite Season:
			  <input type="radio" name="Season" value="Summer" CHECKED />Summer
			  <input type="radio" name="Season" value="Fall">Fall
			  <input type="radio" name="Season" value="Spring">Spring
			  <input type="radio" name="Season" value="Winter">Winter			  
			  <br><br>
			  Comment: <textarea name="comment" rows="5" cols="40">(Optional)</textarea>
			  <br><br>  
			  <h3> New HTML</h3>
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
				<input type="date" name="bday" max="1979-12-31">
			  <br><br>
			  Enter a number (between 1 and 5):<br>
			  Attributes: min, max, step<br>
  				<input type="number" name="quantity" min="1" max="5" step="1">
			  <br><br>
			  <input type="submit" name="submit" value="Submit">  
			</form>
        </div>
	<?php 
	$daysofweekErr = $monthofyearErr = "";
		$daysofweek = $monthofyear = "";
		if(isset($_POST['submit'])) {
			    $daysofweek = $_POST['daysofweek'];
                //echo $daysofweek;
				$monthofyear = $_POST['monthofyear'];
                //echo $monthofyear;
            }
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  if (empty($_POST["daysofweek"])) {
			$daysofweekErr = "daysofweek is required";
		  } else {
			  $daysofweek = validate_input($_POST["daysofweek"]);
		  }
		  if (empty($_POST["monthofyear"])) {
			$monthofyearErr = "monthofyear is required";
		  } else {
			  $monthofyear = validate_input($_POST["monthofyear"]);
		  }
		}
		function validate_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
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
			  $Season = validate_input($_POST["Season"]);
		  }
		  if (empty($_POST["Food"])) {
			$FoodErr = "Food is required";
		  } else {
			  $Food = validate_input($_POST["Food"]);
		  }
		  $comment = validate_input($_POST["comment"]);
		}
		$favcolorErr = $bdayErr = $emailErr = $bday2Err = $quantityErr = "";
$favcolor = $bday = $email = $bday2 = $quantity = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["favcolor"])) {
      $favcolorErr = "favcolor is required";
  } else {
      $favcolor = validate_input($_POST["favcolor"]);
  }
  if (empty($_POST["bday"])) {
      $bdayErr = "Date is required";
  } else {
      $bday = validate_input($_POST["bday"]);
  } 
  if (empty($_POST["email"])) {
      $email = "email is required";
  } else {
      $email = validate_input($_POST["email"]);
  }
  if (empty($_POST["bday2"])) {
      $bday2Err = "Date is required";
  } else {
      $bday2 = validate_input($_POST["bday2"]);
  }
  if (empty($_POST["quantity"])) {
      $quantityErr = "Date is required";
  } else {
      $quantity = validate_input($_POST["quantity"]);
  }
}
		echo "Thank you for filling this out:", ",<br>";
		echo "You chose ", $daysofweek, " and ", $monthofyear, ",<br>";
		echo "Your favorite name is: ", $name, ",<br>";
		echo "Your favorite movie is: ", $movie, ",<br>";
		echo "Your favorite food is: ", $Food, ",<br>";
		echo "Your favorite season is: ", $Season, ",<br>";	
		echo "Your comment was: ", $comment, ",<br>";
		echo $favcolor;
		echo "<br>";
		echo $bday;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $bday2;
		echo $quantity;
?>
<div>
			<h3> Go back to index.php</h3>
			<a href="index.php">index.php</a><br>
        </div>
</body>
</html>