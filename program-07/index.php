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
        <h1>  program-07 </h1>
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <hr></hr>
        <div>
			<h3> Requirement #01</h3>
			<?php
			$daysofweek =array("", "Monday", "Tuesday" ,"Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
			$monthofyear =array("", "January", "Feburary" ,"March", "April", "May", "June", "July", "August" , "September", "October", "Noverber", "December");
			?>
			<a href="selfprocessor.php">selfprocessor.php</a><br>
			<a href="validatecontrols.php">validatecontrols.php</a><br> 
			<br><br>	
<!------------------------------------------------------------------------------------------------------------------------------------------------ -->			
			<h3> Requirement #02</h3>
            <form method="get" action="daymonth.php">
                Day:<select name="day">
				     <?php
					 $dayslength = count($daysofweek);
					 for ($x=0; $x < $dayslength; $x++){
						 echo '<option>'.$daysofweek[$x].'</option>';
					 }
					 ?>
				</select>
				<br>
                Month:<select name="month">
				     <?php
					 $monthslength = count($monthofyear);
					 for ($x=0; $x < $monthslength; $x++){
						 echo '<option>'.$monthofyear[$x].'</option>';
					 }
					 ?>
					 </select>
					 <br>
					  <input type="submit" name="submit" value="Submit">				  
            </form>
        </div>
        <hr></hr>
		<!------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <div>
			<h3> Requirement #04</h3>			
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
			  <input type="submit" name="submit" value="Submit">  
			</form>			
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